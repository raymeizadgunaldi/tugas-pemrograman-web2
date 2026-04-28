<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kendaraan.index', [
            'title' => 'Kendaraan',
            'kendaraans' => Kendaraan::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create', ['title' => 'Create Kendaraan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validated = $request->validate([
        'merek' => 'required|max:255',
        'tipe'  => 'required|max:255',
        'warna' => 'required|max:255',
        'tahun' => 'required|integer',
        'platnomor'  => 'required|max:255|unique:kendaraans',
        'bahanbakar' => 'required|max:255',
    ], [
        'merek.required' => 'merek tidak boleh kosong',
        'merek.max' => 'merek tidak boleh lebih dari :max karakter',
        'tipe.required' => 'tipe tidak boleh kosong',
        'tipe.max' => 'merek tidak boleh lebih dari :max karakter',
        'warna.required' => 'warna tidak boleh kosong',
        'warna.max' => 'merek tidak boleh lebih dari :max karakter',
        'tahun.required' => 'tahun tidak boleh kosong',
        'tahun.integer' => 'tahun harus berupa angka',
        'platnomor.required' => 'plat nomor tidak boleh kosong',
        'platnomor.max' => 'merek tidak boleh lebih dari :max karakter',
        'bahanbakar.required' => 'bahan bakar tidak boleh kosong',
        'bahanbakar.max' => 'merek tidak boleh lebih dari :max karakter',
       
    ]);

      Kendaraan::create($validated);
      return to_route('kendaraan.index')->withSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', [
            'title' => 'Edit Kendaraan',
            'kendaraan' => $kendaraan,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
                    $validated = $request->validate([
        'merek' => 'required|max:255',
        'tipe'  => 'required|max:255',
        'warna' => 'required|max:255',
        'tahun' => 'required|integer',
        'platnomor'  => 'required|max:255|unique:kendaraans',
        'bahanbakar' => 'required|max:255',
    ], [
        'merek.required' => 'merek tidak boleh kosong',
        'merek.max' => 'merek tidak boleh lebih dari :max karakter',
        'tipe.required' => 'tipe tidak boleh kosong',
        'tipe.max' => 'merek tidak boleh lebih dari :max karakter',
        'warna.required' => 'warna tidak boleh kosong',
        'warna.max' => 'merek tidak boleh lebih dari :max karakter',
        'tahun.required' => 'tahun tidak boleh kosong',
        'tahun.integer' => 'tahun harus berupa angka',
        'platnomor.required' => 'plat nomor tidak boleh kosong',
        'platnomor.max' => 'merek tidak boleh lebih dari :max karakter',
        'bahanbakar.required' => 'bahan bakar tidak boleh kosong',
        'bahanbakar.max' => 'merek tidak boleh lebih dari :max karakter',
       
    ]);

     $kendaraan->update($validated);
      return to_route('kendaraan.index')->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
    }
}