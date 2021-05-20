<table border="0" cellpadding="0" cellspacing="0" class="album_content_table">
	<tr>
		<td valign="top" colspan="3">
			<div align="right"><img src="{{asset('images/images/contact_title.gif')}}" border="0"></div>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td valign="top" colspan="3" width="100%">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" class="contact_section_table">
				<tr>
					<td><img src="{{asset('images/images/contact_content_left.gif')}}" border="0"></td>
					<td valign="top" width="70%" height="100%">
					<form name="frm" method="POST" action="{{route('send_email')}}">
						@csrf	
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td valign="top" colspan="2">
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td colspan="3"><strong>www.nhacminhson.fr</strong> mong nhận được thư góp ý<br />của Quý bạn hữu yêu âm nhạc gần xa.</td>
										</tr>
										<tr>
											<td colspan="3" style="padding-top:5px; font-size:12px; font-weight:normal; color:#FAF099"><em>(*) thông tin cần thiết</em></td>
										</tr>	
										<tr>
											<td>&nbsp;</td>
											<td class="error" colspan="2">
                                                @if ($errors->any())
													@foreach ($errors->all() as $error)
														{!! $error !!}
													@endforeach
                                                @endif
                                            </td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td nowrap class="contact_form_text">Họ tên (*):</td>
											<td><input type="text" name="full_name" class="textbox" value="{{ old('full_name') }}" size="30"></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td nowrap class="contact_form_text">Điện thoại (*): </td>
											<td><input type="text" name="phone" class="textbox" value="{{ old('phone') }}" size="30"></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td nowrap class="contact_form_text">Email (*): </td>
											<td><input type="text" name="email" class="textbox" value="{{ old('email') }}" size="30"></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td nowrap class="contact_form_text">Chủ đề:</td>
											<td><input type="text" name="subject" class="textbox" value="{{ old('subject') }}" size="30"></td>
										</tr>				
										<tr>
											<td valign="top" nowrap class="contact_form_text_bold">Nội dung (*):</td>
											<td valign="top" colspan="2"><textarea style="width:278px;" rows="6" class="textarea" name="content">{{ old('content') }}</textarea></td>
										</tr>	
										<tr>
											<td style="padding-top:5px; padding-right:3px;" colspan="3">
												<div align="right">
												<input type="hidden" name="action"><input type="image" src="{{asset('images/images/send.gif')}}" class="button">&nbsp;&nbsp;<input type="image" src="{{asset('images/images/reset.gif')}}" class="button">
												</div>
											</td>
										</tr>									
									</table>
								</td>
							</tr>						
						</table>
						</form>						
					</td>
					<td valign="top" width="30%">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr><td colspan="2" class="contact_album_title"><div align="right">Album Minh Sơn:&nbsp;</div></td></tr>
                            @foreach ($albums as $album)
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td valign="top" width="100%"><div align="right"><a href="{{route('album',  ['id' => $album->id, 'play' => 1])}}" class="contact_content_link">{{$album->name}}</a></div></td>
                                    <td valign="middle"><img src="{{asset('images/images/contact_menu_dot.gif')}}" border="0" class="album_menu_dot"></td>
                                </tr>
                            @endforeach					
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr><td height="100%">&nbsp;</td></tr>
	<tr>
		<td><img src="{{asset('images/images/contact_content_11.gif')}}" border="0" style="display: block;"></td>
		<td><img src="{{asset('images/images/contact_content_12.gif')}}" border="0" style="display: block;"></td>
		<td><img src="{{asset('images/images/contact_content_13.gif')}}" border="0" style="display: block;"></td>
	</tr>	
	<tr>
		<td><img src="{{asset('images/images/album_content_41.jpg')}}" border="0" style="display: block;" usemap="#Map3"></td>
		<td><img src="{{asset('images/images/contact_content_42.gif')}}" border="0" style="display: block;" usemap="#Map4"></td>
		<td><img src="{{asset('images/images/about_content_43.gif')}}" border="0" style="display: block;"></td>
	</tr>			
</table>
<map name="Map3" id="Map3"><area shape="rect" coords="62,42,159,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>
<map name="Map4" id="Map4"><area shape="rect" coords="1,63,85,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>

