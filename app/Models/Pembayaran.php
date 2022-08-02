<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public $table="pembayaran";

    protected $fillable = [
        'tanggal_request',
        'nominal',
        'keterangan',
        'bukti_pembayaran',
        'status'
    ];

    
    public function getImageAttribute(){
        return asset('storage/' . $this->bukti_pembayaran);
    }
}
