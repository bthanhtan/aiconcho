<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = ['customer_id','name','phone','delivery_address','order_at','delivery_at','total','status',];
   public function orderDetail(){
    return $this->hasMany('App\OrderDetail',"order_id");
   }
}
