<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\About;
use App\Models\General;
use App\Models\Notice;
use App\Models\News;
use App\Models\Committee;
use App\Models\Event;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['slider'] = Slider::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['news']= News::orderBy('id', 'desc')->limit(3)->get();
        $data['event']= Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.index', $data);
    }

    public function about()
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['event']= Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.about', $data);
    }

    public function committee()
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['committee']= Committee::orderBy('serial', 'desc')->get();
        $data['event']= Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.committee', $data);
    }

    public function event(Request $request)
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
       $data['event']= Event::orderBy('id', 'desc')->paginate(15);

        $category = $request->get('category', 'All');
        
        if ($category === 'All') {
            $data['events'] = Event::orderBy('id','desc')->paginate(15);
        } else {
            $data['events'] = Event::where('category', $category)->paginate(15);
        }

        if ($request->ajax()) {
            return view('frontend.partials.event_list', $data)->render();
        }

        return view('frontend.event', $data);

    }


    public function event_single($slug)
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['event'] = Event::where('slug', $slug)->first();
        $data['event_all'] = Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.event_single', $data);
    }

    
}

