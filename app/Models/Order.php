<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table='orders';
    public function customer(){
        return $this->belongsto('App\Models\Customer');
    }
}
