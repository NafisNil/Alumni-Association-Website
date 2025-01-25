@extends('frontend.layouts.master')
@section('title')
    Registration - BAUET CSE Alumni
@endsection
@section('content')
<div id="qodef-page-outer" style="margin-top: 1px">
    <div class="qodef-page-title qodef-m qodef-title--breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
       <div class="qodef-m-inner">
          <div class="qodef-m-content qodef-content-grid ">
             <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="{{route('index')}}"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Register</span></div>
          </div>
       </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid">
       <div id="youzify-membership" class="youzify-membership youzify-membership-page-box youzify-page">
          <div class="youzify-membership-form youzify-membership-login-page form-no-header form-with-labels form-no-icons form-full-border form-border-rounded">
             <header class="youzify-membership-form-header">
                <div class="form-title">
                   <h2>Welcome to BAUET CSE ALUMNI</h2>
                   @include('backend.sessionMsg')
                </div>
             </header>
             <form id="youzify-membership-form" class="youzify-membership-login-form" method="post" action="{{route('member_registration_store')}}" enctype="multipart/form-data">
               @csrf
                <!-- After Form Buttons -->
                {{-- <div class="youzify-membership-social-buttons form-full-button form-border-radius form-icons-left">
                   <ul>
                      <li class="youzify-membership-facebook-btn">
                         <a href="https://joinup.qodeinteractive.com/youzify-auth/social-login/Facebook">
                            <div class="youzify-membership-button-icon">
                               <i class="fab fa-facebook-f"></i>
                            </div>
                            <span class="youzify-membership-button-title">
                            Connect with Facebook							</span>
                         </a>
                      </li>
                   </ul>
                   <div class="youzify-membership-social-title"><span>or</span></div>
                </div> --}}
                <div class="youzify-membership-form-item">
                  <div class="youzify-membership-item-content">
                     <label for="user_login"> Photo</label>
                     <div class="youzify-membership-field-content">
                        <input type="file" name="photo" >
                     </div>
                  </div>
                    <div class="youzify-membership-item-content">
                        <label for="user_login"> Name</label>
                        <div class="youzify-membership-field-content">
                           <input type="name" name="name" autocomplete="false" placeholder="" value="{{old('name')}}" required>
                        </div>
                     </div>
                   <div class="youzify-membership-item-content">
                      <label for="user_login"> Email</label>
                      <div class="youzify-membership-field-content">
                         <input type="text" name="email" autocomplete="false" placeholder="" value="{{old('email')}}" required>
                      </div>
                   </div>
                   <div class="youzify-membership-item-content">
                    <label for="user_login"> Address</label>
                    <div class="youzify-membership-field-content">
                      <textarea name="address"  id="" cols="30" rows="10" value={{old('address')}}></textarea>
                    </div>
                 </div>
                 <div class="youzify-membership-item-content">
                    <label for="user_login"> Phone Number</label>
                    <div class="youzify-membership-field-content">
                       <input type="text" name="phone" autocomplete="false" placeholder="" value="{{old('phone')}}" required>
                    </div>
                 </div>
                 <div class="youzify-membership-item-content">
                    <label for="user_login"> Batch </label>
                    <div class="youzify-membership-field-content">
                       <select name="batch" id="" required>
                                @foreach ($batch as $item)
                                    <option value="{{$item->id}}">{{$item->name}} Batch</option>
                                @endforeach
                       </select>
                    </div>
                 </div>


                 <div class="youzify-membership-item-content">
                    <label for="user_login"> Id No</label>
                    <div class="youzify-membership-field-content">
                       <input type="text" name="id_no" autocomplete="false" placeholder="" value="{{old('id_no')}}" required>
                    </div>
                 </div>

                 <div class="youzify-membership-item-content">
                    <label for="user_login"> Profession </label>
                    <div class="youzify-membership-field-content">
                       <select name="occupation" id="profession" required>
                        <option>Select Profession</option>
                            <option value="Job">Job</option>
                            <option value="Startup">Startup/Business</option>
                       </select>
                    </div>
                 </div>

                 <div class="youzify-membership-item-content" id="job-fields" style="display: none;">
                  <label for="user_login"> Job Company</label>
                  <div class="youzify-membership-field-content">
                     <input type="text" name="company_name" autocomplete="false" placeholder="" value="{{old('company_name')}}" >
                  </div>
               </div>

               <div id="business-fields" style="display: none;">
                  <div class="youzify-membership-item-content">
                     <label for="user_login"> Business name</label>
                     <div class="youzify-membership-field-content">
                        <input type="text" name="business_name" autocomplete="false" placeholder="" value="{{old('business_name')}}" >
                     </div>
                  </div>

                  <div class="youzify-membership-item-content">
                     <label for="user_login"> Business info</label>
                     <div class="youzify-membership-field-content">
                        <input type="text" name="business_info" autocomplete="false" placeholder="" value="{{old('business_info')}}" >
                     </div>
                  </div>

                  <div class="youzify-membership-item-content">
                     <label for="user_login"> Business type</label>
                     <div class="youzify-membership-field-content">
                        <input type="text" name="business_type" autocomplete="false" placeholder="" value="{{old('business_type')}}" >
                     </div>
                  </div>

                  <div class="youzify-membership-item-content">
                     <label for="user_login"> Business location</label>
                     <div class="youzify-membership-field-content">
                        <input type="text" name="business_location" autocomplete="false" placeholder="" value="{{old('business_location')}}" >
                     </div>
                  </div>
               </div>

                </div>
                <div class="youzify-membership-form-item">
                   <div class="youzify-membership-item-content">
                      <label for="user_pass">Password</label>
                      <div class="youzify-membership-field-content">
                         <input type="password" name="password" autocomplete="false" placeholder="" value="" required>
                      </div>
                   </div>
                </div>

                <div class="youzify-membership-form-item">
                    <div class="youzify-membership-item-content">
                       <label for="user_pass">Confirm Password</label>
                       <div class="youzify-membership-field-content">
                          <input type="password" name="password_confirmation" autocomplete="false" placeholder="" value="" required>
                       </div>
                    </div>
                 </div>
                <div class="youzify-membership-form-item youzify-membership-remember-me">
     
                   {{-- <a class="youzify-membership-forgot-password" href="https://joinup.qodeinteractive.com/lost-password/">Lost password?</a>		         --}}
                </div>
                <div class="youzify-membership-form-actions form-fullwidth-button form-border-radius">
                   <div class="youzify-membership-action-item youzify-membership-submit-item">
                      <div class="youzify-membership-item-inner">
                         <button type="submit" value="submit"  name="signin_submit"  >
                         <span class="youzify-membership-button-title">Register</span>
                         </button>
                      </div>
                   </div>
                </div>
                <!-- After Form Buttons -->

             </form>
          </div>
       </div>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
 </div>

 <script>
   document.addEventListener('DOMContentLoaded', function () {
    const professionDropdown = document.getElementById('profession');
    const jobFields = document.getElementById('job-fields');
    const businessFields = document.getElementById('business-fields');

    professionDropdown.addEventListener('change', function () {
        const selectedValue = this.value;

        // Hide all conditional fields initially
        jobFields.style.display = 'none';
        businessFields.style.display = 'none';

        // Show fields based on selected value
        if (selectedValue === 'Job') {
            jobFields.style.display = 'block';
        } else if (selectedValue === 'Startup') {
            businessFields.style.display = 'block';
        }
    });
});

 </script>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



<script>

    CKEDITOR.replace( 'address' );

</script>

@endsection