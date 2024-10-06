<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        try {
            $admin = Admin::where('phone', $request->phone)->first();

            if (!$admin) {
                toastr()->error('Số điện thoại không tồn tại.');
                return back();
            }

            $credentials = $request->only('phone', 'password');
            $remember = $request->filled('remember_me');

            if (Auth::guard('admin')->attempt($credentials, $remember)) {
                return redirect()->intended(route('admin.index'));
            }

            if (Hash::check($request->password, $admin->password)) {
                Auth::guard('admin')->login($admin, $remember);
                return redirect()->intended(route('admin.index'));
            }

            toastr()->error('Mật khẩu không đúng, vui lòng thử lại');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Có lỗi xảy ra, vui lòng thử lại sau.');
            return back();
        }
    }

    public function showPassword()
    {

    }
    public function updatePassword(){

    }
    public function logout()
    {

    }
}
