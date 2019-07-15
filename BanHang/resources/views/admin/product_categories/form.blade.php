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
                <h1 class="h4 text-gray-900 mb-4">Create an Category!</h1>
              </div>
              <form class="user" enctype="multipart/form-data" action="{{ isset($category->id) ? route('category.update',['id'=>$category->id]) :  route('category.store')}}" method="post">
                @if(isset($category->id))
                @method('put')
                @endif
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Name" name="name">
                </div>
                <button class="button" type="submit">{{isset($category->id) ? 'Update' : 'Create' }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

@section('js_page')
  <!-- Page level plugins -->
  <script src="{{ url('sb_admin/vendor/chart.js/Chart.min.js')  }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('sb_admin/js/demo/chart-area-demo.js')  }}"></script>
  <script src="{{ url('sb_admin/js/demo/chart-pie-demo.js')  }}"></script>

@stop
