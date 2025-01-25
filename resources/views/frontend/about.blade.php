@extends('frontend.layouts.master')
@section('title')
    About Us - BAUET Alumni Association CSE
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
              <span itemprop="title" class="qodef-breadcrumbs-current">About Us</span>
            </div>
          </div>
        </div>
        <div class="qodef-m-content qodef-content-grid " style="background-image: url({{asset('image/Gemini_Generated_2.jpg')}})" >
          <h2 class="qodef-m-title entry-title"> About Us </h2>
        
        </div>
      </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-full-width">
      <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
        <div class="qodef-grid-inner clear">
          <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
            <div data-elementor-type="wp-page" data-elementor-id="923" class="elementor elementor-923">
              <div class="elementor-inner">
                <div class="elementor-section-wrap">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-75e35e4 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="75e35e4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4bb1ff1" data-id="4bb1ff1" data-element_type="column">
                          <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                              <div class="elementor-element elementor-element-fa3c3f9 elementor-widget elementor-widget-joinup_core_section_title" data-id="fa3c3f9" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                <div class="elementor-widget-container">
                                  <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                    <h4 class="qodef-m-title"> About BAUET ALUMNI CSE </h4>
                                    <p class="qodef-m-text" style="margin-top: 27px">{!!   $about->desc !!}</p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f42401" data-id="5f42401" data-element_type="column">
                          <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                              <div class="elementor-element elementor-element-98db557 elementor-widget elementor-widget-text-editor" data-id="98db557" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                  <div class="elementor-text-editor elementor-clearfix">
                                    <h4 class="qodef-m-title"> Our Mission</h4>
                                    <p>
                                      <span style="color: #777b81;">{!!  @$about->mission !!}</span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="elementor-element elementor-element-792e7a5 elementor-widget elementor-widget-text-editor" data-id="792e7a5" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                  <div class="elementor-text-editor elementor-clearfix">
                                    <h4 class="qodef-m-title"> Our Vision</h4>
                                    <p>
                                      <span style="color: #777b81;">{!! @$about->vision !!}</span>
                                    </p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
  </div>
@endsection