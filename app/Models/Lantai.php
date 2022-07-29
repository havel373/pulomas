<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lantai extends Model
{
    use HasFactory;
    public $table = 'lantai';
    protected $fillable = ['id_gedung', 'nama_lantai', 'harga_sewa', 'service_charge', 'service_charge_listrik_sendiri'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung');
    }
}
