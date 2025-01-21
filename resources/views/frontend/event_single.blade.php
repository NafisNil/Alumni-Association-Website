@extends('frontend.layouts.master')
@section('title')
    Event  - {{ $event_single->title }}
@endsection
@section('content')

@php
    $date = Carbon\Carbon::parse($event_single->date);
    // Create a Carbon instance from the time string
    $time = Carbon\Carbon::createFromTime(intval(explode(':', $event_single->time)[0]), intval(explode(':', $event_single->time)[1]));

    // Format the time in meridian format (e.g., 3:30 PM)
    $meridianTime = $time->format('h:i A'); 
@endphp

    <div id="qodef-page-inner" class="qodef-content-grid" style="margin-top: 200px">
       <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
          <div class="qodef-grid-inner clear">
             <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                <main id="tribe-events">
                   <div class="tribe-events-before-html"></div>
       
                   <div id="tribe-events-content" class="tribe-events-single qodef-tribe-events-single-item qodef-e">
                      <!-- Notices -->
                      <div class="tribe-events-notices">
                        @if ($event_single->type == 'Previous')
                        <ul>
                            <li>This event has passed.</li>
                         </ul>
                        @endif
                        
                      </div>
                      <div class="qodef-e-main-info">
                         <div class="qodef-e-title-holder">
                            <h2 class="qodef-e-title">{{$event_single->title}}</h2>
                            <div class="qodef-e-cost">
                              {{@$event_single->application_fees}}
                            </div>
                         </div>
                         <div class="qodef-e-info">
                            <div class="qodef-e-info-item">
                               <span class="qodef-icon-kiko kikol kiko-calendar" ></span>                <span>{{$date->format('d M, Y')}}</span>
                            </div>
                            <div class="qodef-e-info-item">
                               <span class="qodef-icon-kiko kikol kiko-clock" ></span>                <span>{{$meridianTime}}</span>
                            </div>

                         </div>
                      </div>
                      <div class="qodef-e-main-content">
                         <div class="qodef-media-holder qodef-grid qodef-layout--template ">
                            <div class="qodef-grid-inner clear">
                               <div class="qodef-grid-item qodef-col--6">
                                  <div class="qodef-e-media">
                                     <div class="tribe-events-event-image"><img width="800" height="479" src="https://joinup.qodeinteractive.com/wp-content/uploads/2020/11/event-img-3.jpg" class="attachment-full size-full wp-post-image" alt="aa" srcset="https://joinup.qodeinteractive.com/wp-content/uploads/2020/11/event-img-3.jpg 800w, https://joinup.qodeinteractive.com/wp-content/uploads/2020/11/event-img-3-600x359.jpg 600w, https://joinup.qodeinteractive.com/wp-content/uploads/2020/11/event-img-3-300x180.jpg 300w, https://joinup.qodeinteractive.com/wp-content/uploads/2020/11/event-img-3-768x460.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" loading="eager" /></div>
                                  </div>
                               </div>
                               <div class="qodef-grid-item qodef-col--6">
                                  <div class="qodef-e-map">
                                     <div class="tribe-events-venue-map">
                                        {!! $event_single->map !!}
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="qodef-e-content">
                            <div class="qodef-e-excerpt">
                              {!! $event_single->description !!}
                            </div>
                            <div class="qodef-e-meta-holder qodef-grid qodef-layout--template ">
                               <div class="qodef-grid-inner clear">
                                  <div class="qodef-grid-item qodef-col--4">
                                     <h4 class="qodef-e-meta-title">Details:</h4>
                                     <div class="qodef-e-meta-item">
                                        <span class="qodef-e-meta-label">Date:</span>
                                        <span class="qodef-e-meta-value">{{$date->format('d M, Y')}}</span>
                                     </div>
                                     <div class="qodef-e-meta-item">
                                        <span class="qodef-e-meta-label">Time:</span>
                                        <span class="qodef-e-meta-value">{{$meridianTime}}</span>
                                     </div>
                                     <div class="qodef-e-meta-item">
                                        <span class="qodef-e-meta-label">Cost:</span>
                                        <span class="qodef-e-meta-value"> {{@$event_single->application_fees}}</span>
                                     </div>
                                  </div>
                       
                                  <div class="qodef-grid-item qodef-col--4">
                                     <h4 class="qodef-e-meta-title">Venue:</h4>
                                     <div class="qodef-e-meta-item">
                                        <span class="qodef-e-meta-label">Place:</span>
                                        <span class="qodef-e-meta-value">{!! $event_single->location !!}</span>
                                     </div>
              
                                  </div>
                               </div>
                            </div>
                         </div>
               
                      </div>
                   </div>
                   <div class="tribe-events-after-html"></div>
                   <!--
                      This calendar is powered by The Events Calendar.
                      http://evnt.is/18wn
                      -->
                </main>
             </div>
          </div>
       </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
 </div>
@endsection