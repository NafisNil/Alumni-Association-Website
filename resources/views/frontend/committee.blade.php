@extends('frontend.layouts.master')
@section('title')
    Committee Members - BAUET Alumni CSE
@endsection
@section('content')
<section style="margin-top:180px;margin-bottom:20px" class="elementor-section elementor-top-section elementor-element elementor-element-096281e elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="096281e" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b456873" data-id="b456873" data-element_type="column">
          <div class="elementor-column-wrap elementor-element-populated">
            <div class="elementor-widget-wrap">
              <div class="elementor-element elementor-element-acd3c4c elementor-widget elementor-widget-joinup_core_section_title" data-id="acd3c4c" data-element_type="widget" data-widget_type="joinup_core_section_title.default">
                <div class="elementor-widget-container">
                  <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center ">
                    <h2 class="qodef-m-title"> Our Committee Members </h2>
                    <p class="qodef-m-text" style="margin-top: 17px">Meet the Dedicated Team Driving Our Mission Forward.</p>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-9cbbd4e elementor-widget elementor-widget-joinup_core_team_list" data-id="9cbbd4e" data-element_type="widget" data-widget_type="joinup_core_team_list.default">
                <div class="elementor-widget-container">
                  <div class="qodef-shortcode qodef-m  qodef-team-list qodef-item-layout--info-below qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--4 qodef-item-layout--info-below qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--4 qodef-col-num--1366--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;joinup_core&quot;,&quot;module&quot;:&quot;post-types\/team\/shortcodes&quot;,&quot;shortcode&quot;:&quot;team-list&quot;,&quot;post_type&quot;:&quot;team&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;4&quot;,&quot;columns_1366&quot;:&quot;4&quot;,&quot;columns_1024&quot;:&quot;2&quot;,&quot;columns_768&quot;:&quot;2&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;normal&quot;,&quot;posts_per_page&quot;:&quot;8&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;object_class_name&quot;:&quot;JoinUpCoreTeamListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;team-category&quot;,&quot;item_classes&quot;:&quot;qodef-e qodef-grid-item&quot;,&quot;space_value&quot;:15}">
                    <div class="qodef-grid-inner clear">
                        @foreach ($committee as $item)
                        <div class="qodef-e qodef-grid-item post-987 team type-team status-publish has-post-thumbnail hentry">
                            <div class="qodef-e-inner">
                              <div class="qodef-e-image">
                                <div class="qodef-e-media-image">
                                  <img width="800" height="800" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full wp-post-image" alt="{{@$item->name}}"  sizes="(max-width: 800px) 100vw, 800px" loading="eager" />
                                </div>
                              </div>
                              <div class="qodef-e-content">
                                <a href="{{route('committee_member_by_name', $item->slug)}}">
                                        <h5 itemprop="name" class="qodef-e-title entry-title"> {{$item->name}} </h5>
                                        <p class="qodef-e-role"> {{$item->designation}} </p>
                               </a>
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
@endsection