@extends('admin.master')

@section('title', 'List Category')

@section('content')
 <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Category</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
<a href="{{route('category.create')}}" class="btn btn-success">Create</a>
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
            <th>Tool</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $key => $category)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$category->name}}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('category.edit',['id'=>$category->id]) }}">Edit</a> <br>
                <form action="{{ route('category.delete',['id'=>$category->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
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



