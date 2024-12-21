@extends('backend.layouts.master')
@section('title')
BAUET CSE AA- Committee -  - Details
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Committee Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Committee Member</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{(!empty($committee->photo))?URL::to('storage/'.$committee->photo):URL::to('image/no_image.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $committee->name }}</h3>

                <p class="text-muted text-center">{{ $committee->designation }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Batch</b> <a class="float-right">{{ $committee->batch }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Department</b> <a class="float-right">{{ $committee->dept }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">{{ $committee->phone }}</a>
                  </li>
                </ul>

              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      
@endsection