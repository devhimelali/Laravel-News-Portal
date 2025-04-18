<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class ToggleVisibilityRequest extends FormRequest
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
            'field_name' => 'required|string|in:show_in_menu,show_in_home',
            'status' => 'required|in:0,1',
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
            'field_name.required' => 'Field name is required',
            'field_name.in' => 'Field name is invalid',
            'field_name.string' => 'Field name must be a string',
            'status.required' => 'Status is required',
            'status.in' => 'Status is invalid',
        ];
    }
}
