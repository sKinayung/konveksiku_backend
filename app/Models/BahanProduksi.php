<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanProduksi extends Model
{
    protected $table = 'bahan_produksi';
    protected $fillable = [
        'order_id',
        'bahan_id',
        'jumlah'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }
}
