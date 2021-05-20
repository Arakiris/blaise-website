<table border="0" cellpadding="0" cellspacing="0" class="about_menu_table">
	<tr>
		<td valign="top" background="{{asset('images/images/album_menu_1.gif')}}" height="255" style="background-repeat:no-repeat">
			<table border="0" cellpadding="0" cellspacing="0" class="album_list_table">
				<tr>
					<td valign="top" class="album_menu_title" colspan="2"><div align="right">Album:</div></td>
                </tr>
                @foreach ($albums as $album)
                    <tr>
                        <td valign="top" width="100%" class="album_menu_item">
                            <div align="right" class="album_menu_link">
                                <a href="{{route('album', ['id' => $album->id, 'play' => 1])}}" class="album_menu_link">
                                    {{$album->name}}
                                </a>
                            </div>
                        </td>
                        <td valign="middle"><img src="{{asset('images/images/album_menu_dot.gif')}}" border="0" class="album_menu_dot"></td>
                    </tr>
                @endforeach				
				<tr><td>&nbsp;</td></tr>
			</table>
		</td>
	</tr>
	<tr>
        <td valign="top"><a href="{{route('index')}}" style="display: block;"><img src="{{asset('images/images/album_menu_home.gif')}}" border="0" style="display: block;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{route('about')}}" style="display: block;"><img src="{{asset('images/images/album_menu_author.gif')}}" border="0" style="display: block;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}" style="display: block;"><img src="{{asset('images/images/album_menu_album.gif')}}" border="0" style="display: block;"></a></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('photo', ['category_id' => 8]) }}" style="display: block;"><img src="{{asset('images/images/album_menu_photo.gif')}}" border="0" style="display: block;"></a></td>
	</tr>		
	<tr>
		<td valign="top"><a href="{{ route('contact') }}" style="display: block;"><img src="{{asset('images/images/album_menu_contact.gif')}}" border="0" style="display: block;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="http://daviddong.vn" target="	" style="display: block;"><img src="{{asset('images/images/album_menu_link.gif')}}" border="0" style="display: block;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><img src="{{asset('images/images/album_menu_2.gif')}}" border="0" style="display: block;"></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('index') }}"><img src="{{asset('images/images/about_menu_3.jpg')}}" border="0" onMouseOver="this.src='{{asset('images/images/about_menu_3.gif')}}'" onMouseOut="this.src='{{asset('images/images/about_menu_3.jpg')}}'" style="display: block;"></a></td>
	</tr>		
</table>