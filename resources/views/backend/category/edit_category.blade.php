@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
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
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" action="{{ route('category.update', $editData->id) }}">
          	@csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $editData->category_name }}">
                  </div>
                </div>
              </div>
        	<input type="submit" class="btn btn-warning mt-3" value="Update" />
        </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection