<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    public $table="gedung";

    public function aset(){
        return $this->belongsTo(Aset::class, 'id','id_aset');
    }
}
