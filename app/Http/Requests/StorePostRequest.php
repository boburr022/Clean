<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function attributes()
    {
        return [
            'title' => 'Sarvalha',
            'short_content' => 'Qisqacha mazmun',
            'Content' => 'Ma\'qola',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'short_content' => 'required',
            'Content' => 'required',
            'photo' => 'nullable|image',
        ];
    }
}
