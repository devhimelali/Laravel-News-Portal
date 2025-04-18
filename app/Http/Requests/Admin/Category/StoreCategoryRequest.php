<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'en_name' => 'required|string|max:255',
            'bn_name' => 'required|string|max:255',
            'parent_category' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'en_name.required' => 'The English name field is required.',
            'bn_name.required' => 'The Bangla name field is required.',
            'parent_category.exists' => 'The parent category does not exist.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, webp.',
        ];
    }
}
