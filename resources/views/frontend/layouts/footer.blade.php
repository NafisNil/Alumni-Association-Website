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
                 <div class="item-avatar">
                   <a href="members/admin.html" class="bp-tooltip" data-bp-tooltip="admin
                                                                                                                                                                                                                                        <i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i>">
                     <img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/2021/02/user-default-profile-img.jpg" class="avatar user-1-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of admin" />
                   </a>
                 </div>
                 <div class="item-avatar">
                   <a href="members/test.html" class="bp-tooltip" data-bp-tooltip="Testman">
                     <img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/43/1663783478-bpthumb.png" class="avatar user-43-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Testman" />
                   </a>
                 </div>
                 <div class="item-avatar">
                   <a href="members/anthony-clark.html" class="bp-tooltip" data-bp-tooltip="Anthony Clark
                                                                                                                                                                                                                                        <i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i>">
                     <img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/2/5fc9ecdf13932-bpthumb.jpg" class="avatar user-2-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Anthony Clark" />
                   </a>
                 </div>
                 <div class="item-avatar">
                   <a href="members/demi-portillo.html" class="bp-tooltip" data-bp-tooltip="Demi Portillo
                                                                                                                                                                                                                                        <i class='fas fa-check youzify-account-verified youzify-small-verified-icon'></i>">
                     <img loading="lazy" src="{{asset('frontend')}}/wp-content/uploads/avatars/11/5fc9ee4b79d2c-bpthumb.jpg" class="avatar user-11-avatar avatar-150 photo" width="150" height="94" alt="Profile picture of Demi Portillo" />
                   </a>
                 </div>
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
                        <a href="members/test.html">{{$item->title}}</a>
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
               <h4 class="qodef-widget-title">Categories</h4>
               <div class="qodef-shortcode qodef-m  qodef-post-categories">
                 <ul>
                   <li class="qodef-cat-item">
                     <a href="category/art-and-love.html">Art & Love</a>
                   </li>
                   <li class="qodef-cat-item">
                     <a href="category/design.html">Design</a>
                   </li>
                   <li class="qodef-cat-item">
                     <a href="category/forum.html">Forum</a>
                   </li>
                   <li class="qodef-cat-item">
                     <a href="category/general-chat.html">General Chat</a>
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
                   <img width="800" height="534" src="{{asset('frontend')}}/wp-content/uploads/2021/01/footer-register.png" class="attachment-full size-full" alt="aa" srcset="wp-content/uploads/2021/01/footer-register.png 800w, wp-content/uploads/2021/01/footer-register-300x200.png 300w, wp-content/uploads/2021/01/footer-register-768x513.png 768w, wp-content/uploads/2021/01/footer-register-600x401.png 600w" sizes="(max-width: 800px) 100vw, 800px" loading="eager" />
                 </div>
                 <h5 class="qodef-m-title">Sign Up to Join Up</h5>
                 <h6 class="qodef-m-subtitle">Your New Social Network</h6>
                 <div class="qodef-m-button">
                   <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled qodef-size--small qodef-html--link" href="register.html" target="_self">
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
                   <a href="https://qodeinteractive.com/" target="_blank" rel="nofollow noopener">© 2021 Qode Interactive</a>, All Rights Reserved.
                 </p>
               </div>
             </div>
           </div>
           <div class="qodef-grid-item">
             <div id="text-12" class="widget widget_text" data-area="footer_bottom_area_column_2">
               <div class="textwidget">
                 <p>Images downloaded from <a href="https://icons8.com/" target="_blank" rel="noopener">icons8.com</a>. </p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </footer>