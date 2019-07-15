@extends('master')

@section('title', 'form Product')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Product!</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
              <form class="user" enctype="multipart/form-data" action="{{ isset($product->id) ? route('product.update',['id'=>$product->id]) :  route('product.store')}}" method="post">
                @if(isset($product->id))
                @method('put')
                @endif
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Name" name="name" value="{{ old('name', $product->name ?? '') }}">
                </div>
				        <div class="form-group">
                  <select class="custom-select" id="inputGroupSelect01" name="product_category_id">
        				    <option >Choose...</option>
                    @foreach($categories as $category)
        				    <option value="{{$category->id}}" {{ old('product_category_id', $product->product_category_id ?? '') == $category->id ? "selected" : '' }} >{{$category->name}}</option>
                    @endforeach
        				  </select>
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="price" value="{{ old('price', $product->price ?? '') }}">
                </div>
                <img src="{{url($product->image ?? '')}}" width="200">
                <div class="form-group">
                  <input type="file" id="" placeholder="Image" name="image">
                </div>
                <div class="form-group">
                <textarea name="content" id="" cols="30" rows="10" class="form-control form-control-user">{{ old('content', $product->content ?? '') }}</textarea>
                </div>
                <button class="button" type="submit">{{isset($product->id) ? 'Update' : 'Create' }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop