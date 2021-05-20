<?php

namespace App\Http\Controllers;

use App\Song;
use App\Album;
use App\Ip;
use App\CountVisitor;
use Illuminate\Http\Request;

class SongController extends Controller
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

    public function getSong($album, $song, $page = 1)
    {
        $selected_album = Album::with('songs')->find($album);
        $albums = Album::all();

        $count_visitor = CountVisitor::FirstOrFail();
        $visitors = Ip::count();
        $number_per_page = 10;

        $temp_song = Song::find($song);
        if ($selected_album->songs->contains($temp_song)) {
            $selected_song = Song::find($song);
        }
        else {
            $selected_song = $selected_album->songs->get(1);
        }

        $group_song = Song::where('album_id', $album)->skip(($page - 1) * $number_per_page)->take(10)->get();
        $next_song = Song::where('album_id', $album)->skip($page * $number_per_page)->take(1)->get();
        
        $max_page = floor($selected_album->count()/$number_per_page);

        if ($max_page > 0)
            $next_page = ($page + 1) % $max_page;
        else
            $next_page = null;
        
        return view('song', compact('albums', 'selected_album', 'count_visitor', 'visitors', 'page', 'next_page', 'selected_song', 'next_song', 'group_song'));
    }

    public function getLyric($song_id)
    {
        $selected_song = Song::findOrFail($song_id);

        return view('lyric', comapct('selected_song'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
