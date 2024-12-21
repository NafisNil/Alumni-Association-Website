@extends('backend.layouts.master')
@section('title')
BAUET CSE AA- Event -  - Index
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>BAUET CSE AA- Event Detail</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">BAUET CSE AA- Event Detail</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
      
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">BAUET CSE AA- Event Detail</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Date</span>
                            <span class="info-box-number text-center text-muted mb-0">{{ $event->date }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Time</span>
                            <span class="info-box-number text-center text-muted mb-0">{{ $event->time }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Location</span>
                            <span class="info-box-number text-center text-muted mb-0">{!! $event->location !!}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h4>{{ $event->title }}</h4>
                          <div class="post">
                            <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="{{(!empty($event->photo))?URL::to('storage/'.$event->photo):URL::to('image/no_image.png')}}" alt="user image">
                            
                         
                            </div>
                            <!-- /.user-block -->
                            <p>
                              {!! $event->description !!}
                            </p>
      
                            {!! $event->map!!}

                          </div>
      
            
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  
             
                    <br>
                    <div class="text-muted">
                      <p class="text-sm">Category
                        <b class="d-block">{{ $event->category }}</b>
                      </p>
                      <p class="text-sm">Application Fee
                        <b class="d-block">{{ @$event->application_fees }}</b>
                      </p>
                    </div>
      
              
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
          </section>
          <!-- /.content -->
      
@endsection