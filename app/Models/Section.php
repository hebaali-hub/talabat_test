<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = "sections";
    protected $fillable = [
        'name_en',
        'name_ar',
        'vendor_id',
        'section_id',
        'user_id',

    ];
}