<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
