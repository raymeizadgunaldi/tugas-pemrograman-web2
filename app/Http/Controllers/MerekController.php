<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $mereks = Merek::latest();
    $keyword = request('keyword');
    if($keyword) {
        $mereks->where('merek_kendaraan', 'like', '%'. $keyword . '%')
               ->orWhere('negara', 'like', '%'. $keyword . '%')
               ->orWhere('tahun_berdiri', 'like', '%'. $keyword . '%');
    }

    return view('merek.index', [
        'title' => 'Merek',
        'mereks' => $mereks->paginate(5)->withQueryString(),
    ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('merek.create', [
            'title' => 'merek',
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $validated = $request->validate([
            'merek_kendaraan' => 'required|max:255',
            'negara'          => 'required|max:255',
            'tahun_berdiri'   => 'required|integer|min:1800|max:' . date('Y'),
        ], [
            'merek_kendaraan.required' => 'Merek kendaraan tidak boleh kosong',
            'merek_kendaraan.max'      => 'Merek kendaraan tidak boleh lebih dari :max karakter',
            'negara.required'          => 'Negara tidak boleh kosong',
            'negara.max'               => 'Negara tidak boleh lebih dari :max karakter',
            'tahun_berdiri.required'   => 'Tahun berdiri tidak boleh kosong',
            'tahun_berdiri.integer'    => 'Tahun berdiri harus berupa angka',
            'tahun_berdiri.min'        => 'Tahun berdiri tidak valid',
            'tahun_berdiri.max'        => 'Tahun berdiri tidak boleh melebihi tahun sekarang',
        ]);
 
        Merek::create($validated);
        return to_route('merek.index')->withSuccess('Data merek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merek $merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merek $merek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merek $merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merek $merek)
    {
        //
    }
}