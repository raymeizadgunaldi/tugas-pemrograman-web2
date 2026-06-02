<?php

namespace Database\Seeders;

use App\Models\Merek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merek::create(['merek_kendaraan' => 'HONDA', 'negara' => 'jepang', 'tahun_berdiri' => '1954']);
        Merek::create(['merek_kendaraan' => 'YAMAHA', 'negara' => 'viatnam', 'tahun_berdiri' => '1954']);
        Merek::create(['merek_kendaraan' => 'SUZUKI', 'negara' => 'belanda', 'tahun_berdiri' => '1932']);
        Merek::create(['merek_kendaraan' => 'TOYOTA', 'negara' => 'indonesia', 'tahun_berdiri' => '1997']);
        Merek::create(['merek_kendaraan' => 'DAIHATSU', 'negara' => 'india', 'tahun_berdiri' => '1988']);
        Merek::create(['merek_kendaraan' => 'NISSAN', 'negara' => 'malaysia', 'tahun_berdiri' => '1933']);
        Merek::create(['merek_kendaraan' => 'LEXUS', 'negara' => 'amerika', 'tahun_berdiri' => '1977']);
    }
}