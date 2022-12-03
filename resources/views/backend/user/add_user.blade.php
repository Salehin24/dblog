@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
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
            <h3 class="card-title">Add User</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          	<form method="post" id="my_form">
          	@csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="usertype">User Type</label>
                    <select class="form-control" name="usertype" id="usertype">
                      <option value="" selected disabled="">-- Select --</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                    <font style="color:red;">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                    <font style="color:red;">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Enter Confirm Password">
                  </div>
                </div>
        	</div>
        	<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        	<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
        </form>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection