<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Event;

class AttributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Track $track, Event $event)
    {
        return view('attributions', [
            'track' => $track,
            'event' => $event
        ]);
    }
}
