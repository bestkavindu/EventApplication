<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
     $events = Event::where('status',1)->paginate(15)->groupBy('date');

     return view('home', compact('events'));
    }
}
