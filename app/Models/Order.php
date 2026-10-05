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
    ];
}
