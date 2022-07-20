<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    public $table = 'sewa';
    public function ruang(){
        return $this->belongsTo(Ruang::class, 'id', 'ruang_id');
    }

    public function market(){
        return $this->belongsTo(Marketing::class, 'id', 'user_id');
    }
}
