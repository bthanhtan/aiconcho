<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use Cart;

class User_ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select()->get();
        return view('user.shop',['products'=>$products]);
    }
    public function product_detail($id)
    {
        $product = Product::find($id);
        // dd($product);
        Cart::destroy();
        // $a = Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'weight' => 550, 'options' => ['image' => $product->image]]);
        return view('user.product_detail',['product'=>$product]);
    }
    public function shop_add_cart($id)
    {
        $product = Product::find($id);
        Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'weight' => 550, 'options' => ['image' => $product->image]]);
        $a = Cart::count();
        $b = Cart::content();
        return response($a);
        return response()->json($b);
    }

    public function shop_show_cart()
    {   
        $Carts = Cart::content();
        return view('user.cart',['Carts'=>$Carts]);
    }
    public function cart_count()
    {   
        $a = Cart::count();
        dd($a);
    }
    public function shop_delete_cart($id)
    {   
        Cart::remove($id);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
