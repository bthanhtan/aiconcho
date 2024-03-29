<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name',];
    public function products()
    {
    	return $this->hasMany('App\Product','product_category_id');
    }
}
