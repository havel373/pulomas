<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    public $table = 'ruang';
    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung', 'id');
    }

    public function lantai()
    {
        return $this->belongsTo(Lantai::class, 'id_lantai', 'id');
    }

    public function getImageAttribute(){
        return asset('storage/' . $this->foto_ruang);
    }

    protected $fillable = ['id_gedung', 'id_lantai', 'kode_ruang', 'nama_ruang', 'status', 'luas', 'harga_bulan', 'harga_hari', 'overtime_dibawah_4jam', 'total_overtime_dibawah_4jam', 'overtime_diatas_4jam', 'total_overtime_diatas_4jam', 'fasilitas', 'service_charge', 'service_charge_sendiri', 'foto_ruang', 'deskripsi'];
}
