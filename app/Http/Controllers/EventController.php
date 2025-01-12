<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Str;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $event = Event::orderBy('id', 'desc')->get();
        return view('backend.event.index',['event'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {

         $event = Event::create([
            'title' => $request->title,
            'category' => $request->category,
            'slug' => Str::slug($request->title),
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'map' => $request->map,
            'description' => $request->description,
            'application_fees' => $request->application_fees,
            
         ]);
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $event);
        }

        return redirect()->route('event.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        return view('backend.event.show',[
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
        return view('backend.event.edit',[
            'edit' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
 
        $event->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'map' => $request->map,
            'description' => $request->description,
            'application_fees' => $request->application_fees
        ]);
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$event->photo);
            $this->_uploadImage($request, $event);
        }

        return redirect()->route('event.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        if(!empty($event->photo));
        @unlink('storage/'.$event->photo);

        return redirect()->route('event.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 480)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
