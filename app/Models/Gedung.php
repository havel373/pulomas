<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    public $table = "gedung";

    public function aset()
    {
        return $this->belongsTo(Aset::class, 'id_aset');
    }

    public function lantai()
    {
        return $this->hasMany(Lantai::class, 'id_gedung');
    }
    protected $fillable = ['id_aset', 'nama_gedung','kode_aset','alamat_gedung'];
}
