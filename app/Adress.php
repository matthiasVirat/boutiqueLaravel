<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adress extends Model
{
    public $timestamps = false;

    protected $table = 'adress';

    public function order()
    {
        return $this->hasMany('App\Adress');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
