<footer id="qodef-page-footer">
   <div id="qodef-page-footer-top-area">
     <div id="qodef-page-footer-top-area-inner" class="qodef-content-grid">
       <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1">
         <div class="qodef-grid-inner clear">
           <div class="qodef-grid-item">
             <div id="text-2" class="widget widget_text" data-area="footer_top_area_column_1">
               <h4 class="qodef-widget-title">About us</h4>
               <div class="textwidget">
                 <p>{!!  $about->short_about !!}</p>
               </div>
             </div>
             <div id="bp_core_recently_active_widget-2" class="widget widget_bp_core_recently_active_widget buddypress widget" data-area="footer_top_area_column_1">
             
               <h4 class="qodef-widget-title">Active Members</h4>
             

               <div class="avatar-block">
                @foreach ($socials as $item)
                 <div class="item-avatar">
                   <a href="{{$item->url}}" class="bp-tooltip" data-bp-tooltip="{{$item->name}}
                                                                                                                                                                                                                            <i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i>">
                     <img loading="lazy" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="avatar user-1-avatar avatar-150 photo" width="150" height="94" alt="{{$item->name}}"  />
                   </a>
                 </div>
                 @endforeach
    
         
               </div>
             </div>
           </div>
           <div class="qodef-grid-item">
             <div id="joinup_core_activity_feed-2" class="widget widget_joinup_core_activity_feed" data-area="footer_top_area_column_2">
               <h4 class="qodef-widget-title">Activity feed</h4>
               <div class="qodef-activity-feed-widget">
                 <div class="qodef-activity-feed-holder-inner">
                   <ul class="qodef-activity-items-list">
                    @foreach ($event as $item)
                    <li class="qodef-activity-item">
                      <p>
                        <a href="{{route('event_single', $item->slug)}}">{{$item->title}}</a>
                      </p>
                    </li>
                    @endforeach

     
                   </ul>
                 </div>
               </div>
             </div>
           </div>
           <div class="qodef-grid-item">
             <div id="joinup_core_post_categories-2" class="widget widget_joinup_core_post_categories" data-area="footer_top_area_column_3">
               <h4 class="qodef-widget-title">Quick Links</h4>
               <div class="qodef-shortcode qodef-m  qodef-post-categories">
                 <ul>
              
                  <li class="qodef-cat-item">
                    <a href="https://bauet.ac.bd">BAUET Website</a>
                  </li>
                  <li class="qodef-cat-item">
                    <a href="https://bauet.ac.bd/cse/">BAUET CSE</a>
                  </li>
                  <li class="qodef-cat-item">
                    <a href="https://ugc.gov.bd/">UGV</a>
                  </li>
                  <li class="qodef-cat-item">
                    <a href="https://www.royal.uk/"><b>God Save The King!</b></a>
                  </li>
       


                 </ul>
               </div>
             </div>
           </div>
           <div class="qodef-grid-item">
             <div class="widget qodef-friend-suggestions-logged-out">
               <h4 class="qodef-widget-title">Welcome to Join Up</h4>
               <div class="qodef-shortcode qodef-m  qodef-advanced-call-to-action">
                 <div class="qodef-m-image">
                   <img width="800" height="534" src="{{(!empty($logo->photo))?URL::to('storage/'.$logo->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full" alt="BAUET Alumni CSE"  loading="eager" />
                 </div>
                 <h5 class="qodef-m-title">Sign Up to BAUET CSE Alumni</h5>
        
                 <div class="qodef-m-button">
                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled qodef-size--small qodef-html--link" href="{{route('member_registration')}}" target="_self">
                     <span class="qodef-m-text">Register Now</span>
                   </a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div id="qodef-page-footer-bottom-area">
     <div id="qodef-page-footer-bottom-area-inner" class="qodef-content-grid">
       <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--680--1 qodef-col-num--480--1">
         <div class="qodef-grid-inner clear">
           <div class="qodef-grid-item">
             <div id="text-4" class="widget widget_text" data-area="footer_bottom_area_column_1">
               <div class="textwidget">
                 <p>
                   <a href="#" target="_blank" rel="nofollow noopener">© {{Carbon\Carbon::now()->year}} BAUET CSE Alumni</a>, All Rights Reserved.
                 </p>
               </div>
             </div>
           </div>
           {{-- <div class="qodef-grid-item">
             <div id="text-12" class="widget widget_text" data-area="footer_bottom_area_column_2">
               <div class="textwidget">
                 <p>Images downloaded from <a href="https://icons8.com/" target="_blank" rel="noopener">icons8.com</a>. </p>
               </div>
             </div>
           </div> --}}
         </div>
       </div>
     </div>
   </div>
 </footer>