<table border="0" cellpadding="0" cellspacing="0" class="album_content_table">
	<tr>
		<td valign="top" colspan="3">
			<div align="right"><img src="{{asset('images/images/photo_title.gif')}}" border="0"></div>
		</td>
	</tr>
	<tr>
		<td valign="top" colspan="3" width="100%" height="100%">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" class="album_section_table">
				<tr>
					<td><img src="{{asset('images/images/photo_content_left.gif')}}" border="0"></td>
					<td colspan="2">&nbsp;</td>
					<td><img src="{{asset('images/images/photo_content_right.gif')}}" border="0"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td valign="top" width="100%" height="100%">
						<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="photo_author_table">
                                        <tr>
                                            <td width="100%">
                                                <label class="category_name">
                                                    {{$selected_category->name}}
                                                </label>
                                            </td>
                                        </tr>	
                                    </table>                                    
                                </td>
							</tr>
							<tr>
								<td width="100%" height="100%">
                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            @foreach ($photos as $key=>$photo)
                                                @if (($key % 2) == 0)
                                                    </tr>
                                                    <tr>
                                                @endif
                                                
                                                <td valign="top" width="50%">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td valign="top" class="photo_img">
                                                                @if (($key % 2) == 0)
                                                                    <div align="left">
                                                                @else
                                                                    <div align="right">
                                                                @endif
                                                                    <a href="javascript:GetPhotoInfo('{{route('view_large_image', ['id' => $photo->id, 'type' => 'photo'])}}');"
                                                                        name="{{$photo->large_image}}" 
                                                                        rel="thumbnail" 
                                                                        title="{{$photo->name}}">

                                                                        @if (!empty($photo->small_image))
                                                                            <img src="{{asset('images/images_store/' . $photo->small_image)}}" border="0">
                                                                        @else
                                                                            <img src="{{asset('images/images/product_noimage.gif')}}" border="0">
                                                                        @endif
                                                                    </a>
                                                                </div>		
                                                            </td>					
                                                        </tr>
                                                        <tr>
                                                            <td class="photo_name">
                                                                <a href="javascript:GetPhotoInfo('{{route('view_large_image', ['id' => $photo->id, 'type' => 'photo'])}}');" class="photo_name">
                                                                    @if (($key % 2) == 0)
                                                                        <div align="left">
                                                                    @else
                                                                        <div align="right">
                                                                    @endif
                                                                        {{$photo->name}}&nbsp;{{$photo->date}}
                                                                    </div>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            @endforeach
                                        </tr>
                                        @if ($photos->count() < 4)
                                            <tr><td height="100%">&nbsp;</td></tr>
                                        @endif
                                    </table>
                                </td>
							</tr>
							<tr>
                                <td style="padding-left:0px; padding-top:0px;">
                                    <div class="photo_list_page" align="center">
                                        @if ($photos->hasPages())
                                            {{ $photos->links('vendor.pagination.custom') }}
                                        @endif
                                    </div>
                                </td>
                                <td valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" class="photo_category_table">
                                        <tr>
                                            <td valign="top" width="100%" class="photo_category_td">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="photo_category_content_table">
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td valign="top" width="100%">
                                                                <div align="right">
                                                                    <a href="{{ route('photo', ['category_id' => $category->id]) }}" class="photo_content_link{{ ($selected_category->id == $category->id) ? '_active' : ''}}">
                                                                        {{$category->name}}
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td valign="middle"><img src="{{asset('images/images/photo_dot.gif')}}" border="0" class="photo_dot"></td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="100%" colspan="3">&nbsp;</td>
                                        </tr>	
                                    </table> 
                                </td>
                                <td>&nbsp;</td>
							</tr>			
						</table>
					</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr>
		<td><img src="{{asset('images/images/album_content_11.gif')}}" border="0" style="display: block;"></td>
		<td><img src="{{asset('images/images/album_content_12.gif')}}" border="0" style="display: block;"></td>
		<td><img src="{{asset('images/images/album_content_13.gif')}}" border="0" style="display: block;"></td>
	</tr>
	<tr>
		<td><img src="{{asset('images/images/album_content_41.jpg')}}" border="0" style="display: block;" usemap="#Map3"></td>
		<td><img src="{{asset('images/images/album_content_42.gif')}}" border="0" style="display: block;" usemap="#Map4"></td>
		<td><img src="{{asset('images/images/about_content_43.gif')}}" border="0" style="display: block;"></td>
	</tr>			
</table>

<map name="Map" id="Map"><area shape="rect" coords="105,25,205,59" href="" /></map>
<map name="Map3" id="Map3"><area shape="rect" coords="62,42,159,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>
<map name="Map4" id="Map4"><area shape="rect" coords="1,63,85,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>