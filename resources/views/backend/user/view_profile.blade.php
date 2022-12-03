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
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ (!empty($user->image)) ? url('public/upload/user/'.$user->image) : url('public/upload/no_image.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                <p class="text-muted text-center">{{ $user->address }}</p>

                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Mobile</td>
                      <td>{{ $user->mobile }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>{{ $user->gender }}</td>
                    </tr>
                  </tbody>
                </table>

                <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block mt-3"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <div class="col-md-4"></div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    </section>
    <!-- /.content -->
  </div>

  </div>
  <!-- /.content-wrapper -->
@endsection