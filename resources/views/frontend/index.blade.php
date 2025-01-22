@extends('frontend.layouts.master')
@section('title')
    Index - BAUET Alumni Association CSE
@endsection
@section('content')
<div id="qodef-page-outer">
   <div id="qodef-page-inner" class="qodef-content-full-width">
     <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
       <div class="qodef-grid-inner clear">
         <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
           <div data-elementor-type="wp-page" data-elementor-id="134" class="elementor elementor-134">
             <div class="elementor-inner">
               <div class="elementor-section-wrap">
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-5c3d130 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="5c3d130" data-element_type="section">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b1977a0" data-id="b1977a0" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-b539bd5 elementor-widget elementor-widget-slider_revolution" data-id="b539bd5" data-element_type="widget" data-widget_type="slider_revolution.default">
                               <div class="elementor-widget-container">
                                 <div class="wp-block-themepunch-revslider" style="margin-top: 5px;">
                            
                                   <!-- START MainHometop REVOLUTION SLIDER 6.6.5 -->
                                   <p class="rs-p-wp-fix"></p>
                              <br>
                
                              <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($slider as $item)
                                        <div class="swiper-slide">
                                            <div class="slide-content">
                                                <img src="{{ !empty($item->photo) ? URL::to('storage/' . $item->photo) : URL::to('image/no_image.png') }}" alt="{{ $item->title }}" class="slide-image">
                                                <div class="text-overlay">
                                                    <h2>{{ $item->title }}</h2>
                                                    <p>{!! $item->subtitle !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Navigation -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            
                            <style>
                                .swiper-slide {
                                    position: relative;
                                    height: 80vh; /* Adjust height as needed */
                                    margin-top: 50px;
                                }

                            
                                .slide-image {
                                    width: 100%;
                                    height: 100%;
                                    object-fit:contain;/* Ensures the image covers the slide */
                                }
                            
                                .text-overlay {
                                    position: absolute;
                                    top: 50%; /* Centers vertically */
                                    left: 50%; /* Centers horizontally */
                                    transform: translate(-50%, -50%); /* Adjusts for exact centering */
                                    color: white;
                                    text-align: center;
                                    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background for readability */
                                    padding: 20px;
                                    border-radius: 10px; /* Optional: Rounded corners */
                                    width: 80%; /* Adjust width as needed */
                                }
                            
                                .text-overlay h2 {
                                    font-size: 2rem;
                                    margin-bottom: 10px;
                                    color: white;
                                }
                            
                                .text-overlay p {
                                    font-size: 1rem;
                                    margin: 0;
                                }

                                @media (max-width: 600px) {
                                .swiper-slide{
                                    position: relative;
                                    height: 50vh; /* Adjust height as needed */
                                    margin-top: 5px;
                                }

                                .slide-image {
                                  margin-top: 50px;
                                    width: 100%;
                                    height: 100%;
                                    object-fit:contain;/* Ensures the image covers the slide */
                                }
                                .text-overlay {
                                    position: absolute;
                                    top: 30%; /* Centers vertically */
                                    left: 50%; /* Centers horizontally */
                                    transform: translate(-50%, -50%); /* Adjusts for exact centering */
                                    color: white;
                                    text-align: center;
                                    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background for readability */
                                    padding: 20px;
                                    border-radius: 10px; /* Optional: Rounded corners */
                                    width: 80%; /* Adjust width as needed */
                                 
                                }

                                .text-overlay h2 {
                                    font-size: 1rem;
                                    margin-bottom: 10px;
                                    color: white;
                                }
                            
                                .text-overlay p {
                                    font-size: .5rem;
                                    margin: 0;
                                }
                              }
                            </style>
                            
                            <script>
                                const swiper = new Swiper('.swiper-container', {
                                    loop: true,
                                    autoplay: {
                                        delay: 3000,
                                    },
                                    pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                    },
                                    navigation: {
                                        nextEl: '.swiper-button-next',
                                        prevEl: '.swiper-button-prev',
                                    },
                                });
                            </script>
                            
                                
                                   <!-- END REVOLUTION SLIDER -->
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-eae698b elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="eae698b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0875693" data-id="0875693" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-a550db3 elementor-widget elementor-widget-slider_revolution" data-id="a550db3" data-element_type="widget" data-widget_type="slider_revolution.default">
                               <div class="elementor-widget-container">
                                 <div class="wp-block-themepunch-revslider">
                                   <!-- START MainHomecontent1 REVOLUTION SLIDER 6.6.5 -->
                                   <p class="rs-p-wp-fix"></p>
                                   <rs-module-wrap id="rev_slider_3_2_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                     <rs-module id="rev_slider_3_2" style="" data-version="6.6.5">
                                       <rs-slides style="overflow: hidden; position: absolute;">
                                         <rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                                           <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Main Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                         
                                           <rs-layer id="slider-3-slide-4-layer-0" data-type="image" data-rsp_ch="on" data-xy="xo:-19px,36px,53px,13px;yo:126px,74px,112px,69px;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:662px,490px,523px,306px;h:663px,491px,524px,307px;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;" style="z-index:8;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="584" height="585" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-9.png" data-no-retina>
                                           </rs-layer>
                                         
                                           <rs-layer id="slider-3-slide-4-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:246px,203px,231px,140px;yo:-16px,-25px,-23px,0;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:158px,117px,137px,104px;h:119px,88px,103px,78px;" data-frame_999="o:0;st:w;" style="z-index:9;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="138" height="104" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-10.png" data-no-retina>
                                           </rs-layer>
                                         
                                           <rs-layer id="slider-3-slide-4-layer-2" data-type="image" data-rsp_ch="on" data-xy="xo:65px,89px,116px,40px;y:b;yo:141px,102px,114px,61px;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:160px,117px,137px,110px;h:104px,76px,89px,71px;" data-frame_999="o:0;st:w;" style="z-index:11;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="137" height="89" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-11.png" data-no-retina>
                                           </rs-layer>
                                         
                                           <rs-layer id="slider-3-slide-4-layer-3" data-type="image" data-rsp_ch="on" data-xy="xo:172px,185px,240px,134px;yo:-49px,-29px,-43px,-4px;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:590px,418px,485px,270px;h:886px,627px,728px,405px;" data-frame_0="x:50,41,49,24;" data-frame_1="st:200;sp:900;" data-frame_999="o:0;st:w;" style="z-index:12;">
                                             <img src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="jj" class="tp-rs-img rs-lazyload" width="517" height="776" data-lazyload="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" data-no-retina>
                                           </rs-layer>
                               
    
                                         
                                           <rs-layer id="slider-3-slide-4-layer-6" data-type="image" data-rsp_ch="on" data-xy="xo:-155px,-64px,-51px,-505px;y:m;yo:-325px,-253px,-269px,-76px;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:316px,240px,260px,138px;h:316px,240px,260px,138px;" data-vbility="t,t,t,f" data-frame_1="e:power4.inOut;st:100;sp:1500;" data-frame_999="o:0;st:w;" style="z-index:14;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="306" height="306" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-3-1.png" data-no-retina>
                                           </rs-layer>
                                         
                                           <rs-layer id="slider-3-slide-4-layer-7" data-type="image" data-rsp_ch="on" data-xy="xo:-141px,-56px,-34px,-497px;y:m;yo:401px,266px,311px,95px;" data-text="w:normal;s:20,16,19,9;l:0,20,24,12;" data-dim="w:315px,240px,260px,138px;h:316px,241px,261px,138px;" data-vbility="t,t,t,f" data-frame_1="e:power4.inOut;st:100;sp:1500;" data-frame_999="o:0;st:w;" style="z-index:13;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="305" height="306" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-2-1.png" data-no-retina>
                                           </rs-layer>
                                           <!--
