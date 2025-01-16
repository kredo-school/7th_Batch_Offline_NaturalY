<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status', 'total_price', 'shipping_name', 'shipping_zipcode', 
        'shipping_prefecture', 'shipping_address', 'shipping_phone'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}