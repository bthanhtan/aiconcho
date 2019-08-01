@extends('user.user_master',[ 'name_page' => 'about'])

@section('title', 'shop')


@section('content')
<div class="colorlib-shop">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center active">
                        <p><span>02</span></p>
                        <h3>Checkout</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Order Complete</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form method="post" class="colorlib-form" action="{{route('user.cart_db')}}" enctype="multipart/form-data">
                @csrf
                    <h2>Billing Details</h2>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="fname">name</label>
                                <input type="text" id="fname" class="form-control" placeholder="id" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="fname">phone</label>
                                <input type="text" id="lname" class="form-control" placeholder="địa chỉ giao hàng" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label for="fname">delivery_address</label>
                                <input type="text" id="lname" class="form-control" placeholder="địa chỉ giao hàng" name="delivery_address">
                                <!-- <input type="date" name="delivery_address"> -->
                            </div>
                            <br>
                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-primary">Đặt hàng</button>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop