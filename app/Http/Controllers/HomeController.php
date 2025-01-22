<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Batch;
use App\Models\Story;
class HomeController extends Controller
{
    //
    public function index(){
        return view('backend.index');
    }

    public function member_index(){
        $user = User::where('type', 'member')->where('status','active')->get();
        return view('backend.member.index', ['user' => $user]);
    }

    public function member_show($id){
        $user = User::where('id_no', $id)->first();
        $story = Story::where('user_id', $user->id)->first();
        return view('backend.member.show', ['user' => $user, 'story' => $story]);
    }

    public function pending_member_index(){
        $user = User::where('type', 'member')->where('status','inactive')->get();
        return view('backend.member.pending', ['user' => $user]);
    }

    public function member_approve($id){
        $user = User::where('id_no', $id)->first();
        $user->status = 'active';
        $user->save();
        return redirect()->route('pending.member.index')->with('success', 'Member Approved Successfully');
    }

    public function member_disapprove($id){
        $user = User::where('id_no', $id)->first();
        $user->status = 'inactive';
        $user->save();
        return redirect()->route('member.index')->with('success', 'Member Disapproved Successfully');
    }

    public function member_delete($id){
        $user = User::where('id_no', $id)->first();
        $user->delete();
        return redirect()->route('member.index')->with('success', 'Member Deleted Successfully');
    }
}
