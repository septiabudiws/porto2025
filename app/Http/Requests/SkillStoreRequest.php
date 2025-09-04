<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillStoreRequest extends FormRequest
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
            'skill' => 'required|unique:skills,nama',
            'level' => 'required|integer|min:0|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'skill.required' => 'Skill tidak boleh kosong.',
            'skill.unique' => 'Skill sudah ada.',
            'level.required' => 'Level skill tidak boleh kosong.',
            'level.integer' => 'Level skill harus berupa angka.',
            'level.min' => 'Level skill minimal 0.',
            'level.max' => 'Level skill maksimal 100.',
        ];
    }
}
