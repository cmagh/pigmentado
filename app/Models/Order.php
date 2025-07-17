<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'status', 'total_amount', 'payment_method', 'delivery_type', 'delivery_fee', 'pickup_location_id', 'shipping_address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function pickupLocation()
    {
        return $this->belongsTo(PickupLocation::class);
    }
}
