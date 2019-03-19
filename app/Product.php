<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $table='products';     //designe la table qu'il utilise

    public function category(){
        return $this->belongsTo('App\Prd_category', 'prd_category_id' , 'id');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order')->withPivot('quantity');
    }

}