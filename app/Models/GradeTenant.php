<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeTenant extends Model
{
    use HasFactory;

    public $table = 'grade_tenants';

    protected $fillable = [
        'kode',
        'nilai',
    ];
}
