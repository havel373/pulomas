<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(User::class, 'id', 'customer_id');
    }
}
