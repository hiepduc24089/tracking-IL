<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits_between:9,15|unique:users,phone',
            'full_name' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'phone.digits_between' => 'Số điện thoại không hợp lệ',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'full_name.required' => 'Họ và tên là bắt buộc',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password_confirmation.required' => 'Mật khẩu là bắt buộc',
            'password_confirmation.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.confirmed' => 'Mật khẩu chưa trùng khớp',
        ];
    }
}
