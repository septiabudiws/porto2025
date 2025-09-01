<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationStore extends FormRequest
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
            'sekolah' => 'required|unique:edukasis,nama_pendidikan',
            'jurusan' => 'required',
            'tenggat' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'sekolah.required' => 'Nama sekolah tidak boleh kosong.',
            'sekolah.unique' => 'Nama sekolah sudah ada.',
            'jurusan.required' => 'Nama jurusan tidak boleh kosong.',
            'tenggat.required' => 'Tenggat tidak boleh kosong.',
            'tenggat.string' => 'Tenggat harus berupa teks.',
        ];
    }
}
