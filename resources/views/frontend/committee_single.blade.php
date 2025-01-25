@extends('frontend.layouts.master')
@section('title')
    {{$committee_single->name}} - BAUET Alumni Association CSE
@endsection

@section('content')
          
<div id="qodef-page-outer">
    <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--center qodef-vertical-alignment--header-bottom qodef--has-image">
      <div class="qodef-m-inner">
        <div class="qodef-title-breadcrumbs-holder">
          <div class="qodef-content-grid">
            <div itemprop="breadcrumb" class="qodef-breadcrumbs">
              <a itemprop="url" class="qodef-breadcrumbs-link" href="{{route('index')}}">
                <span itemprop="title">Home</span>
              </a>
              <span class="qodef-breadcrumbs-separator"></span>
              <span itemprop="title" class="qodef-breadcrumbs-current">{{$committee_single->name}}</span>
            </div>
          </div>
        </div>
        <div class="qodef-m-content qodef-content-grid " style="background-image: url({{asset('image/Gemini_Generated_2.jpg')}})" >
          <h2 class="qodef-m-title entry-title"> {{$committee_single->name}}</h2>
        
        </div>
      </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-full-width">
      <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
        <div class="qodef-grid-inner clear">
          <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
            <div data-elementor-type="wp-page" data-elementor-id="923" class="elementor elementor-923">
              <div class="elementor-inner">
                <main class="youzify-page-main-content">
                    <div id="template-notices" role="alert" aria-atomic="true">
                    </div>
                    <main class="youzify-page-main-content">
                        <div id="template-notices" role="alert" aria-atomic="true">
                        </div>
                        <div class="youzify-right-sidebar-layout" style="display: block; margin-top: 25px;">
                           <div class="youzify-main-column grid-column">
                              <div class="youzify-widget youzify-custom_infos youzify-white-bg youzify-wg-title-icon-bg" >
                                 <div class="youzify-widget-main-content">
                                    <div class="youzify-widget-head">
                                       <h2 class="youzify-widget-title">
                                          Personal Info					
                                       </h2>
                                    </div>
                                    <div class="youzify-widget-content">
                                       <div class="youzify-infos-content">
                                          <div  class="youzify-info-item field_1 field_name required-field visibility-public field_type_textbox">
                                             <div class="youzify-info-label">Name</div>
                                             <div class="youzify-info-data">
                                                <p>{{$committee_single->name}}</p>
                                             </div>
                                          </div>
                                          <div  class="youzify-info-item field_2 field_birthday optional-field visibility-public alt field_type_datebox">
                                             <div class="youzify-info-label">Batch</div>
                                             <div class="youzify-info-data">
                                                <p>{{$committee_single->batch}}</p>
                                             </div>
                                          </div>
                                          <div  class="youzify-info-item field_3 field_gender optional-field visibility-public field_type_selectbox">
                                             <div class="youzify-info-label">Designation</div>
                                             <div class="youzify-info-data">
                                                <p>{{$committee_single->designation}}</p>
                                             </div>
                                          </div>
                                          <div  class="youzify-info-item field_6 field_location optional-field visibility-public alt field_type_textbox">
                                             <div class="youzify-info-label">Phone</div>
                                             <div class="youzify-info-data">
                                                <p><a href="tel:+{{$committee_single->phone}}">{{$committee_single->phone}}</a></p>
                                             </div>
                                          </div>
                                          <div  class="youzify-info-item field_7 field_website optional-field visibility-public field_type_url">
                                             <div class="youzify-info-label">Photo</div>
                                             <div class="youzify-info-data">
                                                <br>
                                                <img src="{{(!empty($committee_single->photo))?URL::to('storage/'.$committee_single->photo):URL::to('image/no_image.png')}}" alt="{{$committee_single->name}}" class="attachment-full size-full wp-post-image" loading="eager" style="max-height: 300px;max-width:300px;border-radius:5px;box-shadow: 10px 10px 5px rgb(173, 230, 181);" />
                                             </div>
                                          </div>
                                
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           
                           </div>
                
                        </div>
                     </main>
                 </main>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
  </div>
@endsection