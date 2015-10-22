<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
class Songs extends Controller
{
    //
    // add values to database


    public function songsList(Song $get)

    {
        $songs = $get::get();
        return view('songs.song',compact('songs'));
    }
    public function show($id)
    {
        $song_name=Song::find($id);
        return view('songs.show',compact('song_name'));
    }


    /**
     * @return array
     */


}
