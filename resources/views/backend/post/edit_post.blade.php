@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
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
            <h3 class="card-title">Add Post</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" action="{{ route('post.update',$editData->id) }}" enctype="multipart/form-data">
          	@csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $editData->title }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description" value="{{ $editData->description }}"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                      <option value="" selected disabled="">-- Select --</option>
                      @foreach($allCat as $key => $category)
                      <option value="{{$category->id}}" {{ ($allCat[$key]->id == $category->category_id) ? "selected" : "" }}>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <img src="{{ (!empty($editData->image)) ? url('public/upload/post/'.$editData->image) : url('public/upload/no_image.png') }}" alt="photo" style="width: 150px; height: 100px; border: 2px solid #343A40;" id="showImage">
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Feature Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        	<input type="submit" class="btn btn-success mt-3" value="Update" />
        </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection