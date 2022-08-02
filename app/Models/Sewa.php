<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    public $table = 'sewa';
    public function ruang(){
        return $this->belongsTo(Ruang::class, 'ruang_id', 'id');
    }

    public function marketing(){
        return $this->belongsTo(Marketing::class, 'marketing_id', 'id');
    }
    
    public function AdditionalService(){
        return $this->belongsTo(AdditionalService::class, 'marketing_id', 'id');
    }

    protected $fillable = [
        'booking',
        'kode_booking',
        'gedung_id',
        'lantai_id',
        'ruang_id',
        'jangka_waktu',
        'tanggal_awal_sewa',
        'tanggal_akhir_sewa',
        'jenis_service_charge',
        'ppn',
        'luas_ruangan',
        'marketing_id',
        'keterangan',
        'additional_service',
        'total_harga',
        'status',
    ];
}
