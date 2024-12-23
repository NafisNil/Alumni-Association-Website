
@include('backend.sessionMsg')
<div class="card-body">




  <div class="form-group">
    <label for="exampleInputEmail1">Address <span style="color:red" >*</span></label>

    <textarea name="address" id="" cols="30" rows="10" class="form-control" required>{!!old('address',@$edit->address)!!}</textarea>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>

    <input type="email"  class="form-control" name="email"  value="{!!old('email',@$edit->email)!!}" required>

  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Phone <span style="color:red" >*</span></label>

    <input type="text"  class="form-control" name="phone"  value="{!!old('phone',@$edit->phone)!!}" required placeholder="01XXXXXXXXX">

  </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>






