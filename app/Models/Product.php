<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'discount', 'image', 'product_type_id', 'company_id'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class, 'product_id');
    }
}
