<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_paket extends Model
{
    use HasFactory;
    public function barang(){
        return $this->belongsTo(Barang::class);
    }
    public function paket(){
        return $this->belongsTo(Paket::class);
    }
}
