@extends('admin.master')

@section('title', 'List Product')

@section('content')
 <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">List Product</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Tool</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($product as $key => $product)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category->name}}</td>
                      <td><img src="{{$product->image}}" width="200"></td>
                      <td>
                          <a class="" href="{{ route('product.edit',['id'=>$product->id]) }}">Edit</a> <br>
                          <form action="{{ route('product.delete',['id'=>$product->id]) }}" method="post">
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
@stop



