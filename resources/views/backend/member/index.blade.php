@extends('backend.layouts.master')
@section('title')
BAUET CSE AA- All Active Members -  - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>All Active Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BAUET CSE AA- All Active Members  - Index</li>
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
                <h3 class="card-title">BAUET CSE AA- All Active Members  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Batch</th>
                    <th>ID No.</th>
                    <th>Photo</th>
              
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






                    @foreach ($user as $key=>$item)




                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->batch_name->name }}</td>
                    <td>{{ $item->id_no }}</td>
                    <td> <img src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="" style="max-height:150px"></td>
                
                   <td>

                      <a href="{{route('member.show',[$item->id_no])}}" title="Show"><button class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></button></a> <br>

                      <a href="javascript:void(0);" 
                      onclick="confirmApproval('{{route('member.disapproved', [$item->id_no])}}')" 
                      title="deactivate">
                      <button class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-thumbs-down"></i>
                      </button>
                   </a> <br>







                    </td>

                  </tr>

                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Batch</th>
                    <th>ID No.</th>
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
<script>
            function confirmApproval(url) {
       Swal.fire({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, disapprove it!'
       }).then((result) => {
           if (result.isConfirmed) {
               window.location.href = url;
           }
       });
   }
    </script>
</script>
@endsection
