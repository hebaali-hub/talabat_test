<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table='vendors';
    protected $fillable =
    [
        'name_en',
        'name_ar',
        'address_en',
        'address_ar',
        'email',
        'phone',
        'user_id',
        'is_blocked',
        'type_id',

    ];
}