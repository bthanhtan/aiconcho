@extends('admin.master')

@section('title', 'shop')


@section('content')
@dd($orderDetail)
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Order detail</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Cus_id</th> <!-- thay = tên acc -->
            <th>Name</th>
            <th>phone</th>
            <th>delivery_address</th>
            <th>order_at</th>
            <th>delivery_at</th>  
            <th>total</th>
            <th>status</th>
            <th>Tool</th>
        </tr>
        </thead>
    </table>
    </div>
</div>
</div>
@stop