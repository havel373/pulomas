<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    public function tenant(){
        return $this->belongsTo(Tenant::class,'id','tenant_id');
    }
}
