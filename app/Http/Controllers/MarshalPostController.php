<?php

namespace App\Http\Controllers;

use App\Models\MarshalPost;
use Illuminate\Http\Request;
use App\Models\Track;

class MarshalPostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Track $track)
    {
        MarshalPost::create($request->all());

        return back();
    }
}
