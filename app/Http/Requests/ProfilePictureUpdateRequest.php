<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePictureUpdateRequest extends FormRequest
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
        return [['profile' => 'required|image|mimes:jpg,jpeg,png|max:2048']];
    }

    public function messages(): array
    {
        return [
            'profile.required' => 'Foto profil wajib diunggah.',
            'profile.image' => 'File yang diunggah harus berupa gambar.',
            'profile.mimes' => 'Format foto profil harus berupa jpg, jpeg, atau png.',
            'profile.max' => 'Ukuran foto profil maksimal 2MB.',
        ];
    }
}
