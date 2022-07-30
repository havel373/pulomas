<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    public $table = 'tarif';
    protected $fillable = ['jenis_tarif', 'daya', 'tarif', 'tarif_dasar', 'bpju', 'kwh_minimum'];
}
