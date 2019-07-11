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
              </div>
              <form class="user" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Name" name="name">
                </div>
				<div class="form-group">
                  <select class="custom-select" id="inputGroupSelect01">
				    <option selected>Choose...</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control form-control-user" id="" placeholder="Price" name="price">
                </div>

                <div class="form-group">
                  <input type="file" id="" placeholder="Image" name="image">
                </div>
                <div class="form-group">
					<textarea rows = "5" cols = "50" class="form-control form-control-user" id="" name = "content">
						Content
					</textarea>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Create
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop