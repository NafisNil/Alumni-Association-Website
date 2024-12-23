<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Requests\NoticeRequest;
use Image;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notice = Notice::orderBy('id', 'desc')->get();
        return view('backend.notice.index',['notice'=>$notice]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticeRequest $request)
    {
        //
        $notice = Notice::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $notice);
        }

        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $notice);
        }


        return redirect()->route('notice.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        //
        return view('backend.notice.edit',[
            'edit' => $notice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticeRequest $request, Notice $notice)
    {
        //
        $notice->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$notice->photo);
            $this->_uploadImage($request, $notice);
        }
        if ($request->hasFile('file')) {
            @unlink('storage/'.$notice->file);
            $this->_uploadfile($request, $notice);
        }

        return redirect()->route('notice.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        //
        if(!empty($notice->logo));
        @unlink('storage/'.$notice->logo);
        if(!empty($notice->file));
        @unlink('storage/'.$notice->file);
        $notice->delete();
        return redirect()->route('notice.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1260, 560)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }


    private function _uploadfile($request, $notice)
    {
        # code...
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            
                  $request->file->move('storage/',$fileName);

         //  dd($fileName);
            $notice->file = $fileName;
            $notice->save();
        }
       
    }

}
