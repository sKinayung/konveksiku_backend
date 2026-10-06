<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'nama_pelanggan' => 'sometimes|required|string|max:255',
            'tanggal_order' => 'sometimes|required|date',
            'jenis_pesanan' => 'sometimes|required|string|max:255',
            'jumlah_pesanan' => 'sometimes|required|integer|min:1',
            'total_harga' => 'sometimes|required|integer|min:0',
            'status' => 'sometimes|required|in:proses,selesai'
        ];
    }
}