-->
                                         </rs-slide>
                                       </rs-slides>
                                     </rs-module>
                                     <script>
                                       setREVStartSize({
                                         c: 'rev_slider_3_2',
                                         rl: [1920, 1700, 1100, 680],
                                         el: [850, 600, 700, 400],
                                         gw: [760, 630, 760, 380],
                                         gh: [850, 600, 700, 400],
                                         type: 'hero',
                                         justify: '',
                                         layout: 'fullwidth',
                                         mh: "0"
                                       });
                                       if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider32"] !== undefined) {
                                         window.RS_MODULES.modules["revslider32"].once = false;
                                         window.revapi3 = undefined;
                                         if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                       }
                                     </script>
                                   </rs-module-wrap>
                                   <!-- END REVOLUTION SLIDER -->
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-74da536" data-id="74da536" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-c84d58a elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="c84d58a" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                   <h2 class="qodef-m-title"> {{$about->title}} </h2>
                                   <p class="qodef-m-text">{!! $about->desc !!}</p>
                                 </div>
                               </div>
                             </div>
                             <div class="elementor-element elementor-element-5c0143c elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_separator" data-id="5c0143c" data-element_type="widget" data-widget_type="joinup_core_separator.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                   <div class="qodef-m-line"></div>
                                 </div>
                               </div>
                             </div>
                        
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
          


                 <section class="elementor-section elementor-top-section elementor-element elementor-element-90d70a5 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="90d70a5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e4c69e0" data-id="e4c69e0" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-3be41fe elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image" data-id="3be41fe" data-element_type="widget" data-widget_type="image.default">
                               <div class="elementor-widget-container">
                                 <div class="elementor-image">
                                   <img width="2560" height="486" src="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-divider-img-01.png" class="attachment-full size-full" alt="aaa" srcset="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-divider-img-01.png 2560w, wp-content/uploads/2020/11/h1-divider-img-01-300x57.png 300w, wp-content/uploads/2020/11/h1-divider-img-01-1024x194.png 1024w, wp-content/uploads/2020/11/h1-divider-img-01-768x146.png 768w, wp-content/uploads/2020/11/h1-divider-img-01-1536x292.png 1536w, wp-content/uploads/2020/11/h1-divider-img-01-2048x389.png 2048w, wp-content/uploads/2020/11/h1-divider-img-01-1200x228.png 1200w, wp-content/uploads/2020/11/h1-divider-img-01-600x114.png 600w" sizes="(max-width: 2560px) 100vw, 2560px" loading="eager" />
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-941438b elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="941438b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2132089" data-id="2132089" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-2efb66d elementor-widget elementor-widget-joinup_core_section_title" data-id="2efb66d" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                   <h2 class="qodef-m-title"> Stories </h2>
                                   <p class="qodef-m-text" style="margin-top: 18px;color: #040A17">Journeys of Success and Inspiration from Our Alumni.</p>
                                 </div>
                               </div>
                             </div>
                             <div class="elementor-element elementor-element-68cf240 elementor-widget elementor-widget-joinup_core_testimonials_list" data-id="68cf240" data-element_type="widget" data-widget_type="joinup_core_testimonials_list.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-testimonials-list  qodef-grid qodef-layout--columns  qodef-gutter--large qodef-col-num--3 qodef-item-layout--info-below qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1366--3 qodef-col-num--1024--3 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1">
                                   <div class="qodef-grid-inner clear">
                                    @foreach ($stories as $item)
                                    <div class="qodef-e qodef-grid-item">
                                      <div class="qodef-e-inner">
                                        <div class="qodef-e-media-image">
                                          <img width="200" height="200" src="{{(!empty($item->user_info->photo))?URL::to('storage/'.$item->user_info->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full wp-post-image" alt="aa" sizes="(max-width: 400px) 100vw, 800px" loading="eager" />

                                        </div>
                                        <div class="qodef-e-content">
                                          <h5 itemprop="description" class="qodef-e-text"> {{$item->title}}</h5>
                                       
                                          <h5 class="qodef-e-author">
                                            <span class="qodef-e-author-name">{{ optional($item->user_info)->name ?? 'Default Name' }}
                                            </span>
                                            <span class="qodef-e-author-job"> {{$item->user_info->batch_name->name}} Batch </span> 
                                          </h5>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach

                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-7a895c0 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="7a895c0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aa7f8ed" data-id="aa7f8ed" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-c16a898 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="c16a898" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                   <h2 class="qodef-m-title" style="color: #FFFFFF"> Check our events! </h2>
                                   <p class="qodef-m-text" style="margin-top: 42px;color: #B4B6BA">See Our Upcoming Events & Activities.</p>
                                 </div>
                               </div>
                             </div>
                             <div class="elementor-element elementor-element-e4ef631 elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_button" data-id="e4ef631" data-element_type="widget" data-widget_type="joinup_core_button.default">
                               <div class="elementor-widget-container">
                                 <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link" href="{{route('event_all')}}" target="_self" data-hover-background-color="#F36B7F">
                                   <span class="qodef-m-text">Visit Events</span>
                                 </a>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1664cb3" data-id="1664cb3" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-8015dec elementor-widget elementor-widget-slider_revolution" data-id="8015dec" data-element_type="widget" data-widget_type="slider_revolution.default">
                               <div class="elementor-widget-container">
                                 <div class="wp-block-themepunch-revslider">
                                   <!-- START MainHomecontent3/OnlineCommunitycontent REVOLUTION SLIDER 6.6.5 -->
                                   <p class="rs-p-wp-fix"></p>
                                   <rs-module-wrap id="rev_slider_6_4_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                     <rs-module id="rev_slider_6_4" style="" data-version="6.6.5">
                                       <rs-slides style="overflow: hidden; position: absolute;">
                                         <rs-slide style="position: absolute;" data-key="rs-7" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                                           <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Main Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                         
                                           <rs-layer id="slider-6-slide-7-layer-0" data-type="image" data-xy="x:c;xo:-46px,-37px,-55px,-21px;y:m;yo:-43px,-37px,-31px,-26px;" data-text="w:normal;" data-dim="w:448px,371px,351px,243px;h:451px,373px,353px,245px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_1="x:0px,0,0,0;y:1px,0,0,0;st:400;sp:1200;" data-frame_999="o:0;st:w;" style="z-index:8;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="448" height="451" data-lazyload="{{asset('frontend')}}/wp-content/uploads/2020/11/h1-rev-img-29.png" data-no-retina>
                                           </rs-layer>
              
                                         
                                           <rs-layer id="slider-6-slide-7-layer-3" data-type="image" data-xy="x:c;xo:99px,93px,68px,38px;y:m;yo:75px,60px,50px,18px;" data-text="w:normal;" data-dim="w:516px,419px,407px,233px;h:452px,367px,356px,204px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:-50;" data-frame_1="st:200;sp:900;" data-frame_999="o:0;st:w;" style="z-index:11;">
                                             <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="640" height="560" data-lazyload="{{asset('frontend')}}/image/alumni_events.webp" data-no-retina>
                                           </rs-layer>
                                           <!--
-->
                                         </rs-slide>
                                       </rs-slides>
                                     </rs-module>
                                     <script>
                                       setREVStartSize({
                                         c: 'rev_slider_6_4',
                                         rl: [1920, 1700, 1100, 680],
                                         el: [620, 550, 500, 400],
                                         gw: [750, 700, 550, 380],
                                         gh: [620, 550, 500, 400],
                                         type: 'hero',
                                         justify: '',
                                         layout: 'fullwidth',
                                         mh: "0"
                                       });
                                       if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider64"] !== undefined) {
                                         window.RS_MODULES.modules["revslider64"].once = false;
                                         window.revapi6 = undefined;
                                         if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                       }
                                     </script>
                                   </rs-module-wrap>
                                   <!-- END REVOLUTION SLIDER -->
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>







                 <section class="elementor-section elementor-top-section elementor-element elementor-element-a7f30bc elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="a7f30bc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ac2d07" data-id="8ac2d07" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-82803b3 elementor-widget elementor-widget-joinup_core_section_title" data-id="82803b3" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                   <h2 class="qodef-m-title"> Latest news </h2>
                                   <p class="qodef-m-text" style="margin-top: 17px">Catch up with all the freshest info from BAUET ALUMNI CSE.</p>
                                 </div>
                               </div>
                             </div>
                             <div class="elementor-element elementor-element-05b7934 elementor-widget elementor-widget-joinup_core_blog_list" data-id="05b7934" data-element_type="widget" data-widget_type="joinup_core_blog_list.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-shortcode qodef-m  qodef-blog qodef--list qodef-item-layout--standard qodef-grid qodef-layout--masonry  qodef-gutter--large qodef-col-num--3 qodef-item-layout--standard qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1366--3 qodef-col-num--1024--1 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;joinup_core&quot;,&quot;module&quot;:&quot;blog\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;masonry&quot;,&quot;masonry_images_proportion&quot;:&quot;custom&quot;,&quot;masonry_custom_image_width&quot;:&quot;814&quot;,&quot;masonry_custom_image_height&quot;:&quot;500&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;3&quot;,&quot;columns_1366&quot;:&quot;3&quot;,&quot;columns_1024&quot;:&quot;1&quot;,&quot;columns_768&quot;:&quot;1&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;large&quot;,&quot;posts_per_page&quot;:&quot;3&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;additional_params&quot;:&quot;author&quot;,&quot;author_slug&quot;:&quot;Ronald Warner&quot;,&quot;layout&quot;:&quot;standard&quot;,&quot;title_tag&quot;:&quot;h4&quot;,&quot;excerpt_length&quot;:&quot;78&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;object_class_name&quot;:&quot;JoinUpCoreBlogListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;,&quot;additional_query_args&quot;:{&quot;author_name&quot;:&quot;Ronald Warner&quot;},&quot;space_value&quot;:25}">
                                   <div class="qodef-grid-inner clear">
                                     <div class="qodef-grid-masonry-sizer"></div>
                                     <div class="qodef-grid-masonry-gutter"></div>

                                     @foreach ($news as $item)

                                     <article class="qodef-e qodef-blog-item qodef-grid-item qodef-item--custom post-3355 post type-post status-publish format-standard has-post-thumbnail hentry category-hobbies tag-creative">
                                       <div class="qodef-e-inner">
                                         <div class="qodef-e-media">
                                           <div class="qodef-e-media-image">
                                             <a itemprop="url" href="improve-your-mental-health-by-drawing.html">
                                               <img src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" alt="jj" width="814" height="500" />
                                             </a>
                                           </div>
                                         </div>
                                         <div class="qodef-e-social-share">
                                           <div class="qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--left qodef-networks-num--3">
                                             <a class="qodef-social-share-dropdown-opener" href="javascript:void(0)">
                                               <span class="qodef-social-title"></span>
                                               <i class="qodef-social-share-icon kiko-share kikor"></i>
                                             </a>
                                             <div class="qodef-social-share-dropdown">
                                               <ul class="qodef-shortcode-list">
                                                 <li class="qodef-facebook-share">
                                                   <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fjoinup.qodeinteractive.com%2Fimprove-your-mental-health-by-drawing%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);">
                                                     <span class="qodef-icon-kiko kiko-facebook kikor qodef-social-network-icon"></span>
                                                   </a>
                                                 </li>
                                                 <li class="qodef-twitter-share">
                                                   <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://twitter.com/intent/tweet?text=An+eam+ornatus+habemus+corpora%2C+qui+eu+congue+verear+audire.+Eos+debet+diceret+et%2C+ad+dico++via+%40QodeInteractivehttps://joinup.qodeinteractive.com/improve-your-mental-health-by-drawing/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);">
                                                     <span class="qodef-icon-kiko kiko-twitter kikor qodef-social-network-icon"></span>
                                                   </a>
                                                 </li>
                                                 <li class="qodef-pinterest-share">
                                                   <a itemprop="url" class="qodef-share-link" href="#" onclick="popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fjoinup.qodeinteractive.com%2Fimprove-your-mental-health-by-drawing%2F&amp;description=Improve+your+mental+health+by+drawing&amp;media=https%3A%2F%2Fjoinup.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F12%2Fblog-single-img-19.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;">
                                                     <span class="qodef-icon-kiko kiko-pinterest kikor qodef-social-network-icon"></span>
                                                   </a>
                                                 </li>
                                               </ul>
                                             </div>
                                           </div>
                                         </div>
                                         <div class="qodef-e-content">
                                           <div class="qodef-e-info qodef-info--top">
                                             <div itemprop="dateCreated" class="qodef-e-info-item qodef-e-info-date entry-date published updated">
                                               <a itemprop="url" href="2020/12.html">{{$item->created_at->format('d M, Y')}}</a>
                                               <meta itemprop="interactionCount" content="UserComments: 0" />
                                             </div>
                  
                                           </div>
                                           <div class="qodef-e-text">
                                             <h4 itemprop="name" class="qodef-e-title entry-title">
                                               <a itemprop="url" class="qodef-e-title-link" href="improve-your-mental-health-by-drawing.html">{{$item->title}}</a>
                                             </h4>
                                             <p itemprop="description" class="qodef-e-excerpt">{!!  $item->description !!}</p>
                                           </div>
                                 
                                         </div>
                                       </div>
                                     </article>             

                                     @endforeach
          
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-a187b69 elementor-section-full_width qodef-elementor-content-grid qodef-newsletter-holder elementor-section-height-default elementor-section-height-default" data-id="a187b69" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-row">
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ab2524" data-id="2ab2524" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-1120615 elementor-widget elementor-widget-text-editor" data-id="1120615" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                 <div class="elementor-text-editor elementor-clearfix">
                                   <h2>
                                     <span style="color: #ffffff;">Newsletter</span>
                                   </h2>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3009b69" data-id="3009b69" data-element_type="column">
                         <div class="elementor-column-wrap elementor-element-populated">
                           <div class="elementor-widget-wrap">
                             <div class="elementor-element elementor-element-37df178 elementor-widget elementor-widget-wp-widget-joinup_core_contact_form_7" data-id="37df178" data-element_type="widget" data-widget_type="wp-widget-joinup_core_contact_form_7.default">
                               <div class="elementor-widget-container">
                                 <div class="qodef-contact-form-7">
                                   <div role="form" class="wpcf7" id="wpcf7-f184-p134-o1" lang="en-US" dir="ltr">
                                     <div class="screen-reader-response">
                                       <p role="status" aria-live="polite" aria-atomic="true"></p>
                                       <ul></ul>
                                     </div>
                                     <form action="index.html#wpcf7-f184-p134-o1" method="post" class="wpcf7-form init demo" novalidate="novalidate" data-status="init">
                                       <div style="display: none;">
                                         <input type="hidden" name="_wpcf7" value="184" />
                                         <input type="hidden" name="_wpcf7_version" value="5.6.4" />
                                         <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                         <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f184-p134-o1" />
                                         <input type="hidden" name="_wpcf7_container_post" value="134" />
                                         <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                       </div>
                                       <div class="qodef-newsletter-cf7">
                                         <div class="qodef-input-holder">
                                           <span class="wpcf7-form-control-wrap" data-name="your-email">
                                             <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email" />
                                           </span>
                                         </div>
                                         <div class="qodef-button-holder">
                                           <button type="submit" class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-type--filled qodef-m">
                                             <span class="qodef-m-text">subscribe</span>
                                           </button>
                                         </div>
                                       </div>
                                       <div class="wpcf7-response-output" aria-hidden="true"></div>
                                     </form>
                                   </div>
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