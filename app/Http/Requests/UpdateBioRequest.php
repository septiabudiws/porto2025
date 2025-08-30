<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBioRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'hp' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'lahir' => 'required|string',
            'fb' => 'required',
            'ig' => 'required',
            'yt' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'profesi.required' => 'Profesi wajib diisi.',
            'hp.required' => 'Nomor HP wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'lahir.required' => 'Tempat, tanggal lahir wajib diisi.',
            'fb.required' => 'Link Facebook wajib diisi.',
            'ig.required' => 'Link Instagram wajib diisi.',
            'yt.required' => 'Link YouTube wajib diisi.',
        ];
    }
}
