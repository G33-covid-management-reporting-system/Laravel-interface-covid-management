<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthOfficersGeneral extends Model
{
    use HasFactory;
    protected $fillable = [
        'officer_name',
        'hospital_name',
        'Email',
        'hospital_id',

    ];
}
