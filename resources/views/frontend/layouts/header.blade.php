<header id="qodef-page-header">
   <div id="qodef-page-header-inner" class="qodef-content-grid">
     <a itemprop="url" class="qodef-header-logo-link qodef-height--not-set" href="{{route('index')}}" rel="home">
       <img width="224" height="94" src="{{(!empty($logo->photo))?URL::to('storage/'.$logo->photo):URL::to('image/no_image.png')}}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />

     </a>
     <nav class="qodef-header-navigation" role="navigation" aria-label="Top Menu">
       <ul id="menu-main-menu-1" class="menu">
         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-90 ">
           <a href="{{route('index')}}">
             <span class="qodef-menu-item-text">Home</span>
           </a>

         </li>

         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-92 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">About </span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-936">
                   <a href="{{route('about_us')}}"">
                     <span class="qodef-menu-item-text">About Us</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1166">
                   <a href="{{route('committee_member')}}">
                     <span class="qodef-menu-item-text">Committee </span>
                   </a>
                 </li>

               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93 ">
           <a href="{{route('event_all')}}">
             <span class="qodef-menu-item-text">Events</span>
           </a>

         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-94 ">
           <a href="{{route('news_all')}}">
             <span class="qodef-menu-item-text">News</span>
           </a>
   
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 ">
           <a href="{{route('notice_all')}}">
             <span class="qodef-menu-item-text">Notice</span>
           </a>

         </li>
       </ul>
     </nav>

   </div>
 </header>
 <header id="qodef-page-mobile-header">
   <div id="qodef-page-mobile-header-inner">
     <a itemprop="url" class="qodef-mobile-header-logo-link" href="index.html" style="height:47px" rel="home">
       <img width="224" height="94" src="{{asset('frontend')}}/wp-content/uploads/2021/01/logo-mobile-img-6.png" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
     </a>
     <div class="qodef-widget-holder qodef--one">
       <div id="joinup_core_login_opener-3" class="widget widget_joinup_core_login_opener qodef-mobile-header-widget-area-one" data-area="mobile-header">
         <div class="qodef-login-opener-widget">
           <a class="qodef-login-opener qodef-login" data-show-youzify-login="true" href="">
             <span class="qodef-icon-kiko kiko-user kikol"></span>
             <span class="qodef-login-opener-text">Login</span>
           </a>
           <a href="{{route('member_registration')}}" class="qodef-login-opener qodef-register" ">
             <span class="qodef-icon-kiko kiko-lock kikol"></span>
             <span class="qodef-login-opener-text">Register</span>
           </a>
         </div>
       </div>
     </div>
     <a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--icon-pack qodef-mobile-header-opener">
       <span class="qodef-m-icon qodef--open">
         <span class="qodef-icon-kiko kiko-hamburger-menu kikol"></span>
       </span>
       <span class="qodef-m-icon qodef--close">
         <span class="qodef-icon-kiko kiko-cross-line kikol"></span>
       </span>
     </a>
     <nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
       <ul id="menu-mobile-menu-1" class="qodef-content-grid">
         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3534 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">Home</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-134 current_page_item menu-item-3536">
                   <a href="index.html">
                     <span class="qodef-menu-item-text">Main Home</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3537">
                   <a href="online-community.html">
                     <span class="qodef-menu-item-text">Online Community</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3538">
                   <a href="social-network.html">
                     <span class="qodef-menu-item-text">Social Network</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3596">
                   <a href="landing.html">
                     <span class="qodef-menu-item-text">Landing</span>
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3540 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">About</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3541">
                   <a href="#">
                     <span class="qodef-menu-item-text">About Us</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3542">
                       <a href="global-newsfeed.html">
                         <span class="qodef-menu-item-text">Global Newsfeed</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3543">
                       <a href="members.html">
                         <span class="qodef-menu-item-text">Members Directory</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3544">
                       <a href="groups.html">
                         <span class="qodef-menu-item-text">Groups Directory</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3545">
                       <a href="groups/creative-thinking.html">
                         <span class="qodef-menu-item-text">Group Profile</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546">
                       <a href="community-badges.html">
                         <span class="qodef-menu-item-text">Community Badges</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3547">
                       <a href="{{route('member_registration')}}">
                         <span class="qodef-menu-item-text">Registration</span>
                       </a>
                     </li>
                   </ul>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3548">
                   <a href="#">
                     <span class="qodef-menu-item-text">Profile pages</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3549">
                       <a href="members/anthony-clark.html">
                         <span class="qodef-menu-item-text">User Profile</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3550">
                       <a href="members/anthony-clark/info.html">
                         <span class="qodef-menu-item-text">About User</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3551">
                       <a href="members/anthony-clark/friends.html">
                         <span class="qodef-menu-item-text">User’s Friends</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3552">
                       <a href="members/anthony-clark/groups.html">
                         <span class="qodef-menu-item-text">User’s Groups</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3553">
                       <a href="members/anthony-clark/media.html">
                         <span class="qodef-menu-item-text">User’s Photos</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3554">
                       <a href="members/anthony-clark/reviews.html">
                         <span class="qodef-menu-item-text">User’s Reviews</span>
                       </a>
                     </li>
                   </ul>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3555">
                   <a href="#">
                     <span class="qodef-menu-item-text">Forum</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-post_type_archive menu-item-object-forum menu-item-3556">
                       <a href="forums.html">
                         <span class="qodef-menu-item-text">All Forums</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-forum menu-item-3557">
                       <a href="forums/forum/web-designer-forum-news.html">
                         <span class="qodef-menu-item-text">Forum Single</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3558">
                       <a href="forums/topic/my-news.html">
                         <span class="qodef-menu-item-text">Topic Single</span>
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3560 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">Pages</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3561">
                   <a href="about-us.html">
                     <span class="qodef-menu-item-text">About Us</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3565">
                   <a href="community-reviews.html">
                     <span class="qodef-menu-item-text">Community Reviews</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3564">
                   <a href="pricing-plans.html">
                     <span class="qodef-menu-item-text">Pricing Plans</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3567">
                   <a href="privacy-policy.html">
                     <span class="qodef-menu-item-text">Privacy Policy</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3562">
                   <a href="contact.html">
                     <span class="qodef-menu-item-text">Contact</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3563">
                   <a href="faq.html">
                     <span class="qodef-menu-item-text">FAQ</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3566">
                   <a href="coming-soon.html">
                     <span class="qodef-menu-item-text">Coming Soon</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4124">
                   <a href="404-error-page.html">
                     <span class="qodef-menu-item-text">404 Error Page</span>
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3568 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">Blog</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3569">
                   <a href="right-sidebar.html">
                     <span class="qodef-menu-item-text">Blog Right Sidebar</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3570">
                   <a href="left-sidebar.html">
                     <span class="qodef-menu-item-text">Blog Left Sidebar</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3571">
                   <a href="no-sidebar.html">
                     <span class="qodef-menu-item-text">Blog No Sidebar</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3572">
                   <a href="blog-masonry.html">
                     <span class="qodef-menu-item-text">Blog Masonry</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3573">
                   <a href="#">
                     <span class="qodef-menu-item-text">Post Types</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3574">
                       <a href="how-to-have-a-job-you-love-doing.html">
                         <span class="qodef-menu-item-text">Standard</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3575">
                       <a href="1-design-mistake-you-should-avoid.html">
                         <span class="qodef-menu-item-text">Gallery</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3576">
                       <a href="free-and-usefull-online-courses.html">
                         <span class="qodef-menu-item-text">Quote</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3577">
                       <a href="learn-from-the-best-and-do-great.html">
                         <span class="qodef-menu-item-text">Link</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3578">
                       <a href="best-10-art-schools-for-your-child.html">
                         <span class="qodef-menu-item-text">Audio</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3579">
                       <a href="what-movies-to-watch-during-april.html">
                         <span class="qodef-menu-item-text">Video</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3580">
                       <a href="read-our-blog-and-master-your-designs.html">
                         <span class="qodef-menu-item-text">No Sidebar</span>
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3581 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">Events</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4912">
                   <a href="event-list.html">
                     <span class="qodef-menu-item-text">Event List</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3582">
                   <a href="events/list.html">
                     <span class="qodef-menu-item-text">Event Directory</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3583">
                   <a href="events/month.html">
                     <span class="qodef-menu-item-text">Event Calendar</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4544">
                   <a href="events/today/tribe-bar-date-2024-04-17.html">
                     <span class="qodef-menu-item-text">Event Day</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3584">
                   <a href="event/eighty-percent-of-success-is-showing-up-5.html">
                     <span class="qodef-menu-item-text">Event Single</span>
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3585 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">Shop</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3586">
                   <a href="shop.html">
                     <span class="qodef-menu-item-text">Shop List</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3587">
                   <a href="product/leila-mug.html">
                     <span class="qodef-menu-item-text">Shop Single</span>
                   </a>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3588">
                   <a href="#">
                     <span class="qodef-menu-item-text">Shop Layouts</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3589">
                       <a href="three-columns.html">
                         <span class="qodef-menu-item-text">Three Columns</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3590">
                       <a href="four-columns.html">
                         <span class="qodef-menu-item-text">Four Columns</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3591">
                       <a href="five-columns-wide.html">
                         <span class="qodef-menu-item-text">Five Columns Wide</span>
                       </a>
                     </li>
                   </ul>
                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3592">
                   <a href="#">
                     <span class="qodef-menu-item-text">Shop Pages</span>
                   </a>
                   <ul class="sub-menu">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3593">
                       <a href="my-account.html">
                         <span class="qodef-menu-item-text">My Account</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3594">
                       <a href="cart.html">
                         <span class="qodef-menu-item-text">Cart</span>
                       </a>
                     </li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3595">
                       <a href="checkout.html">
                         <span class="qodef-menu-item-text">Checkout</span>
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </li>
       </ul>
     </nav>
   </div>
 </header>