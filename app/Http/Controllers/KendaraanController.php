<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kendaraan.index', [
            'title' => 'Kendaraan',
            'kendaraans' => Kendaraan::latest()->get(),
           // 'kendaraans' => Kendaraan::orderBy('merek', 'asc')->get(),
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
        'tipe'  => 'required|max:255',
        'warna' => 'required|max:255',
        'tahun' => 'required|integer',
        'platnomor'  => 'required|max:255|unique:kendaraans',
        'bahanbakar' => 'required|max:255',
        'negara_asal' => 'required|max:255',
        
    ], [
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
        'negara_asal.required' => 'Negara asal tidak boleh kosong',
        'negara_asal.max'     => 'Negara asal tidak boleh lebih dari :max karakter',
       
    ]);

        try {
            DB::beginTransaction();
            Kendaraan::create($validated);
            DB::commit();
            return to_route('kendaraan.index')->withSuccess('Data kendaraan berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route('kendaraan.create')->withError('Data kendaraan gagal ditambahkan');
        }
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
        'tipe'  => 'required|max:255',
        'warna' => 'required|max:255',
        'tahun' => 'required|integer',
        'platnomor'  => 'required|max:255|unique:kendaraans',
        'bahanbakar' => 'required|max:255',
        'negara_asal' => 'required|max:255',

    ], [
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
        'negara_asal.required' => 'Negara asal tidak boleh kosong',
        'negara_asal.max'      => 'Negara asal tidak boleh lebih dari :max karakter',
       
    ]);
        try {
            DB::beginTransaction();
            $kendaraan->update($validated);
            DB::commit();
            return to_route('kendaraan.index')->withSuccess('Data kendaraan berhasil diubah');
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route('kendaraan.edit', $kendaraan)->withError('Data kendaraan gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
      $kendaraan->delete($kendaraan);
      return to_route('kendaraan.index')->withSuccess('data berhasil dihapus');
    }

        //soft deletes
        public function trash()
    {
     return view('kendaraan.trash', [
        'title' => 'Trash Kendaraan',
        'kendaraans' => Kendaraan::onlyTrashed()->latest()->get(),
        ]);
    }

      public function restore(Kendaraan $kendaraan)
    {
        $kendaraan->restore();
          return to_route('kendaraan.trash')->withSuccess('Data berhasil dikembalikan');
    }

}