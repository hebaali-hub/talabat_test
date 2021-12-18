<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable =
    [
        'name_en',
        'name_ar',
        'price',
        'fill_attribute_en',
        'fill_attribute_ar',
        'category_id',
        'vendor_id',
        'user_id',
        'stock_quantity',
        'section_id',
        'discount',
        'price_after_discount',
        'is_available',
    ];
}
