<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'total_amount',
        'discount_amount',
        'gross_amount',
        'shipping_amount',
        'net_amount',
        'status',
        'payment_status',
        'payment_type',
        'payment_transaction_id',
        'coupon_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shippingAddress()
    {
        return $this->hasOne(OrderShippingAddress::class);
    }
}
