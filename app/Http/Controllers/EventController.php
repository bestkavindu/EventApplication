<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event');
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
        $EventsData->date = $request->date;
        $EventsData->music_type = $request->music_type;
        $EventsData->event_type = $request->event_type;
        $EventsData->zone = $request->zone;
        $EventsData->price = $request->price;
        $EventsData->managerName = $request->managerName;
        $EventsData->email = $request->email;
        $EventsData->phone = $request->phone;
        $EventsData->desc = $request->desc;
        $EventsData = $EventsData->save();


    return redirect()->route('about')->with('success', 'Company has been successfully added');


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
