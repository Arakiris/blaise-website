<table border="0" cellpadding="0" cellspacing="0" class="album_content_table">
	<tr>
		<td valign="top" colspan="3">
			<div align="right"><img src="{{asset('images/images/album_title.gif')}}" border="0"></div>
		</td>
	</tr>
	<tr>
		<td valign="top" colspan="3" width="100%">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="album_section_table">
				<tr>
					<td><img src="{{asset('images/images/album_content_left.gif')}}" border="0"></td>
					<td colspan="2">&nbsp;</td>
					<td><img src="{{asset('images/images/album_content_right.gif')}}" border="0"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td valign="top" width="70%" height="100%">
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td>
                                    <label class="album_seq">
                                        @if (!empty($selected_album->title))
                                            {{$selected_album->title}}
                                        @endif
                                    </label>
                                    @if (!empty($selected_album->title))
                                        &nbsp;
                                    @endif
                                    <label class="album_title">
                                        {{$selected_album->title}}
                                    </label>
                                </td>
                            </tr>
                            @if (!empty($selected_song->image))
                                <td class="song_image">
                                    
                                    <img hspace="0" src="{{asset('images/images_store/' . $selected_song->image)}}" align="baseline" />
                                </td>
                            @endif
                            @if (!empty($selected_song->note))
                                <td class="song_note">
                                    {!! $selected_song->note !!}
                                </td>
                            @endif
                            @if (!empty($selected_song->artist))
                                <tr>
                                    <td>
                                        <div class="song_note"> 
                                            Trình bày:&nbsp;{{$selected_song->artist}}&nbsp;
                                            @if (!empty($selected_song->audio))
                                                <a href="{{ route('song', ['album' => $selected_album->id, 'song' => $selected_song->id, 'page' => $page]) }}">
                                                    <img src="{{asset('images/images/sound.gif')}}" border="0" alt="Nghe nhac" class="song_sound">
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            <tr>
								<td>
                                    @if (!empty($selected_song->audio))
                                        <audio controls src="{{asset('images/images_store/'. $selected_song->audio)}}" class="audio_song">
                                            Your browser does not support the
                                            <code>audio</code> element.
                                        </audio>
                                        <a href="{{asset('images/images_store/'. $selected_song->audio)}}">Tải nhạc</a>
                                    @endif
                                </td>	
                            </tr>
							<tr><td><div class="song_name">{{$selected_song->name}}</div></td></tr>
						</table>
					</td>
					<td valign="top" width="30%">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
                            @foreach ($group_song as $song)
                                <tr>
                                    <td valign="top" width="100%" class="album_content_link">
                                        <div align="right">
                                            @if ($selected_song->id == $song->id)
                                                <a title="header=[{{$song->name}}] body=[<br>Đã được nghe: <b>{{$song->count_view}}]</b> lần <br>Đã được tải về: <b>{{$song->download}}</b> lần" 
                                                    href="{{ route('song', ['album' => $selected_album->id, 'song' => $selected_song->id, 'page' => $page]) }}" 
                                                    class="album_content_link_active">
                                            @else
                                                <a title="header=[{{$song->name}}] body=[<br>Đã được nghe: <b>{{$song->count_view}}]</b> lần <br>Đã được tải về: <b>{{$song->download}}</b> lần" 
                                                    href="{{ route('song', ['album' => $selected_album->id, 'song' => $selected_song->id, 'page' => $page]) }}" 
                                                    class="album_content_link">
                                            @endif
                                                {{sprintf("%02d", $song->sequence)}}.&nbsp;{{$song->name}}
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <div align="right">
                                        <a href="{{ route('song', ['album' => $selected_album->id, 'song' => $selected_song->id, 'page' => $next_page]) }}" class="album_song_list_page" title="Trang >>">
                                            >>
                                        </a>
                                    </div>
                                </td>
                            </tr>	
						</table>
					</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr>
		<td valign="top" colspan="3" height="100%" class="album_text">
            @if (!empty($selected_song->description))
                <div class="song_lyric">Lời ca khúc:</div>
            @endif
            @if (!empty($selected_song->abstract))
                {!! $selected_song->abstract !!}
                @if (!empty($selected_song->description))
                    &nbsp;...&nbsp;<a href="{{route('lyric', ['song_id' => $selected_song->id])}}" target="_blank" class="album_text_more" title="Xem tiep">>></a>
                @endif
            @endif
		</td>
	</tr>
	<tr>
		<td><img src="{{asset('images/images/album_content_11.gif')}}" style="display: block" border="0"></td>
		<td><img src="{{asset('images/images/album_content_12.gif')}}" style="display: block" border="0"></td>
		<td><img src="{{asset('images/images/album_content_13.gif')}}" style="display: block" border="0"></td>
	</tr>
	<tr>
		<td><img src="{{asset('images/images/album_content_41.jpg')}}" style="display: block" border="0" usemap="#Map3"></td>
		<td><img src="{{asset('images/images/album_content_42.gif')}}" style="display: block" border="0" usemap="#Map4"></td>
		<td><img src="{{asset('images/images/about_content_43.gif')}}" style="display: block" border="0"></td>	
	</tr>			
</table>

{{-- <map name="Map" id="Map"><area shape="rect" coords="105,25,205,59" href="download.php?song_id={$UIVAR.Song.SongID}" /></map> --}}
<map name="Map3" id="Map3"><area shape="rect" coords="62,42,159,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>
<map name="Map4" id="Map4"><area shape="rect" coords="1,63,85,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>