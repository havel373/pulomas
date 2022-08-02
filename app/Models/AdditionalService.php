<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'pic',
        'satuan',
        'harga',
        'jangka',
        'jenis_pembayaran',
        'foto',
        'deskripsi',
    ];
    public function getImageAttribute(){
        return asset('storage/' . $this->foto);
    }
}
