<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Models\Batch;
use Illuminate\Support\Facades\Hash;
class MemberProfileController extends Controller
{
    //
    public function member_profile(){
        $batches = Batch::all();
        return view('backend.member-profile',['batches'=>$batches]);
    }

    public function member_profile_update(Request $request){
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
           'email' => 'required|email|unique:users,email,' . $user->id, 
            'address' => 'required|string|max:500',
            'phone' => 'required',
            'batch' => 'required|exists:batches,id',
            'id_no' => 'required|unique:users,id_no,' . $user->id, 
            'occupation' => 'required|in:Job,Startup',
            'company_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'business_info' => 'nullable|string|max:500',
            'business_type' => 'nullable|string|max:255',
            'business_location' => 'nullable|string|max:255',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->id_no = $request->id_no;
        $user->batch = $request->batch;
        $user->occupation = $request->occupation;
        $user->company_name = $request->company_name;
        $user->business_name = $request->business_name;
        $user->business_info = $request->business_info;
        $user->business_type = $request->business_type;
        $user->business_location = $request->business_location;

        $user->save();

        if ($request->hasFile('photo')) {
            $this->_uploadImage($request, $user);
        }

        return back()->with('success', 'Profile Updated Successfully');
    }

    public function member_password_update(Request $request){
        $user = Auth::user();
        $validatedData = $request->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Password Updated Successfully');
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

