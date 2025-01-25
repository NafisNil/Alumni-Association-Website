<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\About;
use App\Models\General;
use App\Models\Notice;
use App\Models\News;
use App\Models\Batch;
use App\Models\Committee;
use App\Models\Event;
use App\Models\Story;
use App\Models\Social;
use Carbon\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
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
        // Retrieve user IDs of members with status '1'
        $userIds = User::where('type', 'member')
        ->where('status', 'active')
        ->pluck('id');

        // Retrieve the latest 3 stories associated with these users
        $data['stories'] = Story::whereIn('user_id', $userIds)
                ->orderBy('id', 'desc')
                ->limit(3)
                ->get();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.index', $data);
    }

    public function about()
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
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
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.committee', $data);
    }

    public function committee_member_single($slug){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['committee_single'] = Committee::where('slug', $slug)->first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.committee_single', $data);
    }

    public function event(Request $request)
    {
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
       $data['event']= Event::orderBy('id', 'desc')->paginate(3);
       $data['events']= Event::orderBy('id', 'desc')->paginate(15);
       $data['socials'] = Social::orderBy('id', 'desc')->get();
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
        $data['event_single'] = Event::where('slug', $slug)->first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.event_single', $data);
    }


    public function news_all(){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['news_all'] = News::orderBy('id', 'desc')->paginate(15);
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.news_all', $data);
    }

    public function news_single($slug){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['news_single'] = News::where('slug', $slug)->first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.news_single', $data);
    }

    public function notice_all(){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['notice_all'] = Notice::orderBy('id', 'desc')->paginate(15);
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.notice_all', $data);
    }

    public function notice_single($slug){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['notice_single'] = Notice::where('slug', $slug)->first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.notice_single', $data);
    }

    public function member_registration(){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['batch'] = Batch::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.register', $data);
    }

    public function member_registration_store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:500',
            'phone' => 'required',
            'batch' => 'required|exists:batches,id',
            'id_no' => 'required|unique:users,id_no',
            'occupation' => 'required|in:Job,Startup',
            'company_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'business_info' => 'nullable|string|max:500',
            'business_type' => 'nullable|string|max:255',
            'business_location' => 'nullable|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => 'member',
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'batch' => $request->batch,
            'occupation' => $request->occupation,
            'id_no' => $request->id_no,
            'business_info' => $request->business_info,
            'business_type' => $request->business_type,
            'business_location' => $request->business_location,
            'business_name' => $request->business_name,
            'company_name' => $request->company_name
         ]);
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $user);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }


    public function stories_all(){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['batches']= Batch::orderBy('name', 'asc')->get();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $activeUserIds = User::where('status', 'active')->pluck('id');
        $data['storyCount'] = Story::whereIn('user_id', $activeUserIds)->count();
        $data['stories_all'] = Story::whereIn('user_id', $activeUserIds)->paginate(15);
        return view('frontend.stories_all', $data);
    }

    public function stories_by_batch($name){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['batches']= Batch::orderBy('name', 'asc')->get();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $batch = Batch::where('name', $name)->first();
        $activeUserIds = User::where('status', 'active')->where('batch', $batch->id)->pluck('id');
        $data['storyCount'] = Story::whereIn('user_id', $activeUserIds)->count();
        $data['stories_all'] = Story::whereIn('user_id', $activeUserIds)->paginate(15);
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.stories_all', $data);
    }

    public function stories_single($slug){
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['batches']= Batch::orderBy('name', 'asc')->get();
        $data['notice'] = Notice::orderBy('id', 'desc')->get();
        $data['general'] = General::first();
        $data['event'] = Event::orderBy('id', 'desc')->limit(3)->get();
        $data['stories_single'] = Story::where('slug', $slug)->first();
        $data['socials'] = Social::orderBy('id', 'desc')->get();
        return view('frontend.stories_single', $data);
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }



    
}

