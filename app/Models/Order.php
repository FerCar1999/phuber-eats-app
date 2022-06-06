<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['client_user_id', 'delivery_user_id', 'date', 'payment_method'];

    public function client()
    {
        return $this->belongsTo(ClientUser::class, 'client_user_id');
    }

    public function delivery()
    {
        return $this->belongsTo(DeliveryUser::class, 'delivery_user_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function trackings()
    {
        return $this->hasMany(OrderTracking::class, 'order_id');
    }
}
