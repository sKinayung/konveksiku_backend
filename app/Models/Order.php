<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'nama_pelanggan',
        'tanggal_order',
        'jenis_pesanan',
        'jumlah_pesanan',
        'total_harga',
        'status',
        'bahan_id',
        'deadline',
        'notes',
    ];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }

    public function stockMovement()
    {
        return $this->hasMany(StockMovements::class);
    }

    public function bahanProduksi()
    {
        return $this->hasMany(BahanProduksi::class);
    }
}
