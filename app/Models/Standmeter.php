<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standmeter extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'daya',
        'foto_standmeter',
        'standmeter_awal',
        'standmeter_akhir',
        'pemakaian',
        'biaya_pemakaian',
        'bpju',
        'jumlah_tagihan',
    ];

    public function customer()
    {
        return $this->belongsTo(Tenant::class, 'id', 'tenant_id');
    }
}
