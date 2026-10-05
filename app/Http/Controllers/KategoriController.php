<?php

namespace App\Http\Controllers;

use App\Models\KategoriBahan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return KategoriBahan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = KategoriBahan::create($request->all());

        return response()->json([
            'message' => 'Kategori berhasil ditambahkan',
            'data' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return KategoriBahan::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = KategoriBahan::findOrFail($id);
        $kategori->update($request->all());

        return response()->json([
            'message' => 'Kategori berhasil diupdate',
            'data' => $kategori
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriBahan::findOrFail($id);
        $kategori->delete();

        return response()->json([
            'message' => 'Kategori berhasil dihapus',
        ]);
    }
}
