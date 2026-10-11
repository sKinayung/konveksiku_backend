<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovements extends Model
{
    protected $table = 'stock_movements';
    protected $fillable = [
        'bahan_id',
        'order_id',
        'type',
        'quantity',
        'catatan',
    ];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
