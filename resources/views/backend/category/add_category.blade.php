@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
            <h3 class="card-title">Add Category</h3>
          </div>
          <div class="card-body">
          	<form method="post" action="{{ route('category.store') }}">
          	@csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
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