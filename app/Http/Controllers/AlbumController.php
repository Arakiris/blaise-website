<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use App\Ip;
use App\CountVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $play, $song)
    {

    }

    public function getAlbum($id, $play) {
        $play = filter_var($play, FILTER_VALIDATE_BOOLEAN) ;
        
        $albums = Album::simplePaginate(7, ['*'], 'albums');
        $selected_album = Album::with('songs')->findOrFail($id);
        $play_song = Song::where('album_id', $id)->pluck('audio');

        $songs_selected = Song::where('album_id', $id)->simplePaginate(10, ['*'], 'songs_selected');

        $count_visitor = CountVisitor::FirstOrFail();
        $visitors = Ip::count();

        if($play) {
            $playlistContent = '<ASX Version="3">';
            foreach($selected_album->songs as $song) {
                $playlistContent .= "<ENTRY>";	
                $playlistContent .= '<REF HREF="' . Storage::disk('public')->url('images/images_store/' . $song->audio) .  '"/>';
                $playlistContent .= "</ENTRY>";	
            }
            $playlistContent .= "</ASX>";	

            Storage::disk('public')->put('images/images_store/playlist_album'. $selected_album->id .'.asx', $playlistContent);
        }
        

        return view('album', compact('albums', 'selected_album', 'play', 'count_visitor', 'visitors', 'songs_selected', 'play_song'));
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
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
    }
}
