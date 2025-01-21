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
      
                      <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
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
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                         <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Profile</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change Password</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore the hate as they create awesome
                              tools to help create filler text for everyone from bacon lovers
                              to Charlie Sheen fans.
                            </p>
      
                            <p>
                              <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                              <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                              <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                  <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                              </span>
                            </p>
      
                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                          </div>
                          <!-- /.post -->
      
                          <!-- Post -->
                          <div class="post clearfix">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                              <span class="username">
                                <a href="#">Sarah Ross</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              Lorem ipsum represents a long-held tradition for designers,
                              typographers and the like. Some people hate it and argue for
                              its demise, but others ignore the hate as they create awesome
                              tools to help create filler text for everyone from bacon lovers
                              to Charlie Sheen fans.
                            </p>
      
                            <form class="form-horizontal">
                              <div class="input-group input-group-sm mb-0">
                                <input class="form-control form-control-sm" placeholder="Response">
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-danger">Send</button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- /.post -->
      
                          <!-- Post -->
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                              <span class="username">
                                <a href="#">Adam Jones</a>
                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                              <div class="col-sm-6">
                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
      
                            <p>
                              <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                              <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                              <span class="float-right">
                                <a href="#" class="link-black text-sm">
                                  <i class="far fa-comments mr-1"></i> Comments (5)
                                </a>
                              </span>
                            </p>
      
                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
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