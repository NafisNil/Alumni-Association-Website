@extends('backend.layouts.master')
@section('title')
    BAUET CSE AA - Subscription Email
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>BAUET CSE AA Subscription Email</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BAUET CSE AA Subscription Email</li>
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
                <h3 class="card-title">BAUET CSE AA Subscription Email</h3>

           
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Created  AT</th>
              
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






                    @foreach ($subscription as $key=>$item)

                  <tr>
                    <td>{{ ++$key }}</td>
                    <td> <a href="mailto:{{$item->email}}">{{ $item->email }}</a> </td>
                    <td>{{$item->created_at->format('H:m d M,Y')}}</td>
                   <td>


             

           
                      <form action="{{route('newsletter.destroy',[$item->id])}}"  id="delete-form-{{ $item->id }}" method="POST">
                    
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm delete-btn" title="Delete" data-id="{{ $item->id }}"><i class="fas fa-trash"></i></button>
                      </form>



                    </td>

                  </tr>

                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Created  AT</th>
              
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
