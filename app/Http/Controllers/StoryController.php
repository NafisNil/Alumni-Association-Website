<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;
use Auth;
use Illuminate\Support\Str;
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stories = Story::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $storiesCount = Story::where('user_id', Auth::user()->id)->count();
        return view('backend.member.stories.index',['stories'=>$stories, 'storiesCount' => $storiesCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.member.stories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoryRequest $request)
    {
        //
        $stories = Story::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'desc' => $request->desc,
            'status' => $request->status,
            'slug' => Str::slug($request->title),
        ]);
       

        return redirect()->route('stories.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
        return view('backend.member.stories.edit',[
            'edit' => $story
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoryRequest $request, Story $story)
    {
        //
        $story->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'status' => $request->status,
            'slug' => Str::slug($request->title),
        ]);
    
        return redirect()->route('stories.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
        $story->delete();
    
        return redirect()->route('stories.index')->with('status','Data deleted successfully!');
    }
}
