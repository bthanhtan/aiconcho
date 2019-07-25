<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity'];
    public function product(){
        return $this->belongto('App\Product',"order_id");
    }
    public function order(){
        return $this->belongto('App\Order',"order_id");
    }
}
