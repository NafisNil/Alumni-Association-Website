<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\CommitteeRequest;
use App\Models\Batch;
use Illuminate\Support\Str;
class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $committee = Committee::orderBy('serial', 'asc')->get();
        $committeeCount = Committee::count();
        return view('backend.committee.index',['committee'=>$committee, 'committeeCount' => $committeeCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $committeeCount = Committee::count();
        $batch = Batch::orderBy('id', 'asc')->get();
        return view('backend.committee.create',[
            'batch' => $batch,
            'committeeCount' => $committeeCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommitteeRequest $request)
    {
        //
        $committee = Committee::create([
            'name' => $request->name,
            'batch' => $request->batch,
            'designation' => $request->designation,
            'phone' => $request->phone,
            'dept' => $request->dept,
            'slug' => Str::slug($request->name),
            'serial' => $request->serial
        ]);
        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $committee);
        }

        return redirect()->route('committee.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Committee $committee)
    {
        //
        
        return view('backend.committee.show',[
            'committee' => $committee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committee $committee)
    {
        //
        $batch = Batch::orderBy('id', 'asc')->get();
        $committeeCount = Committee::count();
        return view('backend.committee.edit',[
            'edit' => $committee,
            'batch' => $batch,
            'committeeCount' => $committeeCount
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommitteeRequest $request, Committee $committee)
    {
        //
      
        $committee->update([
            'name' => $request->name,
            'batch' => $request->batch,
            'designation' => $request->designation,
            'phone' => $request->phone,
            'dept' => $request->dept,
            'slug' => Str::slug($request->name),
            'serial' => $request->serial
        ]);
        if ($request->hasFile('photo')) {
            @unlink('storage/'.$committee->photo);
            $this->_uploadImage($request, $committee);
        }

        return redirect()->route('committee.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee)
    {
        //
        $committee->delete();
        if(!empty($committee->photo));
        @unlink('storage/'.$committee->photo);

        return redirect()->route('committee.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('photo') ) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(564, 564)->save('storage/' . $filename);
            $about->photo = $filename;
            $about->save();
        }

    }

}
