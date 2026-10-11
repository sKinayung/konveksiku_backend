<?php

namespace App\Services;

use App\Models\Order;
use App\Models\StockMovements;
use App\Models\Bahan;
use Exception;

class OrderService
{
    public function order(array $data): Order
    {
        $bahan = Bahan::findOrFail($data['bahan_id']);

        if ($bahan->stock < 1) {
            throw new Exception('Stok bahan habis, tidak bisa produksi');
        }

        $order = Order::create([
            'nama_pelanggan' => $data['nama_pelanggan'],
            'tanggal_order' => $data['tanggal_order'],
            'jenis_pesanan' => $data['jenis_pesanan'],
            'jumlah_pesanan' => $data['jumlah_pesanan'],
            'total_harga' => $data['total_harga'],
            'status' => $data['status'],
            'bahan_id' => $data['bahan_id'],
            'deadline' => $data['deadline'],
            'notes' => $data['notes'],
        ]);

        return $order;
    }
}
