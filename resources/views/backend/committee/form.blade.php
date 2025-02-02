
@include('backend.sessionMsg')
<div class="card-body">


    <div class="form-group row">
        <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6">

        <img id="showImage" src="{{(!empty($edit->photo))?URL::to('storage/'.$edit->photo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
      </div>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Logo <span style="color:red" >*</span></label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input"  id="image" value="{{ @$edit->photo }}">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>

        </div>
      </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Name <span style="color:red" >*</span></label>

    <input type="text"  class="form-control" name="name"  value="{!!old('name',@$edit->name)!!}" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Batch <span style="color:red" >*</span></label>

    <select class="form-control" name="batch" id="dropdown">
      
      <option>Select Batch</option>
        
     @foreach ($batch as $item)
      <option value="{{$item->name}}" {{ ( $item->name == @$edit->batch) ? 'selected' : '' }}> 
        {{$item->name}} Batch
      </option>
     @endforeach

     
    </select>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Designation <span style="color:red" >*</span></label>

    <input type="text"  class="form-control" name="designation"  value="{!!old('designation',@$edit->designation)!!}" required>

  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Phone <span style="color:red" >*</span></label>

    <input type="text"  class="form-control" name="phone"  value="{!!old('phone',@$edit->phone)!!}" required>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Serial No. <span style="color:red" >*</span></label>

    {{-- <input type="text"  class="form-control" name="dept"  value="{!!old('dept',@$edit->dept)!!}" required> --}}
    <input type="number"  class="form-control" name="serial"  value="{!!old('serial',@$edit->serial)!!}" placeholder="1-{{$committeeCount}}" min="1" max="{{$committeeCount}}" required> 

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Department <span style="color:red" >*</span></label>

    {{-- <input type="text"  class="form-control" name="dept"  value="{!!old('dept',@$edit->dept)!!}" required> --}}
    <input type="text"  class="form-control" name="dept"  value="Computer Science and Engineering(CSE)" readonly> 

  </div>


</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>






