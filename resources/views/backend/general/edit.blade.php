@extends('backend.layouts.master')
@section('title')
   BAUET CSE AA General  info - Edit
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>BAUET CSE AA General  Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BAUET CSE AA General  Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">BAUET CSE AA General Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('general.update',[$edit])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              @include('backend.general.form')
                      </form>
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



    <script>
    
        CKEDITOR.replace( 'address' );
    
    </script>
    
@endsection