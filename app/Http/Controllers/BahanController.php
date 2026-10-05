<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bahan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bahan = Bahan::create($request->all());

        return response()->json([
            'message' => 'Bahan berhasil ditambahkan',
            'data' => $bahan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Bahan::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->update($request->all());

        return response()->json([
            'message' => 'Bahan berhasil diupdate',
            'data' => $bahan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->delete();

        return response()->json([
            'message' => 'Bahan berhasil dihapus',
        ]);
    }
}
