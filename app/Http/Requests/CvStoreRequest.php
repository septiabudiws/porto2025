<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvStoreRequest extends FormRequest
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
        return [['nama_cv' => 'required|mimes:pdf,doc,docx|max:5120']];
    }

    public function messages(): array
    {
        return [
            'nama_cv.required' => 'File CV wajib diunggah.',
            'nama_cv.mimes' => 'Format file CV harus berupa pdf, doc, atau docx.',
            'nama_cv.max' => 'Ukuran file CV maksimal 5MB.',
        ];
    }
}
