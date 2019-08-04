@extends('admin.master')

@section('title', 'List Order')

@section('content')
 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">List Order</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <button onclick="pending_ajax()" class="btn btn-warning">pending</button>
              <a href="" class="btn btn-success">success</a>
              <a href="" class="btn btn-danger">cance</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <tbody>
                    @foreach($orders as $key => $order)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$order->name}}</td>
                      <td>{{$order->phone}}</td>
                      <td>{{$order->delivery_address}}</td>
                      <td>{{$order->order_at}}</td>
                      <td>{{$order->delivery_at}}</td>
                      <td>{{$order->total}}</td>
                      <td>
                        <?php 
                          if($order->status == '1')
                          echo('pending');
                          elseif ($order->status == '2')
                          echo('success');
                          elseif ($order->status == '3')
                          echo('cancel');
                        ?>
                      </td>
                      
                      <td>
                          <a class="" href="{{ route('order.edit',['id'=>$order->id]) }}">Edit</a> <br>
                          <form action="{{ route('order.delete',['id'=>$order->id]) }}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->
@stop

@section('js_page')
  <!-- Page level plugins -->
  <script src="{{ url('sb_admin/vendor/datatables/jquery.dataTables.min.js')  }}"></script>
  <script src="{{ url('sb_admin/vendor/datatables/dataTables.bootstrap4.min.js')  }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('sb_admin/js/demo/datatables-demo.js')  }}"></script>
  <script type="text/javascript" src="{{ url('user/js/cart_shop_ajax.js') }}"></script>
@stop



