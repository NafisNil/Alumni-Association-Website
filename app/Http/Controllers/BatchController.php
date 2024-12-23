<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use App\Http\Requests\BatchRequest;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $batch = Batch::orderBy('id', 'asc')->get();
        return view('backend.batch.index',['batch'=>$batch]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BatchRequest $request)
    {
        //
        $batch = Batch::create($request->all());
      

        return redirect()->route('batch.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        //
        return view('backend.batch.edit',[
            'edit' => $batch
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BatchRequest $request, Batch $batch)
    {
        //
        $batch->update($request->all());
      
        return redirect()->route('batch.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        //
        $batch->delete();
        return redirect()->route('batch.index')->with('status','Data deleted successfully!');
    }
}
