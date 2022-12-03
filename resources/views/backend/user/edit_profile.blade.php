@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
            <h3 class="card-title">Edit Profile</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" id="edit_form" action="{{ route('profile.update') }}" enctype="multipart/form-data">
          	@csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $editData->name }}" id="name" placeholder="Enter Your Name">
                    <font style="color:red;">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $editData->email }}" id="email" placeholder="Enter Email Address">
                    <font style="color:red;">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="{{ $editData->mobile }}" id="mobile" placeholder="Enter Mobile Number">
                    <font style="color:red;">{{ ($errors->has('mobile'))?($errors->first('mobile')):'' }}</font>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $editData->address }}" id="address" placeholder="Enter Your Address">
                    <font style="color:red;">{{ ($errors->has('address'))?($errors->first('address')):'' }}</font>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                      <option value="" selected disabled="">-- Select --</option>
                      <option value="Male" {{ ($editData->gender == "Male") ? "selected" : "" }}>Male</option>
                      <option value="Female" {{ ($editData->gender == "Female") ? "selected" : "" }}>Female</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <img src="{{ (!empty($editData->image)) ? url('public/upload/user/'.$editData->image) : url('public/upload/no_image.png') }}" alt="photo" style="width: 150px; height: 100px; border: 2px solid #343A40;" id="showImage">
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">File input</label>
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

{{--         	<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"> --}}
        	<input type="submit" name="action" id="action" class="btn btn-warning mt-3" value="Update" />
        </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection