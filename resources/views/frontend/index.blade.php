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
                <div data-elementor-type="wp-page" data-elementor-id="230" class="elementor elementor-230">
                   <div class="elementor-inner">
                      <div class="elementor-section-wrap">
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-e3eb9bb elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="e3eb9bb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ccf0577" data-id="ccf0577" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-1839747 elementor-widget elementor-widget-slider_revolution" data-id="1839747" data-element_type="widget" data-widget_type="slider_revolution.default">
                                              <div class="elementor-widget-container">
                                                 <div class="wp-block-themepunch-revslider">
                                                    <!-- START OnlineCommunitytop REVOLUTION SLIDER 6.6.5 -->
                                                    <p class="rs-p-wp-fix"></p>
                                                    <rs-module-wrap id="rev_slider_11_1_wrapper" data-source="gallery" style="visibility:hidden;background:#ffffff;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                       <rs-module id="rev_slider_11_1" style="" data-version="6.6.5">
                                                          <rs-slides style="overflow: hidden; position: absolute;">
                                                             <rs-slide style="position: absolute;" data-key="rs-14" data-title="Slide" data-anim="adpr:false;">
                                                                <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Online Community" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/plugins/revslider/public/assets/assets/transparent.png" data-parallax="off" data-no-retina>
                                                                <!---->						
                                                             </rs-slide>
                                                          </rs-slides>
                                                          <rs-static-layers>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-0" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,c,c,c;xo:-178px,374px,216px,83px;y:b,m,m,m;yo:301px,-16px,171px,50px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:657px,434px,295px,152px;h:586px,387px,263px,136px;"
                                                                data-vbility="t,t,t,f"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="st:150;sp:1200;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:16;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="657" height="586" data-lazyload="wp-content/uploads/2020/11/h2-rev-img4.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-1" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:c;xo:0,25px,0,9px;y:t,t,b,b;yo:-152px,-347px,98px,80px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:2560px,1778px,1778px,1778px;h:1080px,1000px,1000px,1000px;"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-staticz="back"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:8;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="2560" height="1080" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-02.jpg" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-2" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,c,c,c;xo:-17px,5px,1px,-31px;y:b,m,m,m;yo:6px,93px,221px,-17px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:1320px,980px,577px,305px;h:935px,694px,409px,216px;"
                                                                data-vbility="t,t,t,f"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="y:50;"
                                                                data-frame_1="sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:13;"
                                                                ><img src="{{(!empty($slider->photo))?URL::to('storage/'.$slider->photo):URL::to('image/no_image.png')}}" alt="jj" class="tp-rs-img rs-lazyload" width="1320" height="935" data-lazyload="{{(!empty($slider->photo))?URL::to('storage/'.$slider->photo):URL::to('image/no_image.png')}}" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-3" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:l,l,c,c;xo:-137px,-87px,-340px,0;y:b,b,m,m;yo:-43px,61px,274px,191px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:886px,607px,349px,355px;h:829px,568px,327px,332px;"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="st:300;sp:1200;"
                                                                data-frame_999="o:0;st:w;"
                                                                data-tloop="u:true;"
                                                                data-loop_0="x:-15px;"
                                                                data-loop_999="x:15px;sp:3600;st:600;e:sine.inOut;yym:t;"
                                                                style="z-index:12;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="revimg5desc" class="tp-rs-img rs-lazyload" width="886" height="829" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-6.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-4" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:l,l,c,c;xo:-149px,-97px,-391px,-569px;y:m;yo:-12px,-26px,-64px,5px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:318px,207px,190px,190px;h:313px,204px,187px,187px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="x:-50;"
                                                                data-frame_1="st:300;sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                data-loop_999="rZ:360;sp:60000;"
                                                                style="z-index:9;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="318" height="313" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-7.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-6" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:l,l,c,c;xo:35px,49px,-178px,-178px;y:m;yo:-254px,-185px,-29px,-29px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:195px,149px,107px,107px;h:147px,112px,81px,81px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="st:200;sp:1200;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:10;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="215" height="162" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-9.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-7" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:l,l,c,c;xo:61px,75px,-123px,-123px;y:m;yo:-302px,-239px,-50px,-50px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:320px,215px,189px,189px;h:320px,215px,189px,189px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="st:250;sp:1250;"
                                                                data-frame_999="o:0;st:w;"
                                                                data-loop_0="y:-10;"
                                                                data-loop_999="y:10;sp:6000;e:sine.inOut;yym:t;"
                                                                style="z-index:11;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="revimg6desc" class="tp-rs-img rs-lazyload" width="320" height="320" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-12.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-8" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,r,c,c;xo:57px,35px,301px,301px;y:b,b,m,m;yo:901px,722px,-38px,-38px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:195px,150px,107px,107px;h:147px,113px,81px,81px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="st:200;sp:1200;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:14;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="215" height="162" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-9.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-9" 
                                                                class="rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,r,c,c;xo:57px,48px,264px,264px;y:b,b,m,m;yo:887px,725px,-68px,-68px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:320px,215px,181px,181px;h:321px,216px,182px,182px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_1="y:7px;st:250;sp:1250;"
                                                                data-frame_999="o:0;st:w;"
                                                                data-loop_0="y:-10;"
                                                                data-loop_999="y:10;sp:6000;e:sine.inOut;yym:t;"
                                                                style="z-index:15;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="revimg7desc" class="tp-rs-img rs-lazyload" width="319" height="320" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-11.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-11" 
                                                                class="rs-layer-static"
                                                                data-type="text"
                                                                data-color="#040a17"
                                                                data-xy="x:c;y:t,t,t,m;yo:150px,67px,107px,-150px;"
                                                                data-text="w:normal;s:58;l:66;fw:700;a:left,left,left,center;"
                                                                data-dim="w:auto,auto,auto,369px;"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="y:50;"
                                                                data-frame_1="sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:18;font-family:'Barlow';"
                                                                >Welcome to the Forum! 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-12" 
                                                                class="rs-pxl-2 rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,r,c,c;xo:98px,74px,440px,440px;y:t,t,m,m;yo:456px,387px,88px,88px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:49px,35px,35px,35px;h:65px,46px,46px,46px;"
                                                                data-vbility="t,t,t,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="x:50;"
                                                                data-frame_1="st:300;sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:20;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="49" height="65" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-8.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-13" 
                                                                class="rs-pxl-2 rs-layer-static"
                                                                data-type="image"
                                                                data-xy="x:r,r,c,c;xo:8px,14px,482px,482px;y:t,t,m,m;yo:519px,428px,136px,136px;"
                                                                data-text="w:normal;"
                                                                data-dim="w:96px,61px,61px,61px;h:108px,69px,69px,69px;"
                                                                data-vbility="t,t,f,f"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="x:50;"
                                                                data-frame_1="st:350;sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:19;"
                                                                ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="96" height="108" data-lazyload="wp-content/uploads/2020/11/h2-rev-img-10.png" data-no-retina> 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                             <rs-layer
                                                                id="slider-11-slide-11-layer-14" 
                                                                class="rs-layer-static"
                                                                data-type="text"
                                                                data-color="#040a17"
                                                                data-xy="x:c;y:t,t,t,m;yo:244px,161px,201px,2px;"
                                                                data-text="w:normal;s:21;l:30;a:center;"
                                                                data-dim="w:747px,747px,677px,321px;"
                                                                data-basealign="slide"
                                                                data-rsp_o="off"
                                                                data-rsp_bd="off"
                                                                data-onslides="s:-1;e:-1;"
                                                                data-frame_0="y:50;"
                                                                data-frame_1="st:100;sp:1000;"
                                                                data-frame_999="o:0;st:w;"
                                                                style="z-index:17;font-family:'Barlow';"
                                                                >The easy way to create, define & manage your own space for group discussions with exclusive members 
                                                             </rs-layer>
                                                             <!--
                                                                -->
                                                          </rs-static-layers>
                                                       </rs-module>
                                                       <script>
                                                          setREVStartSize({c: 'rev_slider_11_1',rl:[1920,1700,1100,680],el:[1230,950,800,600],gw:[1300,1100,600,300],gh:[1230,950,800,600],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider111"]!==undefined) {window.RS_MODULES.modules["revslider111"].once = false;window.revapi11 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
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
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-a439cc3 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="a439cc3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4dac735" data-id="4dac735" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-b210af9 elementor-widget elementor-widget-text-editor" data-id="b210af9" data-element_type="widget" data-widget_type="text-editor.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-text-editor elementor-clearfix">
                                                    <h5 style="text-align: center;">Leading companies that love Join Up</h5>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-c6d8496 elementor-widget elementor-widget-joinup_core_clients_list" data-id="c6d8496" data-element_type="widget" data-widget_type="joinup_core_clients_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-clients-list qodef-grid qodef-layout--columns  qodef-gutter--huge qodef-col-num--6 qodef-item-layout--image-only qodef-responsive--custom qodef-col-num--1440--6 qodef-col-num--1366--6 qodef-col-num--1024--3 qodef-col-num--768--3 qodef-col-num--680--2 qodef-col-num--480--2 qodef-hover-animation--fade-in">
                                                    <div class="qodef-grid-inner clear">
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-1.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/10/h2-client-img-1.png 307w, wp-content/uploads/2020/10/h2-client-img-1-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-2.png" class="attachment-full size-full" alt="aaa" srcset="wp-content/uploads/2020/10/h2-client-img-2.png 307w, wp-content/uploads/2020/10/h2-client-img-2-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-3.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/10/h2-client-img-3.png 307w, wp-content/uploads/2020/10/h2-client-img-3-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-4.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/10/h2-client-img-4.png 307w, wp-content/uploads/2020/10/h2-client-img-4-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-5.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/10/h2-client-img-5.png 307w, wp-content/uploads/2020/10/h2-client-img-5-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>
                                                       <span class="qodef-e qodef-grid-item">
                                                       <span class="qodef-e-inner">
                                                       <span class="qodef-e-image">
                                                       <a itemprop="url" href="#" target="_blank">
                                                       <span class="qodef-e-logo">
                                                       <img width="307" height="88" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-client-img-6.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/10/h2-client-img-6.png 307w, wp-content/uploads/2020/10/h2-client-img-6-300x86.png 300w" sizes="(max-width: 307px) 100vw, 307px" loading="eager" />			</span>
                                                       </a>
                                                       </span>
                                                       </span>
                                                       </span>	
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
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-8b77cbc elementor-section-full_width qodef-elementor-content-grid qodef-extended-grid qodef-extended-grid--right-even-cols elementor-section-height-default elementor-section-height-default" data-id="8b77cbc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fb97360" data-id="fb97360" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-c8a225c elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="c8a225c" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                                    <h2 class="qodef-m-title" >
                                                       Find the right group that fits your interests			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 36px">Cu diam augue congue nam, utamur democritum poleo mediocritatem ea usu, no utamur civibus officiis per. A graeco fabellas duo. Ad nihil dictas.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-51a468f elementor-widget elementor-widget-joinup_core_separator" data-id="51a468f" data-element_type="widget" data-widget_type="joinup_core_separator.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                                    <div class="qodef-m-line" ></div>
                                                 </div>
                                              </div>
                                           </div>
                                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-23d043c elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="23d043c" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                 <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b75d304" data-id="b75d304" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-f2b142a elementor-widget elementor-widget-image" data-id="f2b142a" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                   <div class="elementor-image">
                                                                      <img src="{{asset('frontend')}}/wp-content/uploads/elementor/thumbs/h1-img-5-ozd209lfkp4dljevivkp8nnva0a0eezvxap8wrlv40.png" title="h1-img-5" alt="aa" />														
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54b577a" data-id="54b577a" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-d25d122 elementor-widget elementor-widget-text-editor" data-id="d25d122" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                   <div class="elementor-text-editor elementor-clearfix">
                                                                      <h5>Interested in our network?</h5>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="elementor-element elementor-element-70c8b45 elementor-widget elementor-widget-joinup_core_button" data-id="70c8b45" data-element_type="widget" data-widget_type="joinup_core_button.default">
                                                                <div class="elementor-widget-container">
                                                                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="groups.html" target="_self"  >
                                                                   <i class="qodef-button-icon kiko-double-arrow-right kikol"></i>
                                                                   <span class="qodef-m-text">Learn more</span>
                                                                   </a>		
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
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77ef113" data-id="77ef113" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-7c9c0f5 elementor-widget elementor-widget-image" data-id="7c9c0f5" data-element_type="widget" data-widget_type="image.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-image">
                                                    <img width="983" height="715" src="{{asset('frontend')}}/wp-content/uploads/2020/11/h2-img-1.jpg" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2020/11/h2-img-1.jpg 983w, wp-content/uploads/2020/11/h2-img-1-600x436.jpg 600w, wp-content/uploads/2020/11/h2-img-1-300x218.jpg 300w, wp-content/uploads/2020/11/h2-img-1-768x559.jpg 768w" sizes="(max-width: 983px) 100vw, 983px" loading="eager" />														
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </section>
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-f17fb90 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="f17fb90" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bceb22" data-id="7bceb22" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-2ce55ae elementor-widget elementor-widget-joinup_core_section_title" data-id="2ce55ae" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center ">
                                                    <h2 class="qodef-m-title" >
                                                       Most popular groups			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 24px">Lorem ipsum dolor sit amet, vel no probo consetetur eum omnes nullam</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-f63cf80 elementor-widget elementor-widget-joinup_core_group_list" data-id="f63cf80" data-element_type="widget" data-widget_type="joinup_core_group_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-group-list-holder">
                                                    <div class="qodef-shortcode qodef-m  qodef-group-list qodef-item-layout--standard qodef-grid qodef-swiper-container  qodef-gutter--huge qodef-col-num--3 qodef-item-layout--standard qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1366--3 qodef-col-num--1024--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;slidesPerView&quot;:&quot;3&quot;,&quot;centeredSlides&quot;:false,&quot;spaceBetween&quot;:40,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;3&quot;,&quot;slidesPerView1366&quot;:&quot;3&quot;,&quot;slidesPerView1024&quot;:&quot;2&quot;,&quot;slidesPerView768&quot;:&quot;1&quot;,&quot;slidesPerView680&quot;:&quot;1&quot;,&quot;slidesPerView480&quot;:&quot;1&quot;}">
                                                       <div class="swiper-wrapper">
                                                          <div class="qodef-e swiper-slide">
                                                             <div class="qodef-e-item-holder">
                                                                <div class="qodef-e-media">
                                                                   <a href="groups/fashion.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/group-avatars/12/6011af31d7900-bpfull.jpg" class="avatar group-12-avatar avatar-600 photo" width="600" height="375" alt="Group logo of Fashion ideas" /></a>
                                                                   <div class="qodef-group-hot-trending-holder">
                                                                      <div class="qodef-group-trending">
                                                                         <i class="kikos kiko-lightning"></i>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                                <div class="qodef-e-item-content">
                                                                   <div class="qodef-e-type"><span class="qodef-public"><i class="kiko-globe-north-america kikos"></i>Public</span></div>
                                                                   <h4 class="qodef-e-title"><a href="groups/fashion.html" class="bp-group-home-link fashion-home-link">Fashion ideas</a></h4>
                                                                   <div class="qodef-e-excerpt">
                                                                      <p>Lorem ipsum dolor sit amet, ea cum sint novum, at electram constituto usu, ex </p>
                                                                   </div>
                                                                   <div class="qodef-e-info-bottom">
                                                                      <div class="qodef-e-count"><i class="kikos kiko-users"></i>8 members</div>
                                                                      <div class="qodef-e-activity"><span class="activity">Active 2 years ago</span></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="qodef-e swiper-slide">
                                                             <div class="qodef-e-item-holder">
                                                                <div class="qodef-e-media">
                                                                   <a href="groups/builders.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/group-avatars/11/5fc9f60c316e1-bpfull.jpg" class="avatar group-11-avatar avatar-600 photo" width="600" height="375" alt="Group logo of Builders &amp; QA" /></a>
                                                                   <div class="qodef-group-hot-trending-holder">
                                                                      <div class="qodef-group-trending">
                                                                         <i class="kikos kiko-lightning"></i>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                                <div class="qodef-e-item-content">
                                                                   <div class="qodef-e-type"><span class="qodef-public"><i class="kiko-globe-north-america kikos"></i>Public</span></div>
                                                                   <h4 class="qodef-e-title"><a href="groups/builders.html" class="bp-group-home-link builders-home-link">Builders & QA</a></h4>
                                                                   <div class="qodef-e-excerpt">
                                                                      <p>Lorem ipsum dolor sit amet, ea cum sint novum, at electram constituto usu, ex </p>
                                                                   </div>
                                                                   <div class="qodef-e-info-bottom">
                                                                      <div class="qodef-e-count"><i class="kikos kiko-users"></i>7 members</div>
                                                                      <div class="qodef-e-activity"><span class="activity">Active 2 years ago</span></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="qodef-e swiper-slide">
                                                             <div class="qodef-e-item-holder">
                                                                <div class="qodef-e-media">
                                                                   <a href="groups/hanging-out.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/group-avatars/10/6011af0160947-bpfull.jpg" class="avatar group-10-avatar avatar-600 photo" width="600" height="375" alt="Group logo of Hanging out" /></a>
                                                                   <div class="qodef-group-hot-trending-holder">
                                                                      <div class="qodef-group-trending">
                                                                         <i class="kikos kiko-lightning"></i>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                                <div class="qodef-e-item-content">
                                                                   <div class="qodef-e-type"><span class="qodef-public"><i class="kiko-globe-north-america kikos"></i>Public</span></div>
                                                                   <h4 class="qodef-e-title"><a href="groups/hanging-out.html" class="bp-group-home-link hanging-out-home-link">Hanging out</a></h4>
                                                                   <div class="qodef-e-excerpt">
                                                                      <p>Lorem ipsum dolor sit amet, ea cum sint novum, at electram constituto usu, ex </p>
                                                                   </div>
                                                                   <div class="qodef-e-info-bottom">
                                                                      <div class="qodef-e-count"><i class="kikos kiko-users"></i>9 members</div>
                                                                      <div class="qodef-e-activity"><span class="activity">Active 2 years ago</span></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="swiper-pagination"></div>
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
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-378ea99 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="378ea99" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9f44bd3" data-id="9f44bd3" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-0b512b3 elementor-widget elementor-widget-slider_revolution" data-id="0b512b3" data-element_type="widget" data-widget_type="slider_revolution.default">
                                              <div class="elementor-widget-container">
                                                 <div class="wp-block-themepunch-revslider">
                                                    <!-- START OnlineCommunitycontent1/SocialNetworkcontent1 REVOLUTION SLIDER 6.6.5 -->
                                                    <p class="rs-p-wp-fix"></p>
                                                    <rs-module-wrap id="rev_slider_14_2_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                       <rs-module id="rev_slider_14_2" style="" data-version="6.6.5">
                                                          <rs-slides style="overflow: hidden; position: absolute;">
                                                             <rs-slide style="position: absolute;" data-key="rs-17" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                                                                <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Online Community" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-14-slide-17-layer-0" 
                                                                   data-type="image"
                                                                   data-rsp_ch="on"
                                                                   data-xy="x:r;xo:103px,50px,-18px,-2px;y:b;yo:1px,35px,0,11px;"
                                                                   data-text="w:normal;s:20,16,19,9;l:0,20,24,12;"
                                                                   data-dim="w:1061px,771px,815px,434px;h:767px,557px,589px,314px;"
                                                                   data-frame_1="e:power4.inOut;sp:1500;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:8;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1963" height="1419" data-lazyload="wp-content/uploads/2020/11/h3-rev2-img-5.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-14-slide-17-layer-3" 
                                                                   data-type="image"
                                                                   data-rsp_ch="on"
                                                                   data-xy="x:r;xo:144px,82px,19px,10px;y:b;yo:128px,119px,97px,45px;"
                                                                   data-text="w:normal;s:20,16,19,9;l:0,20,24,12;"
                                                                   data-dim="w:833px,614px,618px,352px;h:563px,415px,418px,238px;"
                                                                   data-frame_1="e:power4.inOut;st:200;sp:1200;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:9;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1466" height="991" data-lazyload="wp-content/uploads/2020/11/h3-rev2-img-1.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-14-slide-17-layer-4" 
                                                                   data-type="image"
                                                                   data-rsp_ch="on"
                                                                   data-xy="x:c;xo:-35px,22px,157px,61px;yo:12px,10px,56px,48px;"
                                                                   data-text="w:normal;s:20,16,19,9;l:0,20,24,12;"
                                                                   data-dim="w:46px,37px,39px,19px;h:53px,43px,45px,25px;"
                                                                   data-frame_1="e:power4.inOut;st:550;sp:1200;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:12;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="93" height="107" data-lazyload="wp-content/uploads/2020/11/h3-rev2-img-2.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-14-slide-17-layer-6" 
                                                                   data-type="image"
                                                                   data-rsp_ch="on"
                                                                   data-xy="x:l,l,c,c;xo:-187px,11px,-63px,-52px;y:t,t,t,m;yo:-15px,-6px,27px,-127px;"
                                                                   data-text="w:normal;s:20,16,19,9;l:0,20,24,12;"
                                                                   data-dim="w:516px,340px,450px,235px;h:202px,133px,176px,92px;"
                                                                   data-frame_0="y:-50,-41,-49,-24;"
                                                                   data-frame_1="st:500;sp:1000;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:11;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1032" height="404" data-lazyload="wp-content/uploads/2020/12/h3-rev2-img-4.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-14-slide-17-layer-7" 
                                                                   data-type="image"
                                                                   data-rsp_ch="on"
                                                                   data-xy="xo:-356px,-120px,-45px,-54px;y:m;yo:-187px,-164px,-117px,-61px;"
                                                                   data-text="w:normal;s:20,16,19,9;l:0,20,24,12;"
                                                                   data-dim="w:522px,350px,460px,240px;h:204px,137px,180px,94px;"
                                                                   data-frame_0="y:-50,-41,-49,-24;"
                                                                   data-frame_1="st:400;sp:1000;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:10;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="1044" height="408" data-lazyload="wp-content/uploads/2020/12/h3-rev2-img-3.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->						
                                                             </rs-slide>
                                                          </rs-slides>
                                                       </rs-module>
                                                       <script>
                                                          setREVStartSize({c: 'rev_slider_14_2',rl:[1920,1700,1100,680],el:[850,650,700,400],gw:[760,630,760,380],gh:[850,650,700,400],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider142"]!==undefined) {window.RS_MODULES.modules["revslider142"].once = false;window.revapi14 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
                                                       </script>
                                                    </rs-module-wrap>
                                                    <!-- END REVOLUTION SLIDER -->
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a9908d" data-id="1a9908d" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-4dbe824 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="4dbe824" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                                    <h2 class="qodef-m-title" >
                                                       Activate daily notifications and never miss a thing			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 36px">Cu diam augue congue nam, utamur democritum poteos dex mediocritatem ea usu, no utamur civibus officiis per. At tutti graeco fabellas duo. Ad nihil dictas eos ex veluss.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-c5ab30e elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_separator" data-id="c5ab30e" data-element_type="widget" data-widget_type="joinup_core_separator.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                                    <div class="qodef-m-line" ></div>
                                                 </div>
                                              </div>
                                           </div>
                                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-dffe481 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="dffe481" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                 <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a44658e" data-id="a44658e" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-f261c2a elementor-widget elementor-widget-image" data-id="f261c2a" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                   <div class="elementor-image">
                                                                      <img width="61" height="64" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-img-3.png" class="attachment-full size-full" alt="aa" loading="eager" />														
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c25c076" data-id="c25c076" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-836328c elementor-widget elementor-widget-text-editor" data-id="836328c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                   <div class="elementor-text-editor elementor-clearfix">
                                                                      <h5>Get notifications for latest events</h5>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="elementor-element elementor-element-1075dc9 elementor-widget elementor-widget-joinup_core_button" data-id="1075dc9" data-element_type="widget" data-widget_type="joinup_core_button.default">
                                                                <div class="elementor-widget-container">
                                                                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="events/list.html" target="_self"  >
                                                                   <i class="qodef-button-icon kiko-double-arrow-right kikol"></i>
                                                                   <span class="qodef-m-text">See all events</span>
                                                                   </a>		
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
                         </section>
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-1deb413 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="1deb413" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7971548" data-id="7971548" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-72c8222 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="72c8222" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                 <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-574d3be" data-id="574d3be" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-41055b0 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="41055b0" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                   <div class="elementor-text-editor elementor-clearfix">
                                                                      <h3>Meet some of our most active members</h3>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ddeb9ff" data-id="ddeb9ff" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-f3128e6 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-joinup_core_button" data-id="f3128e6" data-element_type="widget" data-widget_type="joinup_core_button.default">
                                                                <div class="elementor-widget-container">
                                                                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link" href="members.html" target="_self"  >
                                                                   <span class="qodef-m-text">View all</span>
                                                                   </a>		
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </section>
                                           <div class="elementor-element elementor-element-ed9ba8f elementor-widget elementor-widget-joinup_core_members_list" data-id="ed9ba8f" data-element_type="widget" data-widget_type="joinup_core_members_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-members-list qodef-grid qodef-layout--columns  qodef-gutter--medium qodef-col-num--3  qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1366--3 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1">
                                                    <div class="qodef-grid-inner clear">
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-e-top-info-holder">
                                                                <div class="qodef-e-member-image">
                                                                   <a href="members/jayden-forbes.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/32/5fc9f09a168ce-bpthumb.jpg" class="avatar user-32-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Jayden Forbes" /></a>
                                                                   <span class="qodef-offline"></span>
                                                                </div>
                                                                <div class="qodef-e-info-holder">
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-username"><a class='bp-suggestions-mention' href='members/jayden-forbes.html' rel='nofollow'>@jayden-forbes</a></span>
                                                                   </div>
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-last-active">3 years ago</span>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <h4 class="qodef-e-name"><a href="members/jayden-forbes.html">Jayden Forbes</a></h4>
                                                             <div class="qodef-e-member-location">East Natchitoches, PA</div>
                                                             <div class="qodef-e-user-actions">
                                                                <a class="qodef-friendship-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-user-add kikol"></span><span class="qodef-btn-text">Add Friend</span>
                                                                </a>
                                                                <a class="qodef-message-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-comment kikol"></span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-e-top-info-holder">
                                                                <div class="qodef-e-member-image">
                                                                   <a href="members/raul-gilmore.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/30/5fc9f2fdc4669-bpthumb.jpg" class="avatar user-30-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Raul Gilmore" /></a>
                                                                   <span class="qodef-offline"></span>
                                                                </div>
                                                                <div class="qodef-e-info-holder">
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-username"><a class='bp-suggestions-mention' href='members/raul-gilmore.html' rel='nofollow'>@raul-gilmore</a></span>
                                                                   </div>
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-last-active">3 years ago</span>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <h4 class="qodef-e-name"><a href="members/raul-gilmore.html">Raul Gilmore</a></h4>
                                                             <div class="qodef-e-member-location">Emerson, MT</div>
                                                             <div class="qodef-e-user-actions">
                                                                <a class="qodef-friendship-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-user-add kikol"></span><span class="qodef-btn-text">Add Friend</span>
                                                                </a>
                                                                <a class="qodef-message-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-comment kikol"></span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-e-top-info-holder">
                                                                <div class="qodef-e-member-image">
                                                                   <a href="members/anthony-clark.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/2/5fc9ecdf13932-bpthumb.jpg" class="avatar user-2-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Anthony Clark" /></a>
                                                                   <span class="qodef-offline"></span>
                                                                </div>
                                                                <div class="qodef-e-info-holder">
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-username"><a class='bp-suggestions-mention' href='members/anthony-clark.html' rel='nofollow'>@anthony-clark</a></span>
                                                                   </div>
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-last-active">2 years ago</span>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <h4 class="qodef-e-name"><a href="members/anthony-clark.html">Anthony Clark<i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i></a></h4>
                                                             <div class="qodef-e-member-location">San Francisco, CA</div>
                                                             <div class="qodef-e-user-actions">
                                                                <a class="qodef-friendship-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-user-add kikol"></span><span class="qodef-btn-text">Add Friend</span>
                                                                </a>
                                                                <a class="qodef-message-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-comment kikol"></span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-e-top-info-holder">
                                                                <div class="qodef-e-member-image">
                                                                   <a href="members/demi-portillo.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/11/5fc9ee4b79d2c-bpthumb.jpg" class="avatar user-11-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Demi Portillo" /></a>
                                                                   <span class="qodef-offline"></span>
                                                                </div>
                                                                <div class="qodef-e-info-holder">
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-username"><a class='bp-suggestions-mention' href='members/demi-portillo.html' rel='nofollow'>@demi-portillo</a></span>
                                                                   </div>
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-last-active">3 years ago</span>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <h4 class="qodef-e-name"><a href="members/demi-portillo.html">Demi Portillo<i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i></a></h4>
                                                             <div class="qodef-e-member-location">Emerson, MT</div>
                                                             <div class="qodef-e-user-actions">
                                                                <a class="qodef-friendship-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-user-add kikol"></span><span class="qodef-btn-text">Add Friend</span>
                                                                </a>
                                                                <a class="qodef-message-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-comment kikol"></span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-e-top-info-holder">
                                                                <div class="qodef-e-member-image">
                                                                   <a href="members/charly-franklin.html"><img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/20/5fc9ed9320a2e-bpthumb.jpg" class="avatar user-20-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Charly Franklin" /></a>
                                                                   <span class="qodef-offline"></span>
                                                                </div>
                                                                <div class="qodef-e-info-holder">
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-username"><a class='bp-suggestions-mention' href='members/charly-franklin.html' rel='nofollow'>@charly-franklin</a></span>
                                                                   </div>
                                                                   <div class="qodef-e-info">
                                                                      <span class="qodef-e-last-active">3 years ago</span>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <h4 class="qodef-e-name"><a href="members/charly-franklin.html">Charly Franklin</a></h4>
                                                             <div class="qodef-e-member-location">East Natchitoches, PA</div>
                                                             <div class="qodef-e-user-actions">
                                                                <a class="qodef-friendship-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-user-add kikol"></span><span class="qodef-btn-text">Add Friend</span>
                                                                </a>
                                                                <a class="qodef-message-button" data-show-youzify-login="true">
                                                                <span class="qodef-icon-kiko kiko-comment kikol"></span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-59454c2 elementor-absolute elementor-widget elementor-widget-text-editor" data-id="59454c2" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="text-editor.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-text-editor elementor-clearfix">
                                                    <h1><span style="text-decoration: underline; text-decoration-color: rgb(160,191,255,0.4); font-size: 80px;">+ 250</span></h1>
                                                    <p><span style="font-size: 21px; color: #040a17;">Members in the community</span></p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </section>
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-f282b25 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="f282b25" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea3ec60" data-id="ea3ec60" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-517bf49 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="517bf49" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                                    <h2 class="qodef-m-title" style="color: #FFFFFF">
                                                       Check our amazing search intergration now			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 42px;color: #B4B6BA">Lorem ipsum dolor sit amet, his te case appetere, quo ex dicat etiam, est an abhorreant voluptatum. Agame iracundia aliquando cu per, vix quod causae at nuam.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-212a253 elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_button" data-id="212a253" data-element_type="widget" data-widget_type="joinup_core_button.default">
                                              <div class="elementor-widget-container">
                                                 <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link" href="forums.html" target="_self" data-hover-background-color="#F36B7F" >
                                                 <span class="qodef-m-text">Visit Forums</span>
                                                 </a>		
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40b14a6" data-id="40b14a6" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-eeb23d1 elementor-widget elementor-widget-slider_revolution" data-id="eeb23d1" data-element_type="widget" data-widget_type="slider_revolution.default">
                                              <div class="elementor-widget-container">
                                                 <div class="wp-block-themepunch-revslider">
                                                    <!-- START MainHomecontent3/OnlineCommunitycontent REVOLUTION SLIDER 6.6.5 -->
                                                    <p class="rs-p-wp-fix"></p>
                                                    <rs-module-wrap id="rev_slider_6_3_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                       <rs-module id="rev_slider_6_3" style="" data-version="6.6.5">
                                                          <rs-slides style="overflow: hidden; position: absolute;">
                                                             <rs-slide style="position: absolute;" data-key="rs-7" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                                                                <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Online Community" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-6-slide-7-layer-0" 
                                                                   data-type="image"
                                                                   data-xy="x:c;xo:-46px,-37px,-55px,-21px;y:m;yo:-43px,-37px,-31px,-26px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:448px,371px,351px,243px;h:451px,373px,353px,245px;"
                                                                   data-basealign="slide"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_1="x:0px,0,0,0;y:1px,0,0,0;st:400;sp:1200;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:8;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="448" height="451" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-29.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-6-slide-7-layer-1" 
                                                                   data-type="image"
                                                                   data-xy="x:c;xo:-216px,-174px,-185px,-114px;y:m;yo:56px,68px,66px,43px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:96px,65px,58px,38px;h:95px,64px,57px,38px;"
                                                                   data-basealign="slide"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="x:-50;"
                                                                   data-frame_1="st:300;sp:1000;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:10;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="96" height="95" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-30.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-6-slide-7-layer-2" 
                                                                   data-type="image"
                                                                   data-xy="x:c;xo:18px,22px,0,-1px;y:m;yo:-139px,-113px,-120px,-80px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:613px,503px,503px,289px;h:100px,82px,82px,47px;"
                                                                   data-basealign="slide"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:-50;"
                                                                   data-frame_1="sp:700;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:9;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="aa" class="tp-rs-img rs-lazyload" width="613" height="100" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-28.jpg" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-6-slide-7-layer-3" 
                                                                   data-type="image"
                                                                   data-xy="x:c;xo:99px,93px,68px,38px;y:m;yo:75px,60px,50px,18px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:516px,419px,407px,233px;h:452px,367px,356px,204px;"
                                                                   data-basealign="slide"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:-50;"
                                                                   data-frame_1="st:200;sp:900;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:11;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="640" height="560" data-lazyload="wp-content/uploads/2020/12/h1-rev-img-27.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->						
                                                             </rs-slide>
                                                          </rs-slides>
                                                       </rs-module>
                                                       <script>
                                                          setREVStartSize({c: 'rev_slider_6_3',rl:[1920,1700,1100,680],el:[620,550,500,400],gw:[750,700,550,380],gh:[620,550,500,400],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider63"]!==undefined) {window.RS_MODULES.modules["revslider63"].once = false;window.revapi6 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
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
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-7f22f84 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="7f22f84" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-18746cd" data-id="18746cd" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-4391854 elementor-widget elementor-widget-joinup_core_section_title" data-id="4391854" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center ">
                                                    <h2 class="qodef-m-title" >
                                                       Trending discussions			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 15px;color: #040A17">Find diferent topics every day</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-488bf4f elementor-widget elementor-widget-joinup_core_topic_list" data-id="488bf4f" data-element_type="widget" data-widget_type="joinup_core_topic_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-topic-list qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--1  qodef-responsive--predefined">
                                                    <div class="qodef-grid-inner clear">
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-topic-author-avatar">
                                                                <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                             </div>
                                                             <div class="qodef-topic-main-info">
                                                                <h5 class="qodef-topic-title"><a href="groups/book-club/forum/topic/this-is-my-book-club.html">this is my book club</a></h5>
                                                                <div class="qodef-topic-author-info-holder">
                                                                   <div class="qodef-topic-author-avatar">
                                                                      <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                                   </div>
                                                                   <div class="qodef-topic-author-info-inner">
                                                                      <h6 class="qodef-topic-author"><span>Started by </span><a href="members/test.html">Testman</a></h6>
                                                                      <div class="qodef-topic-freshness-time"><a href="groups/book-club/forum/topic/this-is-my-book-club.html#post-5634" title="Reply To: this is my book club">2 years, 3 months ago</a></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="qodef-topic-reply-count"><span>Replies</span>4</div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-topic-author-avatar">
                                                                <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                             </div>
                                                             <div class="qodef-topic-main-info">
                                                                <h5 class="qodef-topic-title"><a href="groups/creative-thinking/forum/topic/what-is-web-design.html">What is Web Design</a></h5>
                                                                <div class="qodef-topic-author-info-holder">
                                                                   <div class="qodef-topic-author-avatar">
                                                                      <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                                   </div>
                                                                   <div class="qodef-topic-author-info-inner">
                                                                      <h6 class="qodef-topic-author"><span>Started by </span><a href="members/test.html">Testman</a></h6>
                                                                      <div class="qodef-topic-freshness-time"><a href="groups/creative-thinking/forum/topic/what-is-web-design.html" title="">2 years, 4 months ago</a></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="qodef-topic-reply-count"><span>Replies</span>1</div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-topic-author-avatar">
                                                                <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                             </div>
                                                             <div class="qodef-topic-main-info">
                                                                <h5 class="qodef-topic-title"><a href="forums/topic/lorem-ipsum-dolor-sit-amet.html">Lorem ipsum dolor sit amet</a></h5>
                                                                <div class="qodef-topic-author-info-holder">
                                                                   <div class="qodef-topic-author-avatar">
                                                                      <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                                   </div>
                                                                   <div class="qodef-topic-author-info-inner">
                                                                      <h6 class="qodef-topic-author"><span>Started by </span><a href="members/test.html">Testman</a></h6>
                                                                      <div class="qodef-topic-freshness-time"><a href="forums/topic/lorem-ipsum-dolor-sit-amet.html#post-5603" title="Reply To: Lorem ipsum dolor sit amet">2 years, 5 months ago</a></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="qodef-topic-reply-count"><span>Replies</span>2</div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-topic-author-avatar">
                                                                <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                             </div>
                                                             <div class="qodef-topic-main-info">
                                                                <h5 class="qodef-topic-title"><a href="forums/topic/testing-the-posting.html">Testing the Posting</a></h5>
                                                                <div class="qodef-topic-author-info-holder">
                                                                   <div class="qodef-topic-author-avatar">
                                                                      <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                                   </div>
                                                                   <div class="qodef-topic-author-info-inner">
                                                                      <h6 class="qodef-topic-author"><span>Started by </span><a href="members/test.html">Testman</a></h6>
                                                                      <div class="qodef-topic-freshness-time"><a href="forums/topic/testing-the-posting.html#post-5616" title="Reply To: Testing the Posting">2 years, 4 months ago</a></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="qodef-topic-reply-count"><span>Replies</span>4</div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e qodef-grid-item">
                                                          <div class="qodef-e-item-holder">
                                                             <div class="qodef-topic-author-avatar">
                                                                <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                             </div>
                                                             <div class="qodef-topic-main-info">
                                                                <h5 class="qodef-topic-title"><a href="forums/topic/teste-hotel-reception.html">Teste hotel reception</a></h5>
                                                                <div class="qodef-topic-author-info-holder">
                                                                   <div class="qodef-topic-author-avatar">
                                                                      <a href="members/test.html"><img alt='' src='{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png' srcset='wp-content/uploads/avatars/43/1663783478-bpthumb.png 2x' class='avatar avatar-60 photo' height='60' width='60' /></a>
                                                                   </div>
                                                                   <div class="qodef-topic-author-info-inner">
                                                                      <h6 class="qodef-topic-author"><span>Started by </span><a href="members/test.html">Testman</a></h6>
                                                                      <div class="qodef-topic-freshness-time"><a href="forums/topic/teste-hotel-reception.html#post-5565" title="Reply To: Teste hotel reception">2 years, 6 months ago</a></div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                             <div class="qodef-topic-reply-count"><span>Replies</span>2</div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-783d0ae elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="783d0ae" data-element_type="section">
                                              <div class="elementor-container elementor-column-gap-default">
                                                 <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-60301bc" data-id="60301bc" data-element_type="column">
                                                       <div class="elementor-column-wrap elementor-element-populated">
                                                          <div class="elementor-widget-wrap">
                                                             <div class="elementor-element elementor-element-25a29bd elementor-widget elementor-widget-joinup_core_button" data-id="25a29bd" data-element_type="widget" data-widget_type="joinup_core_button.default">
                                                                <div class="elementor-widget-container">
                                                                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link" href="forums/forum/web-designer-forum-news.html" target="_self"  >
                                                                   <span class="qodef-m-text">View all</span>
                                                                   </a>		
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
                         </section>
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-220de108 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="220de108" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-484a6e90" data-id="484a6e90" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-23af5e1f elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_section_title" data-id="23af5e1f" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left ">
                                                    <h2 class="qodef-m-title" >
                                                       Join Up App available for your smartphone			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 36px;color: #040A17">Doctus deleniti mediocritatem ei eos, has ut sanctus qui labor ponderum. Vim ad prima erant deseruisse. Mel deo salutandis intellegat cu. Option prompta mediocrem.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-2a71f5ae elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-joinup_core_separator" data-id="2a71f5ae" data-element_type="widget" data-widget_type="joinup_core_separator.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                                    <div class="qodef-m-line" ></div>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-11697076 elementor-widget elementor-widget-text-editor" data-id="11697076" data-element_type="widget" data-widget_type="text-editor.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-text-editor elementor-clearfix">
                                                    <h5>Download now!</h5>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-584f7634 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="584f7634" data-element_type="widget" data-widget_type="image.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-image">
                                                    <a href="https://www.apple.com/app-store/?_ga=2.232137496.606444435.1611655978-1819961195.1611655978" target="_blank">
                                                    <img width="188" height="58" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-img-5.png" class="attachment-full size-full" alt="aa" loading="eager" />								</a>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-781027ea elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="781027ea" data-element_type="widget" data-widget_type="image.default">
                                              <div class="elementor-widget-container">
                                                 <div class="elementor-image">
                                                    <a href="https://play.google.com/store/apps?_ga=2.232137496.606444435.1611655978-1819961195.1611655978" target="_blank">
                                                    <img width="188" height="58" src="{{asset('frontend')}}/wp-content/uploads/2020/10/h2-img-6.png" class="attachment-full size-full" alt="aa" loading="eager" />								</a>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-17c5032f" data-id="17c5032f" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-37f91907 elementor-widget elementor-widget-slider_revolution" data-id="37f91907" data-element_type="widget" data-widget_type="slider_revolution.default">
                                              <div class="elementor-widget-container">
                                                 <div class="wp-block-themepunch-revslider">
                                                    <!-- START OnlineCommunitybottom REVOLUTION SLIDER 6.6.5 -->
                                                    <p class="rs-p-wp-fix"></p>
                                                    <rs-module-wrap id="rev_slider_10_4_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                       <rs-module id="rev_slider_10_4" style="" data-version="6.6.5">
                                                          <rs-slides style="overflow: hidden; position: absolute;">
                                                             <rs-slide style="position: absolute;" data-key="rs-13" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                                                                <img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Online Community" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-1" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:192px,151px,-249px,-209px;y:m;yo:-38px,-18px,-16px,-16px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:1146px,821px,935px,522px;h:816px,585px,666px,372px;"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_1="sp:1000;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:8;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="1123" height="800" data-lazyload="wp-content/uploads/2020/11/h2-img-1.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-2" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:-136px,-91px,401px,166px;y:m;yo:227px,159px,227px,136px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:180px,137px,150px,85px;h:241px,184px,201px,114px;"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:50;"
                                                                   data-frame_1="st:400;sp:1100;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:12;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="180" height="241" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-25.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-3" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:43px,42px,-58px,-99px;y:m;yo:-27px,-27px,12px,8px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:926px,686px,772px,446px;h:926px,686px,772px,446px;"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_1="st:100;sp:1100;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:9;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="919" height="919" data-lazyload="wp-content/uploads/2020/12/h1-rev-img26.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-4" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:268px,220px,-4px,447px;y:m;yo:86px,49px,106px,-18px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:369px,282px,312px,185px;h:525px,401px,455px,270px;"
                                                                   data-vbility="t,t,t,f"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:50;"
                                                                   data-frame_1="st:200;sp:900;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:13;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="378" height="538" data-lazyload="wp-content/uploads/2020/12/h2-rev-img-40.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-5" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:-286px,-204px,595px,256px;y:m;yo:-203px,-162px,-135px,-95px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:76px,56px,65px,33px;h:102px,75px,87px,44px;"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:50;"
                                                                   data-frame_1="st:450;sp:1150;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:11;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="76" height="102" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-23.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-6" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:-210px,-142px,530px,225px;y:m;yo:-113px,-94px,-49px,-52px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:87px,66px,74px,40px;h:96px,73px,82px,44px;"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_0="y:50;"
                                                                   data-frame_1="st:400;sp:1100;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:10;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="87" height="96" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-24.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->
                                                                <rs-layer
                                                                   id="slider-10-slide-13-layer-7" 
                                                                   data-type="image"
                                                                   data-xy="x:c,c,r,r;xo:366px,284px,-1px,422px;y:m;yo:-224px,-185px,-173px,-173px;"
                                                                   data-text="w:normal;"
                                                                   data-dim="w:125px,103px,134px,88px;h:95px,78px,102px,67px;"
                                                                   data-vbility="t,t,t,f"
                                                                   data-rsp_o="off"
                                                                   data-rsp_bd="off"
                                                                   data-frame_1="e:power4.inOut;st:250;sp:950;"
                                                                   data-frame_999="o:0;st:w;"
                                                                   style="z-index:14;"
                                                                   ><img src="{{asset('frontend')}}/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="jj" class="tp-rs-img rs-lazyload" width="125" height="95" data-lazyload="wp-content/uploads/2020/11/h1-rev-img-22.png" data-no-retina> 
                                                                </rs-layer>
                                                                <!--
                                                                   -->						
                                                             </rs-slide>
                                                          </rs-slides>
                                                       </rs-module>
                                                       <script>
                                                          setREVStartSize({c: 'rev_slider_10_4',rl:[1920,1700,1100,680],el:[850,600,660,450],gw:[760,630,760,380],gh:[850,600,660,450],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider104"]!==undefined) {window.RS_MODULES.modules["revslider104"].once = false;window.revapi10 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
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
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-9b8aa13 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="9b8aa13" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9df9285" data-id="9df9285" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-9fe6101 elementor-widget elementor-widget-joinup_core_section_title" data-id="9fe6101" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center ">
                                                    <h2 class="qodef-m-title" >
                                                       Discover internal events			
                                                    </h2>
                                                    <p class="qodef-m-text" style="margin-top: 15px;color: #040A17">Find diferent topics every day</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="elementor-element elementor-element-437f033 elementor-widget elementor-widget-joinup_core_tribe_events_list" data-id="437f033" data-element_type="widget" data-widget_type="joinup_core_tribe_events_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-tribe-events-list qodef-grid qodef-layout--columns  qodef-gutter--large qodef-col-num--3  qodef-responsive--custom qodef-col-num--1440--3 qodef-col-num--1366--3 qodef-col-num--1024--1 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1">
                                                    <div class="qodef-grid-inner clear">
                                                       <p class="qodef-m-posts-not-found qodef-grid-item">No posts were found for provided query parameters.</p>
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