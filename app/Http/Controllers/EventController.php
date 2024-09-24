<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventMail;
use App\Models\Event;
use App\Models\MusicType;
use Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musictypes = MusicType::all();
        return view('event',compact('musictypes'));
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
        $validateData = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'where' => 'required',
                'when' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
                'event_type' => 'required',
                'zone' => 'required',
                'price' => 'required',
                'desc' => 'required',
                'managerName' => 'required',
                'email' => 'required',
            ],
            [
                'title.required' => 'Event name is required',
                'name.required' => 'Event description need',
                'where.required' => 'Please enter where event happen ',
                'event_type.required' => 'Please enter where event happen ',
            ]
        );
        $EventsData = new Event();
        $EventsData->title = $request->title;
        $EventsData->where = $request->where;
        $EventsData->when = $request->when;
        $EventsData->date =  \Carbon\Carbon::parse($request->date)->format('Y-m-d');
        $EventsData->start_time = $request->start_time;
        $EventsData->end_time = $request->end_time;
        $EventsData->music_type = $request->music_type;
        $EventsData->event_type = $request->input('event_type');
        $EventsData->zone = $request->zone;
        $EventsData->price = $request->price;
        $EventsData->first_name = $request->first_name;
        $EventsData->sur_name = $request->sur_name;
        $EventsData->email = $request->email;
        $EventsData->phone = $request->phone;
        $EventsData->desc = $request->desc;
        $EventsData = $EventsData->save();


        $to = $request->email;
        $title = $request->title;
        $msg = "Event was submitted, After the admin aprovel event will show in site.";
        Mail::to($to)->send(new EventMail($title,$msg));


    return redirect()->route('event.index')->with('success', 'Thank you for adding Event, When approve admin it will be show in the website');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
