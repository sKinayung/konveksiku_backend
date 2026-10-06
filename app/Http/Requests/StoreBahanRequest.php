<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBahanRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_bahan' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'status' => 'in:tersedia,habis',
            'kategori_id' => 'required|exists:kategori_bahan,id'
        ];
    }
}
