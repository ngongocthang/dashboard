<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required|max:500',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'status' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'Tệp tải lên phải là ảnh!',
            'image.mimes' => 'Chỉ cho phép các định dạng tệp hình ảnh(jpeg,png,jpg,gif,svg)!',
            'image.max' => 'Image tối đa 2048 kí tự!',
            'name.required' => 'Name không được trống!',
            'name.max' => 'Name tối đa 255 kí tự!',
            'description.required' => 'Description không được trống!',
            'description.max' => 'Description tối đa 500 kí tự!',
            'price.required' => 'Price không được trống!',
            'price.numeric' => 'Price phải là một số!',
            'quantity.required' => 'Quantity không được trống!',
            'quantity.integer' => 'Quantity phải là một số nguyên!',
            'quantity.min' => 'Quantity ít nhất bằng 1!',
            'status.required' => 'Status không được trống!',
            'category_id.required' => 'Status không được trống!',
        ];
    }
}
