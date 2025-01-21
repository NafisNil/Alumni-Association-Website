@extends('frontend.layouts.master')
@section('title')
BAUET Alumni CSE -  {{ $news_single->title }}
@endsection
@section('content')
<div id="qodef-page-outer" style="margin-top: 1px">
    <div class="qodef-page-title qodef-m qodef-title--breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
       <div class="qodef-m-inner">
          <div class="qodef-m-content qodef-content-grid ">
             <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="https://joinup.qodeinteractive.com/"><span itemprop="title">Home</span></a><span itemprop="title" class="qodef-breadcrumbs-current">{{$news_single->title}}</span></div>
          </div>
       </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid">
       <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
          <div class="qodef-grid-inner clear">
             <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                <div class="qodef-blog qodef-m qodef--single">
                   <article class="qodef-blog-item qodef-e post-691 post type-post status-publish format-standard has-post-thumbnail hentry category-art-and-love tag-business tag-creative tag-design tag-tutorials">
                      <div class="qodef-e-inner">
                         <div class="qodef-e-media">
                            <div class="qodef-e-media-image">
                               <img width="1300" height="580" src="{{(!empty($news_single->photo))?URL::to('storage/'.$news_single->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full wp-post-image" alt="{{$news_single->title}}"  sizes="(max-width: 1300px) 100vw, 1300px" loading="eager" />					
                            </div>
                         </div>
                         <div class="qodef-e-content-holder">
                            <div class="qodef-e-inner-left">
                               <div class="qodef-e-author-info">
                    
                               </div>
         
                            </div>
                            <div class="qodef-e-inner-right">
                               <div class="qodef-e-content">
                                  <div class="qodef-e-info qodef-info--top">
                                     <div itemprop="dateCreated" class="qodef-e-info-item qodef-e-info-date entry-date published updated">
                                        <a itemprop="url" href="https://joinup.qodeinteractive.com/2020/11/">{{$news_single->created_at->format('d M, Y')}}</a>
                                        <meta itemprop="interactionCount" content="UserComments: 5"/>
                                     </div>
           
                                  </div>
                                  <div class="qodef-e-text">
                                     <h2 itemprop="name" class="qodef-e-title entry-title">
                                        {{$news_single->title}}
                                     </h2>
                                     <div data-elementor-type="wp-post" data-elementor-id="691" class="elementor elementor-691">
                                        <div class="elementor-inner">
                                           <div class="elementor-section-wrap">
                                              <section class="elementor-section elementor-top-section elementor-element elementor-element-318fdb2 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="318fdb2" data-element_type="section">
                                                 <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d2e6ca8" data-id="d2e6ca8" data-element_type="column">
                                                          <div class="elementor-column-wrap elementor-element-populated">
                                                             <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4aa7b22 elementor-widget elementor-widget-text-editor" data-id="4aa7b22" data-element_type="widget" data-widget_type="text-editor.default">
                                                                   <div class="elementor-widget-container">
                                                                      <div class="elementor-text-editor elementor-clearfix">
                                                                         <p><span style="color: #777b81;">{!!  $news_single->description  !!}</span></p>
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
            
                            </div>
                         </div>
                      </div>
                   </article>

                </div>
             </div>
          </div>
       </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
 </div>
@endsection