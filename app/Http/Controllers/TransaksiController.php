<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('transaksi.index', [
            'title' => 'Transaksi',
            'transaksis' => Transaksi::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('transaksi.create', [
            'title' => 'Create Transaksi',
            'mereks' => Merek::latest()->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
            $validated = $request->validate([
       'merek_id'          => 'required|exists:mereks,id',
        'name'              => 'required|max:255',
        'tanggal_transaksi' => 'required',
        'durasi'            => 'required|integer',
        'harga'             => 'required|integer',
        'status'            => 'required|in:Pending,Selesai,Dibatalkan',
    ], [
        'merek_id.required'          => 'Merek tidak boleh kosong',
        'merek_id.exists'            => 'Merek yang dipilih tidak ditemukan',
        'name.required'              => 'Nama tidak boleh kosong',
        'name.max'                   => 'Nama tidak boleh lebih dari :max karakter',
        'tanggal_transaksi.required' => 'Tanggal transaksi tidak boleh kosong',
        'durasi.required'            => 'Durasi tidak boleh kosong',
        'durasi.integer'             => 'Durasi harus berupa angka',
        'harga.required'             => 'Harga tidak boleh kosong',
        'harga.integer'              => 'Harga harus berupa angka',
        'status.required'            => 'Status tidak boleh kosong',
        'status.in'                  => 'Status tidak valid',
       
    ]);

      Transaksi::create($validated);
      return to_route('transaksi.index')->withSuccess('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
           return view('transaksi.edit', [
            'title' => 'Edit Transaksi',
            'mereks' => Merek::latest()->get(),
            'transaksi' => $transaksi,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
                 $validated = $request->validate([
       'merek_id'          => 'required|exists:mereks,id',
        'name'              => 'required|max:255',
        'tanggal_transaksi' => 'required',
        'durasi'            => 'required|integer',
        'harga'             => 'required|integer',
        'status'            => 'required|in:Pending,Selesai,Dibatalkan',
    ], [
        'merek_id.required'          => 'Merek tidak boleh kosong',
        'merek_id.exists'            => 'Merek yang dipilih tidak ditemukan',
        'name.required'              => 'Nama tidak boleh kosong',
        'name.max'                   => 'Nama tidak boleh lebih dari :max karakter',
        'tanggal_transaksi.required' => 'Tanggal transaksi tidak boleh kosong',
        'durasi.required'            => 'Durasi tidak boleh kosong',
        'durasi.integer'             => 'Durasi harus berupa angka',
        'harga.required'             => 'Harga tidak boleh kosong',
        'harga.integer'              => 'Harga harus berupa angka',
        'status.required'            => 'Status tidak boleh kosong',
        'status.in'                  => 'Status tidak valid',
       
    ]);

      $transaksi->update($validated);
      return to_route('transaksi.index')->withSuccess('data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}