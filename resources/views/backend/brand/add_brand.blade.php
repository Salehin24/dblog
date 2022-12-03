@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Brand</h3>
          </div>
          <div class="card-body">
          	<form method="post" action="{{ route('category.store') }}">
          	@csrf
              <div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                      <option value="" selected disabled="">-- Select --</option>
                      @foreach($allCat as $category)
                      <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="subcategory_id">Subcategory</label>
                    <select class="form-control" name="subcategory_id" id="subcategory_id">
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
                  </div>
                </div>

              </div>
        	<input type="submit" class="btn btn-success mt-3" value="Add" />
        </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection