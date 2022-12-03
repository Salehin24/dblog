@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Categoey</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categoey</li>
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
                <h3 class="card-title">Categoey List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="product" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center"><i class="fas fa-list"></i></th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key => $category)
                  <tr>
                    <td class="text-center">{{ $key+1 }}.</td>
                    <td class="text-center">{{ $category->category_id }}</td>
                    <td class="text-center">{{ $category->category_name }}</td>
                    <td class="text-center">
                      <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-xs mb-2"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                      <a href="{{ route('category.delete', $category->id) }}" class="btn btn-danger btn-xs mb-2" id="delete"><i class="fas fa-trash"></i>&nbsp;Delete</a>
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



    </section>
    <!-- /.content -->
  </div>


  </div>
  <!-- /.content-wrapper -->
@endsection