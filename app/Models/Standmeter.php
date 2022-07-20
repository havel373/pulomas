<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standmeter extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Tenant::class, 'id', 'tenant_id');
    }
}
