<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    use HasFactory;
    protected $fillable=[
        'd_name',
        'd_image',
        'd_age',
        'd_mobile',
        'd_disease',
        'd_address',
        'd_blood_group',
        'user_id',
        'status'
    ];
}
