@extends('frontend.layouts.master')
@section('title')
    All Stories - BAUET CSE Alumni
@endsection
@section('content')

@php
$prefix = Request::route()->getPrefix();
$route = Request::route()->getName();
@endphp
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
              <span itemprop="title" class="qodef-breadcrumbs-current">Stories</span>
            </div>
          </div>
        </div>
        <div class="qodef-m-content qodef-content-grid ">
          <h2 class="qodef-m-title entry-title"> Stories </h2>
          <p class="qodef-m-subtitle">Journeys of Success and Inspiration from Our Alumni.</p>
        </div>
      </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid">
      <main class="qodef-grid qodef-layout--template ">
        <div class="qodef-grid-inner clear">
          <div class="qodef-grid-item qodef-page-content-section qodef-col--9">
            <div id="bbpress-forums">
              <div class="qodef-bbp-topic-head">
                <div class="bbp-breadcrumb">
                  <p>
                    <a href="https://joinup.qodeinteractive.com" class="bbp-breadcrumb-home">Main Home</a>
                    <span class="bbp-breadcrumb-sep">&rsaquo;</span>
                    <a href="https://joinup.qodeinteractive.com/forums/" class="bbp-breadcrumb-root">Forums</a>
                    <span class="bbp-breadcrumb-sep">&rsaquo;</span>
                    <a href="https://joinup.qodeinteractive.com/forums/forum/web-designer-forum-news/" class="bbp-breadcrumb-forum">Web Designer News</a>
                    <span class="bbp-breadcrumb-sep">&rsaquo;</span>
               
                  </p>
                </div>
                <div class="bbp-template-notice info">
                  <ul>
                    <li class="bbp-topic-description"><b>{{$storyCount}}  </b>Active users 
                      
                     @if ($route == 'stories_by_batch')
                         of  <b> {{@$stories_all['0']->user_info->batch_name->name}} batch's </b>
                     @else
                         of <b>all batches</b> 
                     @endif
                      have posted their own stories.
                  
                      
                      </a>. </li>
                  </ul>
                </div>
              </div>
              <ul id="topic-48-replies" class="forums bbp-replies">
                <li class="bbp-header">
                  <div class="bbp-reply-author">Author</div>
                  <!-- .bbp-reply-author -->
                  <div class="bbp-reply-content">
                    <span class="youzify-single-topic-lead-title">Posts</span>
                  </div>
                  <!-- .bbp-reply-content -->
                </li>
                <!-- .bbp-header -->
                <li class="bbp-body">
                  @foreach ($stories_all as $item)
    
                  <div class="loop-item-0 user-id-2 bbp-parent-forum-46 bbp-parent-topic-46 bbp-reply-position-1 odd  post-48 topic type-topic status-publish hentry topic-tag-hotel">
                    <div class="qodef-bbp-reply">
                      <div class="qodef-bbp-reply-author">
                        <a href="https://joinup.qodeinteractive.com/members/anthony-clark/" title="View Anthony Clark&#039;s profile" class="bbp-author-link">
                          <span class="bbp-author-avatar">
                            <img alt='' src='{{(!empty($item->user_info->photo))?URL::to('storage/'.$item->user_info->photo):URL::to('image/no_image.png')}}'  class='avatar avatar-80 photo' height='80' width='80' />
                          </span>
                          
                        </a>
                        <div class="qodef-bbp-reply-info">
                        
                          <span class="qodef-bbp-reply-post-date">
                          <b> {{$item->user_info->name}} </b> <br>
                            {{@$item->updated_at->format('H:i A- d M,Y')}}</span>
                        </div>
                      </div>
                      <!-- .bbp-reply-author -->
                      <div class="qodef-bbp-reply-content">
                        <p>{!! Str::limit(@$item->desc, 100) !!} ...</p>
                      </div>
                      <!-- .bbp-reply-content -->
                      <div id="post-48" class="qodef-bbp-reply-links">
                        <div class="bbp-meta">
                          <span class="bbp-admin-links"></span>
                        </div>
                        <!-- .bbp-meta -->
                      </div>
                      <!-- #post-48 -->
                    </div>
                  </div>
                  @endforeach

             
       
                </li>
                <!-- .bbp-body -->
                <li class="bbp-footer">
                  <div class="bbp-reply-author">Author</div>
                  <div class="bbp-reply-content"> Posts </div>
                  <!-- .bbp-reply-content -->
                </li>
                <!-- .bbp-footer -->
              </ul>
              <!-- #topic-48-replies -->
              <div class="bbp-pagination">
               
                <div class="bbp-pagination-links">
                      {{$stories_all->links()}}
                </div>
              </div>

            </div>
          </div>
          <div class="qodef-grid-item qodef-page-sidebar-section qodef-col--3">
            <aside id="qodef-page-sidebar">
    
              <div id="joinup_core_post_categories-3" class="widget widget_joinup_core_post_categories" data-area="main-sidebar">
                <h5 class="qodef-widget-title">Batches</h5>
                <div class="qodef-shortcode qodef-m  qodef-post-categories">
                  <ul>
                    @foreach ($batches as $item)
                    <li class="qodef-cat-item">
                        <a href="{{route('stories_by_batch', $item->name)}}">{{$item->name}}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div id="joinup_core_separator-8" class="widget widget_joinup_core_separator" data-area="main-sidebar">
                <div class="qodef-shortcode qodef-m  qodef-separator clear qodef-position--center">
                  <div class="qodef-m-line" style="border-style: solid;width: 0px;border-bottom-width: 0px;margin-top: 17px;margin-bottom: 0px"></div>
                </div>
              </div>
   
              <div id="joinup_core_separator-9" class="widget widget_joinup_core_separator" data-area="main-sidebar">
                <div class="qodef-shortcode qodef-m  qodef-separator clear qodef-position--center">
                  <div class="qodef-m-line" style="border-style: solid;width: 0px;border-bottom-width: 0px;margin-top: 19px;margin-bottom: 0px"></div>
                </div>
              </div>

              <div id="joinup_core_separator-11" class="widget widget_joinup_core_separator" data-area="main-sidebar">
                <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                  <div class="qodef-m-line" style="border-bottom-width: 0px;margin-top: 20px;margin-bottom: 0px"></div>
                </div>
              </div>


            </aside>
          </div>
        </div>
      </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
  </div>
@endsection