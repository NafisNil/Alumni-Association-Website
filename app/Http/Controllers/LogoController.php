<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\LogoRequest;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logo = Logo::orderBy('id', 'desc')->first();
        $logoCount = Logo::count();

        return view('backend.logo.index',['logo'=>$logo, 'logoCount' => $logoCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LogoRequest $request)
    {
        //
        $logo = Logo::create($request->all());
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $logo);
        }

        return redirect()->route('logo.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
        return view('backend.logo.edit',[
            'edit' => $logo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LogoRequest $request, Logo $logo)
    {
        //
        $logo->update($request->all());
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$logo->photo);
            $this->_uploadImage($request, $logo);
        }

        return redirect()->route('logo.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
        $logo->delete();
        if(!empty($logo->photo));
        @unlink('storage/'.$logo->photo);

        return redirect()->route('logo.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(192, 160)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }


}
