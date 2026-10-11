<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahan';
    protected $fillable = [
        'nama_bahan',
        'unit',
        'stock',
        'status',
        'kategori_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBahan::class);
    }

    public function stock_movements()
    {
        return $this->hasMany(StockMovements::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function bahanProduksi()
    {
        return $this->hasMany(BahanProduksi::class);
    }
}
