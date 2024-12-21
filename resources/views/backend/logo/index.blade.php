@extends('backend.layouts.master')
@section('title')
BAUETCSE Alumni - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>BAUETCSE Alumni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BAUETCSE Alumni</li>
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
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">BAUETCSE Alumni</h3>

                @if ($logoCount < 1)
                <a href="{{route('logo.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                @endif

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
     
                    <th>Photo</th>
              
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






              



                    @if ($logoCount > 0)
                    <tr>
                      <td>#1</td>
                
                      <td> <img src="{{(!empty($logo->photo))?URL::to('storage/'.$logo->photo):URL::to('image/no_image.png')}}" alt="" style="max-height:150px"></td>
                  
                     <td>
  
  
                        <a href="{{route('logo.edit',[$logo->id])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>

                        <form action="{{route('logo.destroy',[$logo->id])}}" method="POST" id="delete-form-{{ $logo->id }}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-outline-danger btn-sm delete-btn" title="Delete" data-id="{{ $logo->id }}"><i class="fas fa-trash"></i></button>
                      </form>

                      </td>
  
                    </tr>
                    @endif

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
          
                    <th>Photo</th>
                
                    <th>Action</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>

    $(document).ready(function() {
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            var formId = $(this).data('id');
            var form = $('#delete-form-' + formId);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',   

                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();   

                }
            });
        });
    });
</script>

@endsection
