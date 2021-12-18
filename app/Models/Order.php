<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable =
    [
        'user_id',
       'product_quantity',
        'shipping_address_en',
        'shipping_address_ar',
        'shipping_google_address',
        'shipping_status',
        'shipping_date',
        'payment_method',
        'order_status' ,
        'subtotal' ,
        'shipping_cost' ,
         'taxes' ,
         'final_total',
        'is_notified',

    ];
}