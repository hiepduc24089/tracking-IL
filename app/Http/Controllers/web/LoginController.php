<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ResetPasswordMail;
use App\Models\EmailOTP;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login()
    {
        return view('web.auth.login');
    }

    public function loginSubmit(LoginRequest $request)
    {
        $loginInput = $request->input('email_phone');

        $user = User::where('email', $loginInput)->orWhere('phone', $loginInput)->first();

        if (!$user) {
            return redirect()->back()
                ->withErrors(['email_phone' => 'Email hoặc số điện thoại không chính xác.'])
                ->withInput();
        }

        $loginType = $user->email === $loginInput ? 'email' : 'phone';

        $credentials = [
            $loginType => $loginInput,
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('home');
        } else {
            return redirect()->back()
                ->withErrors(['password' => 'Mật khẩu không chính xác.'])
                ->withInput();
        }
    }

    public function register()
    {
        return view('web.auth.register');
    }

    public function registerSubmit(RegisterRequest $request)
    {
        try {
            $input = $request->all();
            $user = $this->userRepository->create($input);

            return response()->json([
                'status' => 'success',
                'message' => 'Đăng kí thành công',
                'data' => $user
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Đã xảy ra lỗi. Vui lòng thử lại sau.',
            ], 500);
        }
    }

    public function forgetPassword()
    {
        return view('web.auth.forget-password');
    }

    public function forgetPasswordSubmit(Request $request)
    {
        $messages = [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
        ];

        $request->validate([
            'email' => 'required|email',
        ], $messages);

        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Không tìm thấy email']);
        } else {
            $otp = random_int(100000, 999999);

            EmailOTP::updateOrCreate(
                ['user_id' => $user->id],
                ['otp' => $otp]
            );

            Mail::to($user->email)->send(new ResetPasswordMail($otp));
            session(['user_id' => $user->id]);

            return response()->json([
                'success' => true,
                'redirect' => route('authenticationCode'),
                'status' => 'Mã xác nhận đã được gửi tới Email, vui lòng kiểm tra!',
            ]);
        }
    }

    public function authenticationCode()
    {
        return view('web.auth.authentication-code');
    }

    public function authenticationCodeSubmit(Request $request)
    {
        $request->validate([
            'authentication_code' => 'required|numeric|digits:6',
        ], [
            'authentication_code.required' => 'Mã xác nhận là bắt buộc',
            'authentication_code.numeric' => 'Mã xác nhận phải là số',
            'authentication_code.digits' => 'Mã xác nhận phải là 6 chữ số',
        ]);

        $userId = session('user_id');
        $otp = $request->input('authentication_code');

        $otpRecord = EmailOTP::where('user_id', $userId)
            ->where('otp', $otp)
            ->first();

        if (!$otpRecord) {
            return redirect()->back()->withErrors(['authentication_code' => 'Mã xác nhận không chính xác']);
        }

        $otpRecord->delete();

        return redirect()->route('newPassword')->with('status', 'Mã xác nhận hợp lệ, tiếp tục đặt lại mật khẩu');
    }

    public function newPassword()
    {
        return view('web.auth.new-password');
    }

    public function newPasswordSubmit(Request $request)
    {
        try {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ], [
                'password.required' => 'Mật khẩu là bắt buộc',
                'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
                'password.confirmed' => 'Mật khẩu chưa trùng khớp',
            ]);

            $userId = session('user_id');

            $user = User::find($userId);

            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Không tìm thấy người dùng',
                ], 404);
            }

            $user->password = Hash::make($request->input('password'));
            $user->save();

            $request->session()->forget('user_id');

            return response()->json([
                'status' => 'success',
                'message' => 'Mật khẩu đã được thay đổi thành công. Vui lòng đăng nhập lại.',
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'errors' => $e->validator->errors(),
            ], 422);
        }
    }
}
