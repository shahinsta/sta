<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customer';
    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}
