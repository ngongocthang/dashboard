<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:20|regex:/^[a-zA-Z0-9]+$/|not_regex:/\s/',
            'phone' => 'required|digits:10|regex:/^[0-9]+$/',
            'role' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'Tệp tải lên phải là ảnh!',
            'image.mimes' => 'Chỉ cho phép các định dạng tệp hình ảnh(jpeg,png,jpg,gif,svg)!',
            'image.max' => 'Image tối đa 2048 kí tự!',
            'name.required' => 'Tên không được bỏ trống!',
            'name.regex' => 'Tên chỉ chứa chữ cái!',
            'name.max' => 'Tên tối đa 255 kí tự!',
            'email.required' => 'Email không được trống!',
            'email.email' => 'Email phải đúng định dạng!',
            'email.unique' => 'Email đã được sử dụng!',
            'password.required' => 'Password không được bỏ trống!',
            'password.max' => 'Password tối đa 20 kí tự!',
            'password.regex' => 'Password chỉ chứa chữ cái và chữ số!',
            'password.not_regex' => 'Password không được chứa khoảng trắng!',
            'phone.required' => 'Phone không được trống!',
            'phone.digits' => 'Phone chỉ chứa 10 số!',
            'phone.regex' => 'Phone chỉ chứa chữ số!',
        ];
    }
}
