<?php

namespace App\Http\Controllers;


use App\Mail\TrackSubmissionMailer;
use App\TrackSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrackSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email',
            'artist'        => 'required',
            'soundcloud'    => 'required',
            'track_title'   => 'required',
            'track_link'    => 'required',
            'social_links'  => 'max:2000'
        ]);

        $trackSubmission = new TrackSubmission();
        $trackSubmission->create([
            'first_name'    => $request->input('first_name'),
            'last_name'     => $request->input('last_name'),
            'email'         => $request->input('email'),
            'artist'        =>$request->input('artist'),
            'soundcloud'    =>$request->input('soundcloud'),
            'track_title'   =>$request->input('track_title'),
            'track_link'    =>$request->input('track_link'),
            'social_links'  =>$request->input('social_links'),
        ]);

        $subject = 'Flow Trax - Track Submission Received';
        Mail::queue(new TrackSubmissionMailer($request->input('first_name'),$request->input('last_name'),$request->input('track_title'),$request->input('email'),$subject));

        return response()->json('Successfully Submitted Track!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrackSubmission  $trackSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(TrackSubmissionMailer $trackSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrackSubmission  $trackSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackSubmissionMailer $trackSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrackSubmission  $trackSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackSubmissionMailer $trackSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrackSubmission  $trackSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackSubmissionMailer $trackSubmission)
    {
        //
    }
}
