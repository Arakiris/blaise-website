<table border="0" cellpadding="0" cellspacing="0" class="about_menu_table">
	<tr>
		<td valign="top" background="{{asset('images/images/album_menu_1.gif')}}" height="255" style="background-repeat:no-repeat">
			<table border="0" cellpadding="0" cellspacing="0" class="album_list_table">
				<tr>
					<td valign="top" class="album_menu_title" colspan="2">
						<div align="right">
							Album:
						</div>
					</td>
                </tr>
                @foreach ($albums as $album)
					<tr>
						<td valign="middle" width="100%" class="album_menu_item" height="29"><div align="right" class="album_menu_link"><a href="{{ route('album', ['id' => $album->id, 'play' => 0 ]) }}" class="album_menu_link">{{$album->name}}</a></div></td>
							<td valign="middle">
								
								@if ($play)
									@if ($selected_album->id == $album->id)
										<a href="{{ route('album', ['id' => $album->id, 'play' => 0 ]) }}"><img src="{{asset('images/images/album_stop.gif')}}" border="0" style="display: block" class="album_menu_icon" alt="Ngừng lại/Tắt album"></a>
									@else
										<a href="{{ route('album', ['id' => $album->id, 'play' => 1]) }}"><img src="{{asset('images/images/album_play.gif')}}" border="0" style="display: block" alt="Nghe toàn bộ album" class="album_menu_icon"></a>
									@endif
								@else
									<a href="{{ route('album', ['id' => $album->id, 'play' => 1]) }}"><img src="{{asset('images/images/album_play.gif')}}" border="0" style="display: block" alt="Nghe toàn bộ album" class="album_menu_icon"></a>	
								@endif						
							</td>
						</tr>
                @endforeach								
				<tr>
					<td colspan="2" height="100%" valign="top">
						@if ($albums->hasPages())
							<div align="right">
								&nbsp;{{ $albums->links('vendor.pagination.custom-2') }}
							</div>	
						@endif
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('index') }}" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_home.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('about') }}" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_author.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_album.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('photo', ['category_id' => 8]) }}" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_photo.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>		
	<tr>
		<td valign="top"><a href="{{ route('contact') }}" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_contact.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="http://daviddong.vn" target="	" style="display: block; height: 100%;"><img src="{{asset('images/images/album_menu_link.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></a></td>
	</tr>	
	<tr>
		<td valign="top"><img src="{{asset('images/images/album_menu_2.gif')}}" style="display: block;height: 100%;width: 100%;" border="0"></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('index') }}"><img src="{{asset('images/images/about_menu_3.jpg')}}" style="display: block;height: 100%;width: 100%;" border="0" onMouseOver="this.src='{{asset('images/images/about_menu_3.gif')}}" onMouseOut="this.src='{{asset('images/images/about_menu_3.jpg')}}'"></a></td>
	</tr>		
</table>

<map name="Map5" id="Map5"><area shape="rect" coords="70,1,267,98" href="{{ route('index') }}" /></map>