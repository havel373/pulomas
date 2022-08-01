<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    public $table = 'rekening';

    protected $fillable = [
        'nomor_rekening',
        'atas_nama',
    ];
}
