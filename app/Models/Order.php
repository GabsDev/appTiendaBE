<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function deliveryMan()
    {
        return $this->belongsTo('App\Models\DeliveryMan');
    }

    public function invoice()
    {
        return $this->hasOne('App\Models\Invoice');
    }
}
