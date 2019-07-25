<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'product_category_id', 'price', 'image', 'content'];

    public function category()
    {
        return $this->belongsto('App\ProductCategory',"product_category_id");
    }
    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail',"product_id");
    }
}
