<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'nama_pelanggan' => 'required|string|max:255',
            'tanggal_order' => 'required|date',
            'jenis_pesanan' => 'required|string|max:255',
            'jumlah_pesanan' => 'required|integer|min:1',
            'total_harga' => 'required|integer|min:0',
            'status' => 'in:proses,selesai'
        ];
    }
}
