<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function vehicleType()
    {
        return $this->hasOne('App\Models\vehicleType');
    }

    public function deliveryMen()
    {
        return $this->hasMany('App\Models\DeliveryMan');
    }
}
