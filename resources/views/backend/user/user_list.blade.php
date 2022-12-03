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
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
{{--                 <a href="{{ route('user.add') }}" class="btn btn-success btn-xs mb-2"><i class="fas fa-plus"></i>
                  Add
                </a> --}}
                <button type="button" id="add_button" class="btn btn-success btn-xs mb-2" data-toggle="modal" data-target="#user_modal"><i class="fas fa-plus"></i>
                  Add
                </button>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center"><i class="fas fa-list"></i></th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key => $user)
                  <tr>
                    <td class="text-center">{{ $key+1 }}.</td>
                    <td class="text-center">{{ $user->usertype }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">
                      <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-xs mb-2"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                      <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-xs mb-2" id="delete"><i class="fas fa-trash"></i>&nbsp;Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

      <div class="modal fade" id="user_modal" style="display: none;" aria-hidden="true">
        <form method="post" id="my_form">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Blood Bank</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="usertype">User Type</label>
                    <select class="form-control" name="usertype" id="usertype">
                      <option value="" selected disabled="">-- Select --</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
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

            <div class="modal-footer justify-content-between">
              <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </form>
      </div>

    </section>
    <!-- /.content -->
  </div>


  </div>
  <!-- /.content-wrapper -->
@endsection