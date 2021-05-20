<table border="0" cellpadding="0" cellspacing="0" class="about_menu_table">
	<tr>
		<td valign="top"><img src="{{asset('images/images/contact_menu_1.gif')}}" border="0" style="display: block; height: 100%; width: 100%;"></td>
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
		<td valign="top"><img src="{{asset('images/images/album_menu_2.gif')}}" border="0" style="display: block;"></td>
	</tr>
	<tr>
		<td valign="top"><a href="{{ route('index') }}" style="display: block; height: 100%;"><img src="{{asset('images/images/about_menu_3.jpg')}}" style="display: block; height: 100%;" border="0" onMouseOver="this.src='{{asset('images/images/about_menu_3.gif')}}'" onMouseOut="this.src='{{asset('images/images/about_menu_3.jpg')}}'"></a></td>
	</tr>		
</table>


<map name="Map" id="Map"><area shape="rect" coords="70,1,267,98" href="{{route('index')}}" /></map>