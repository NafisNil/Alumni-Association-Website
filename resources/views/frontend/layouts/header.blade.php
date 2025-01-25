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

         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 ">
          <a href="{{route('stories_all')}}">
            <span class="qodef-menu-item-text">Stories</span>
          </a>
        </li>
       </ul>
     </nav>

   </div>
 </header>
 <header id="qodef-page-mobile-header">
   <div id="qodef-page-mobile-header-inner">
     <a itemprop="url" class="qodef-mobile-header-logo-link" href="{{route('index')}}" style="height:47px" rel="home">
       <img width="224" height="94" src="{{(!empty($logo->photo))?URL::to('storage/'.$logo->photo):URL::to('image/no_image.png')}}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
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
         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-3534 qodef-menu-item--narrow">
           <a href="{{route('index')}}">
             <span class="qodef-menu-item-text">Home</span>
           </a>
   
         </li>
         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3540 qodef-menu-item--narrow">
           <a href="#">
             <span class="qodef-menu-item-text">About</span>
           </a>
           <div class="qodef-drop-down-second">
             <div class="qodef-drop-down-second-inner">
               <ul class="sub-menu">
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3541">
                   <a href="{{route('about_us')}}">
                     <span class="qodef-menu-item-text">About Us</span>
                   </a>

                 </li>
                 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3548">
                   <a href="{{route('committee_member')}}">
                     <span class="qodef-menu-item-text">Committee</span>
                   </a>
    
                 </li>
 
               </ul>
             </div>
           </div>
         </li>

         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-3534 qodef-menu-item--narrow">
          <a href="{{route('event_all')}}">
            <span class="qodef-menu-item-text">Events</span>
          </a>
  
        </li>

        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-3534 qodef-menu-item--narrow">
          <a href="{{route('news_all')}}">
            <span class="qodef-menu-item-text">News</span>
          </a>
  
        </li>

        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-3534 qodef-menu-item--narrow">
          <a href="{{route('notice_all')}}">
            <span class="qodef-menu-item-text">Notice</span>
          </a>
  
        </li>

        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-3534 qodef-menu-item--narrow">
          <a href="{{route('stories_all')}}">
            <span class="qodef-menu-item-text">Stories</span>
          </a>
  
        </li>

       </ul>
     </nav>
   </div>
 </header>