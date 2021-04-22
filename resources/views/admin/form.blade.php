@extends('layouts.admin_layout.admin_layout')
@section('content')

 <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Appointment</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Service</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($querys as $query) 
                      <tr>
                        <th scope="row">{{ $query->id }}</th>
                        <td>{{ $query->name }}</td>
                        <td>{{ $query->phone }}</td>
                        <td>{{ $query->service }}</td>
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


@endsection  