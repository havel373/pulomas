<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknik extends Model
{
    use HasFactory;

    public $table = 'teknik';

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
        'status_pegawai',
        'nomor_hp',
        'status',
        'created_by'
    ];
}
