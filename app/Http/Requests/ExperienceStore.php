<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceStore extends FormRequest
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
            'experience' => 'required|unique:experiences,nama_pengalaman',
            'jabatan' => 'required',
            'tenggat' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'experience.required' => 'Nama experience tidak boleh kosong.',
            'experience.unique' => 'Nama experience sudah ada.',
            'jabatan.required' => 'Jabatan tidak boleh kosong.',
            'tenggat.required' => 'Tenggat waktu tidak boleh kosong.',
        ];
    }
}
