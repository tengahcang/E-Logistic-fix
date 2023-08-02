<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_peminjamans extends Model
{
    use HasFactory;
    public function peminjaman(){
        return $this->belongsTo(Peminjamans::class);
    }
    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
