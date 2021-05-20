<table border="0" cellpadding="0" cellspacing="0" class="about_menu_table">
	<tr>
		<td valign="top"><img src="{{asset('images/images/contact_menu_1.gif')}}" border="0" style="display: block; height: 100%;"></td>
	</tr>
	<tr>
        <td valign="top"><a href="{{route('welcome')}}" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_home.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{route('about')}}" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_author.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_album.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('photo', ['category_id' => 8]) }}" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_photo.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="{{ route('contact') }}" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_contact.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><a href="http://daviddong.vn" target="	" style="display: block; height: 100%;"><img src="{{asset('images/images/contact_menu_link.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></a></td>
	</tr>	
	<tr>
		<td valign="top"><img src="{{asset('images/images/album_menu_2.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('index') }}"><img src="{{asset('images/images/about_menu_3.jpg')}}" border="0" onMouseOver="this.src='{{asset('images/images/about_menu_3.gif')}}'" onMouseOut="this.src='{{asset('images/images/about_menu_3.jpg')}}'"></a></td>
	</tr>		
</table>


<map name="Map" id="Map"><area shape="rect" coords="49,1,222,30" href="{{route('index')}}" /></map>
<map name="Map2" id="Map2"><area shape="rect" coords="75,11,237,43" href="{{route('about')}}" /></map>
<map name="Map3" id="Map3"><area shape="rect" coords="49,7,251,43" href="{{ route('album', ['id' => 1, 'play' => 1]) }}" /></map>
<map name="Map4" id="Map4"><area shape="rect" coords="91,7,233,42" href="{{route('contact')}}" /></map>
<map name="Map5" id="Map5"><area shape="rect" coords="63,1,223,99" href="{{route('index')}}" /></map>