@extends('backend.layouts.master')
@section('title')
    Index - Alumni
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Index</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Index</li>
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
                      <h3 class="card-title text-center">Status : </h3> 
                      <p><b>
                      @if (Auth::user()->status == 'active')
                      &nbsp;  <span class="badge badge-success">Active</span>
                      @else
                      &nbsp; <span class="badge badge-danger">Inactive</span>
                      @endif  
                      </b></p>
                  </div>
                  <!-- /.card -->
      
       
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