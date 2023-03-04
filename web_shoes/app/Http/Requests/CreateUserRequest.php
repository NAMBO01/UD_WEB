<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'username.min' => 'Tên đang nhập phải có ít nhất 5 kí tự',
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Vui lòng nhập password',
            'password.confirmed' => 'Mật khẩu nhập lại không trùng nhau',
            'password.min' => 'Password phải có ít nhất 8 kí tự',
            'password_confirmation.required' => 'Vui lòng nhập mật khẩu xác nhận lại',
            'password_confirmation.min' => 'Password_confirmation phải có ít nhất 8 kí tự',
        ];
    }
}
