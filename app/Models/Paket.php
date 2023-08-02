<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    public function detailpaket(){
        return $this->hasMany(Detail_paket::class, 'paket_id');
    }
}
