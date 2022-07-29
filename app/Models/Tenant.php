<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    protected $fillable = [
        'user_id',
        'nama_instansi',
        'nomor_hp_instansi',
        'nama_penanggungjawab',
        'nomor_hp_penanggungjawab',
        'industri',
        'status_tenant',
        'alamat_penanggungjawab',
    ];
}
