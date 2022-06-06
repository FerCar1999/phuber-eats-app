<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryUser extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone', 'dui', 'nit', 'birthday', 'license_number', 'plate_number', 'vehicle_model', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'delivery_user_id');
    }
}
