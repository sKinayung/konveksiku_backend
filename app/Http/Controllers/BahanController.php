<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBahanRequest;
use App\Http\Requests\UpdateBahanRequest;
use App\Http\Resources\BahanResource;
use App\Models\Bahan;


class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BahanResource::collection(Bahan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBahanRequest $request)
    {
        $bahan = Bahan::create($request->validated());

        return response()->json([
            'message' => 'Bahan berhasil ditambahkan',
            'data' => new BahanResource($bahan)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BahanResource(Bahan::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBahanRequest $request, string $id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->update($request->validated());

        return response()->json([
            'message' => 'Bahan berhasil diupdate',
            'data' => new BahanResource($bahan)
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
