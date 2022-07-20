<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lantai extends Model
{
    use HasFactory;
    public $table = 'lantai';


    public function gedung(){
        return $this->belongsTo(Gedung::class, 'id','id_gedung');
    }
}
