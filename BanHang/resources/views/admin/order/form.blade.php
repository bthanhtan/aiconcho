@extends('admin.master')

@section('title', 'form Product')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">update an order!</h1>
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
              <form class="user" enctype="multipart/form-data" action="{{ route('order.update',['id'=>$order->id]) }}" method="post">
                @if(isset($order->id))
                @method('put')
                @endif
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Name" name="customer_id" value="{{ old('customer_id', $order->customer_id ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="name" value="{{ old('name', $order->name ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="phone" value="{{ old('phone', $order->phone ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="delivery_address" value="{{ old('delivery_address', $order->delivery_address ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="order_at" value="{{ old('order_at', $order->order_at ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="delivery_at" value="{{ old('delivery_at', $order->delivery_at ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="total" value="{{ old('total', $order->total ?? '') }}">
                </div>
				        <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="status" value="{{ old('status', $order->status ?? '') }}">
                </div>
                <button class="button" type="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop