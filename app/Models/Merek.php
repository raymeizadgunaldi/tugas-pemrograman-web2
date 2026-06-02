<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


#[Fillable(['merek_kendaraan' , 'negara' , 'tahun_berdiri'])]
class Merek extends Model
{
          public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}