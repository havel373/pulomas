<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayaTenant extends Model
{
    use HasFactory;
    protected $table = 'kelola_daya_tenant';

    protected $fillable = [
        'tenant_id',
        'tarif_id',
        'daya_terpasang',
    ];
}
