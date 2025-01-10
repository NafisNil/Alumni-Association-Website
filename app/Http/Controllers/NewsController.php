<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Image;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = News::orderBy('id', 'desc')->get();
        return view('backend.news.index',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        //\
        $news = News::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $news);
        }

        return redirect()->route('news.index')->with('success','Data inserted successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
        return view('backend.news.edit',[
            'edit' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        //
        $news->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$news->photo);
            $this->_uploadImage($request, $news);
        }
   
        return redirect()->route('news.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        if(!empty($news->logo));
        @unlink('storage/'.$news->logo);
      
        $news->delete();
        return redirect()->route('news.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1300, 580)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }
}
