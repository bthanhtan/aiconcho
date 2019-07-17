<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::select()->get();
        return view('admin.product.list',['product'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::select()->get();
        return view('admin.product.form',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule= [
            "name" => "required",
            "price" => "required",
            "content" => "required",
            "image" => "required",
        ];
        $request->validate($rule);
        $product = $request->all();
        $product['image'] = $this->uploadImage($request->image);
        // dd($product);
        Product::create($product);
        return redirect()->route('product.index');
    }
    public function uploadImage($img){
        $name = md5(uniqid(rand(), true)).'_'.time().'.'.$img->getClientOriginalExtension(); 
        $destinationPath = public_path('uploads'); 
        $img->move($destinationPath, $name);
        $nameReturn = 'uploads/'.$name; 
        return $nameReturn;
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
        $categories = ProductCategory::select()->get();
        $product = Product::find($id);
        return view('admin.product.form',[ 'product' => $product,'categories'=>$categories]);
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
        $rule= [
            "name" => "required",
            "price" => "required",
            "content" => "required",
            "image" => "required",
        ];
        $request->validate($rule);
        $data_update = $request->all();
        $data_update['image'] = $this->uploadImage($request->image);
        $product = Product::find($id);
        $product->update($data_update);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Product::find($id);
        $link_image= $product['image'];
        if ($product->delete()) {
            unlink(public_path($link_image));
        }
        return redirect()->route('product.index');
    }
    public function find(Request $request)
    {
        $value = $request->value;
        $products = Product::where('name', 'LIKE', "%$value%")->get();
    }
}
