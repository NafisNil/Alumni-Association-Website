@extends('backend.layouts.master')
@section('title')
    Member Profile - Alumni
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Member Profile</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
      
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{(!empty($user->photo))?URL::to('storage/'.$user->photo):URL::to('image/no_image.png')}}"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">{{$user->name}}</h3>
      
                      <p class="text-muted text-center"></p>
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Email</b> <a class="float-right">{{@$user->email}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Phone</b> <a class="float-right">{{@$user->phone}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>ID No</b> <a class="float-right">{{@$user->id_no}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Batch</b> <a class="float-right">{{@$user->batch_name->name}}</a>
                        </li>
                      </ul>
      
                  
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                  <!-- About Me Box -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">About {{$user->name}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
      
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
      
                      <p class="text-muted">{!! @$user->address !!}</p>
      
                      <hr>

                      <strong><i class="fas fa-book mr-1"></i> Occupation</strong>
      
                      <p class="text-muted">
                        {{@$user->occupation}}
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-pencil-alt mr-1"></i> Company Name (Job)</strong>
      
                      <p class="text-muted">
                        {{@$user->company_name}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Name (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@$user->business_name}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Info (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@$user->business_info}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Type (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@$user->business_type}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Location(Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@$user->business_location}}
                      </p>
      
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      @include('backend.sessionMsg')
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Story</a></li>
                  
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                            <div class="user-block">
                         
                              <span class="username">
                                <a href="#">{{@$story->title}}</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">{{@$story->updated_at->format('H:i A- d M,Y')}}</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              {!! @$story->desc !!}
                            </p>
      
                          </div>
                          <!-- /.post -->

                        </div>

                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->

          <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



          <script>
              CKEDITOR.replace( 'address' );
          </script>
@endsection