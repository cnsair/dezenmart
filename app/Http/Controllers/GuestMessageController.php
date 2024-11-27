<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestMessageRequest;
use App\Models\GuestMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuestMessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(GuestMessageRequest $request)
    {
        $request->validated();
        if ( $request ) { 

            $feedback = new GuestMessage();

            $feedback->name = $request->input('name');
            $feedback->email = $request->input('email');
            $feedback->phone = $request->input('phone');
            $feedback->message = $request->input('message');

            $feedback->save();

            return Redirect::route('contact-us')->with('status', 'success');
        }
        else{
            return Redirect::route('contact-us')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GuestMessage $guestMessage)
    {
        $feedbacks = GuestMessage::query()->orderBy('id', 'desc')->paginate(10);

        return view('admin.guest-message', compact('feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuestMessage $feedback)
    {
        return view('admin.feedback', ['feedback' => $feedback]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($feedback)
    {
        $feedback = GuestMessage::find($feedback);
        $feedback->delete();

        return Redirect()->back()->with('status', 'success');
        // return Redirect::route('admin.guest-message')->with('status', 'success');
    }
}
