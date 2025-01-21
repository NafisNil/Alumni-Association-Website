@extends('frontend.layouts.master')
@section('title')
    Notice - BAUET Alumni CSE
@endsection
@section('content')
<div id="qodef-page-outer" style="margin-top: 1px">
    <div class="qodef-page-title qodef-m qodef-title--breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
       <div class="qodef-m-inner">
          <div class="qodef-m-content qodef-content-grid ">
             <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="{{route('index')}}"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">All Notice</span></div>
          </div>
       </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid" >
       <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
          <div class="qodef-grid-inner clear">
             <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                <div data-elementor-type="wp-page" data-elementor-id="583" class="elementor elementor-583">
                   <div class="elementor-inner">
                      <div class="elementor-section-wrap">
                         <section class="elementor-section elementor-top-section elementor-element elementor-element-7e5e49e elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="7e5e49e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                               <div class="elementor-row">
                                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d2d9cf6" data-id="d2d9cf6" data-element_type="column">
                                     <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                           <div class="elementor-element elementor-element-834e0c5 elementor-widget elementor-widget-joinup_core_blog_list" data-id="834e0c5" data-element_type="widget" data-widget_type="joinup_core_blog_list.default">
                                              <div class="elementor-widget-container">
                                                 <div class="qodef-shortcode qodef-m  qodef-blog qodef--list qodef-item-layout--standard qodef-grid qodef-layout--columns  qodef-gutter--medium qodef-col-num--1 qodef-item-layout--standard qodef-pagination--on qodef-pagination-type--standard qodef-responsive--predefined" data-options="{&quot;plugin&quot;:&quot;joinup_core&quot;,&quot;module&quot;:&quot;blog\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:3,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;space&quot;:&quot;medium&quot;,&quot;posts_per_page&quot;:&quot;7&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;post_tag&quot;,&quot;tax_slug&quot;:&quot;design&quot;,&quot;layout&quot;:&quot;standard&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;pagination_type&quot;:&quot;standard&quot;,&quot;object_class_name&quot;:&quot;JoinUpCoreBlogListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;post_tag&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;design&quot;}]},&quot;space_value&quot;:20}">
                                                    <div class="qodef-grid-inner clear">

                                                        @foreach ($notice_all as $item)
                                                        <article class="qodef-e qodef-blog-item qodef-grid-item qodef-item--full post-538 post type-post status-publish format-audio has-post-thumbnail hentry category-holidays-and-travel tag-business tag-creative tag-design tag-tutorials post_format-post-format-audio">
                                                            <div class="qodef-e-inner">
                                                               <div class="qodef-e-media">
                                                                  <div class="qodef-e-media-image">
                                                                     <a itemprop="url" href="{{route('notice_single', $item->slug)}}">
                                                                     <img width="1300" height="580" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full wp-post-image" alt="{{$item->title}}"  sizes="(max-width: 1300px) 100vw, 1300px" loading="eager" />		</a>
                                                                  </div>
                                                      
                                                               </div>
                                                               <div class="qodef-e-content">
                                                                  <div class="qodef-e-info qodef-info--top">
                                                                     <div itemprop="dateCreated" class="qodef-e-info-item qodef-e-info-date entry-date published updated">
                                                                        <a itemprop="url" href="#">{{$item->created_at->format('d M, Y')}}</a>
                                                                        <meta itemprop="interactionCount" content="UserComments: 1"/>
                                                                     </div>
                                                          
                                                                  </div>
                                                                  <div class="qodef-e-text">
                                                                     <h3 itemprop="name" class="qodef-e-title entry-title">
                                                                        <a itemprop="url" class="qodef-e-title-link" href="{{route('notice_single', $item->slug)}}">
                                                                        {{$item->title}}		</a>
                                                                     </h3>
                                                                     <p itemprop="description" class="qodef-e-excerpt">
                                                                        {!!  Str::limit($item->description, 400) !!} ...
                                                                     </p>
                                                                  </div>
                                                
                                                               </div>
                                                            </div>
                                                         </article>
                                                        @endforeach

                                                    </div>
                                                    <div class="qodef-m-pagination qodef--standard">
                                                       <div class="qodef-m-pagination-inner">
                                                          <nav class="qodef-m-pagination-items" role="navigation">
                                                             {{ $notice_all->links() }}
                                                          </nav>
                                                       </div>
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