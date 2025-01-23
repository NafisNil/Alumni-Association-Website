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
                             src="{{(!empty(Auth::user()->photo))?URL::to('storage/'.Auth::user()->photo):URL::to('image/no_image.png')}}"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">{{@Auth::user()->name}}</h3>
      
                      <p class="text-muted text-center"></p>
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Email</b> <a class="float-right">{{@Auth::user()->email}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Phone</b> <a class="float-right">{{@Auth::user()->phone}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>ID No</b> <a class="float-right">{{@Auth::user()->id_no}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Batch</b> <a class="float-right">{{@Auth::user()->batch_name->name}}</a>
                        </li>
                      </ul>
      
                  
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                  <!-- About Me Box -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
      
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
      
                      <p class="text-muted">{!! @Auth::user()->address !!}</p>
      
                      <hr>

                      <strong><i class="fas fa-book mr-1"></i> Occupation</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->occupation}}
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-pencil-alt mr-1"></i> Company Name (Job)</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->company_name}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Name (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->business_name}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Info (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->business_info}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Type (Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->business_type}}
                      </p>
      
                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Business Location(Startup/Business)</strong>
      
                      <p class="text-muted">
                        {{@Auth::user()->business_location}}
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
                         <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Profile</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change Password</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                            @if ($storyCount > 0)
                            <div class="user-block">
                            
                              <span class="username">
                                <a href="#">{{@$story->title}}</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">{{@$story->updated_at->format('H:i A- d M,Y')}}</span>
                            </div>
                            @endif
                         
                            <!-- /.user-block -->
                            <p>
                              {!! @$story->desc !!}
                            </p>

                          </div>
                          <!-- /.post -->

                        </div>
                        <!-- /.tab-pane -->
                         <div class="tab-pane" id="timeline">
                          <!-- The timeline -->
                          <form class="form-horizontal" action="{{route('member.profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Photo</label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputName" placeholder="Photo" name="photo" value="{{old('photo',@Auth::user()->photo)}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{old('name',@Auth::user()->name)}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Email" name="email" value="{{old('email',@Auth::user()->email)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Email" name="phone" value="{{old('phone',@Auth::user()->phone)}}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <textarea name="address" id="" cols="30" rows="10" class="form-control">{!! old('address',@Auth::user()->address) !!}</textarea>
                              </div>
                            </div>

      

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Id No</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Id NO" name="id_no" value="{{old('id_no',@Auth::user()->id_no)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Batch</label>
                              <div class="col-sm-10">
                                    <select name="batch" id=""  class="form-control" >
                                      @foreach ($batches as $item)
                                          <option value="{{$item->id}}" {{(@Auth::user()->batch==$item->id)?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                                             </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Occupation</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Occupation" name="occupation" value="{{old('occupation',@Auth::user()->occupation)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Company Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Company Name" name="occupation" value="{{old('occupation',@Auth::user()->occupation)}}">
                              </div>
                            </div>


                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Occupation</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Occupation" name="occupation" value="{{old('occupation',@Auth::user()->occupation)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Company Name (Job)</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Company Name" name="company_name" value="{{old('company_name',@Auth::user()->company_name)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Business Name (Startup/Business)</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Business Name" name="business_name" value="{{old('business_name',@Auth::user()->business_name)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Business Info (Startup/Business)</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Business Info" name="business_info" value="{{old('business_info',@Auth::user()->business_info)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Business Type (Startup/Business)</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Business Type" name="business_type" value="{{old('business_type',@Auth::user()->business_type)}}">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Business Location (Startup/Business)</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Business Location" name="business_location" value="{{old('business_location',@Auth::user()->business_location)}}">
                              </div>
                            </div>
                    
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div> 
                        <!-- /.tab-pane -->
      
                        <div class="tab-pane" id="settings">
                          <form class="form-horizontal" action="{{route('member.password.update')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputName" name="password" placeholder="New Password">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Confirm password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputEmail" placeholder="Retype Password" name="password_confirmation">
                              </div>
                            </div>
                    
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.tab-pane -->
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