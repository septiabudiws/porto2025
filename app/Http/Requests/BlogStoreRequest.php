<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
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
            'judul' => 'required|string|max:255',
            'kategori' => 'required|exists:kategoriblogs,id',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'kategori.required' => 'Kategori tidak boleh kosong.',
            'kategori.exists' => 'Kategori yang dipilih tidak valid.',
            'judul.required' => 'Judul tidak boleh kosong.',
            'konten.required' => 'Deskripsi tidak boleh kosong.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        ];
    }
}
