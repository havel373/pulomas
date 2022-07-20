<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    public $table = 'ruang';
    public function gedung(){
        return $this->belongsTo(Gedung::class, 'id','id_gedung');
    }

    public function lantai(){
        return $this->belongsTo(Lantai::class, 'id','id_lantai');
    }
}
