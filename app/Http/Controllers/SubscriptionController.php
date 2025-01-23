<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\SubsscriptionRequest;
use Session;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subscription = Subscription::orderBy('id', 'desc')->get();
        $subscriptionCount = Subscription::count();
        return view('backend.subscription.index',['subscription'=>$subscription, 'subscriptionCount' => $subscriptionCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);
        $subscription = Subscription::create($request->all());
        session()->flash('success', 'you have subscribed successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($subscription)
    {
        //
        $subscription = Subscription::find($subscription);
        $subscription->delete();
        return back()->with('success', 'Email deleted successfully');
    }
}
