<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType');
    }

    public function features()
    {
        return $this->belongsToMany('App\Models\Feature');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
