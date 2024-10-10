<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function forgetPasswordSubmit()
    {
        return 3;
    }

    public function authenticationCode()
    {
        return view('web.auth.authentication-code');
    }

    public function authenticationCodeSubmit()
    {
        return 4;
    }

    public function newPassword()
    {
        return view('web.auth.new-password');
    }

    public function newPasswordSubmit()
    {
        return 5;
    }
}
