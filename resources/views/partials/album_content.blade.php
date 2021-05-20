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
					<td valign="top" width="100%" height="100%">
						<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%"><label class="album_seq">
                                    @if (!empty($selected_album->title))
                                        : &nbsp;
                                    @else
                                        </label>
                                    @endif
                                    <label class="album_title">{{$selected_album->name}}</label>
                                </td>
							</tr>
							<tr>
								<td valign="top">
									<table border="0" cellpadding="0" cellspacing="0" class="album_cover_table">
										<tr>
                                            @if (!empty($selected_album->small_image1))
                                                <td width="138" class="album_cover_img">
                                                    
                                                    <a href="javascript:GetAlbumInfo('{{route('view_large_image', ['id' => $selected_album->id, 'type' => 'album', 'seq' => 1])}}');">
                                                        <img hspace="0" src="{{asset('images/images_store/'. $selected_album->small_image1 )}}" align="baseline" border="0" />
                                                    </a>
                                                </td>
                                            @endif
                                            @if (!empty($selected_album->small_image2))
                                                <td width="138"><img src="{{asset('images/images/album_cover_space.gif')}}" border="0" /></td>
                                                <td width="138" class="album_cover_img">
                                                    <a href="javascript:GetAlbumInfo('{{route('view_large_image', ['id' => $selected_album->id, 'type' => 'album', 'seq' => 2])}}');">
                                                        <img hspace="0" src="{{asset('images/images_store/'. $selected_album->small_image2 )}}" align="baseline" border="0" />
                                                    </a>
                                                </td>
                                            @endif
                                            @if (!empty($selected_album->small_image3))
                                                <td width="138"><img src="{{asset('images/images/album_cover_space.gif')}}" border="0" /></td>
                                                <td width="138">
                                                    <a href="javascript:GetAlbumInfo('{{route('view_large_image', ['id' => $selected_album->id, 'type' => 'album', 'seq' => 3])}}');">
                                                        <img hspace="0" src="{{asset('images/images_store/'. $selected_album->small_image3 )}}" align="baseline" border="0" />
                                                    </a>
                                                </td>
                                            @endif																					
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" width="100%">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" class="album_song_table">
                                        @foreach ($songs_selected as $song)
                                            <tr>
                                                <td>
                                                    @if (!empty($song->audio))
                                                        <a title="header=[{{$song->name}}] body=[Đã được nghe: <b> {{$song->count_view}} </b> lần <br>Đã được tải về: <b> {{$song->download}} </b> lần]" 
                                                            href="{{route('song', ['album' => $selected_album->id, 'song' => $song->id])}}" 
                                                            class="album_content_link"><img src="{{asset('images/images/headphone.gif')}}" border="0" /></a>
                                                    @endif
                                                </td>
                                                <td valign="top" class="album_sequence_link" width="100%">
                                                    @if (!empty($song->sequence))
                                                        &nbsp;{{sprintf("%02d", $song->sequence)}}.&nbsp;
                                                    @endif
                                                    <a title="header=[{{$song->name}}] body=[Đã được nghe: <b> {{$song->count_view}} </b> lần <br>Đã được tải về: <b> {{$song->download}} </b> lần]" 
                                                        href="{{route('song', ['album' => $selected_album->id, 'song' => $song->id])}}" 
                                                        class="album_content_link">{{$song->name}}</a> 
                                                    @if (!empty($song->note))
                                                        &nbsp;<label class="album_note_link">({{$song->note}})</label>
                                                    @endif
                                                    @if (!empty($song->artist))
                                                        <label class="album_sequence_link">_&nbsp;</label><label class="album_artist_link">{{$song->artist}}</label>
                                                    @endif
                                                </td>												
                                            </tr>
                                        @endforeach
                                        
                                        <tr><td colspan="2"
                                            ><div align="right">
                                                @if ($songs_selected->hasPages())
                                                    {{ $songs_selected->appends(['albums' => $albums->currentPage()])->links('vendor.pagination.custom') }}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
									</table>
								</td>								
							</tr>
                            
                            @if (!empty($selected_album->description))
                                <tr>
                                    <td><div class="album_note">{!!$selected_album->description!!}</div></td>
                                </tr>
                            @endif
														
						</table>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
	<tr><td height="100%"></td></tr>
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