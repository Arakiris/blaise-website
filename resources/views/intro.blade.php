@extends('layouts.app')

@section('content')
    <body leftmargin="0" topmargin="0" bgcolor="#000000" style="height: 100vh;">
        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" style="margin-left: auto; margin-right: auto;">
            <tr>
                <td valign="top">
                    <table width="100%" height="100%" class="intro_content" cellpadding="0" cellspacing="0" >
                        <tr>
                            <td style="padding-top:60px;">
                                <EMBED SRC="{{asset('images/images/intro.mp3')}}" AUTOSTART="true" hidden="true" loop="false"></EMBED>						
                            </td>
                        </tr>	
                        <tr>
                            <td valign="top"><div align="center"><img src="{{asset('images/images/intro_title.gif')}}" border="0"></div></td>
                        </tr>
                        <tr><td style="padding-top:50px;">&nbsp;</td></tr>
                        <tr>
                            <td valign="middle" height="26" align="center"><div align="center"><a href="{{ route('welcome') }}"><img src="{{asset('images/images/intro_menu_home.gif')}}" border="0" onMouseOver="this.src='{{asset('images/images/intro_menu_home_hover.gif')}}'" onMouseOut="this.src='{{asset('images/images/intro_menu_home.gif')}}'"></a></div></td>
                        </tr>
                        <tr>
                            <td valign="top"><div align="center"><img src="{{asset('images/images/intro_space.gif')}}" border="0"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" height="26"><div align="center"><a href="{{ route('about') }}"><img src="{{asset('images/images/intro_menu_author.gif')}}" border="0" onMouseOver="this.src='{{asset('images/images/intro_menu_author_hover.gif')}}'" onMouseOut="this.src='{{asset('images/images/intro_menu_author.gif')}}'"></a></div></td>
                        </tr>
                        <tr>
                            <td valign="top"><div align="center"><img src="{{asset('images/images/intro_space.gif')}}" border="0"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" height="26"><div align="center"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}"><img src="{{asset('images/images/intro_menu_album.gif')}}" border="0" onMouseOver="this.src='{{asset('images/images/intro_menu_album_hover.gif')}}'" onMouseOut="this.src='{{asset('images/images/intro_menu_album.gif')}}'"></a></div></td>
                        </tr>
                        <tr>
                            <td valign="top"><div align="center"><img src="{{asset('images/images/intro_space.gif')}}" border="0"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" height="26"><div align="center"><a href="{{ route('photo', ['category_id' => 8]) }}"><img src="{{asset('images/images/intro_menu_photo.gif')}}" border="0" onMouseOver="this.src='{{asset('images/images/intro_menu_photo_hover.gif')}}" onMouseOut="this.src='{{asset('images/images/intro_menu_photo.gif')}}'"></a></div></td>
                        </tr>
                        <tr>
                            <td valign="top"><div align="center"><img src="{{asset('images/images/intro_space.gif')}}" border="0"></div></td>
                        </tr>
                        <tr>
                            <td valign="top" height="26"><div align="center"><a href="{{ route('contact') }}"><img src="{{asset('images/images/intro_menu_contact.gif')}}" border="0" onMouseOver="this.src='{{asset('images/images/intro_menu_contact_hover.gif')}}'" onMouseOut="this.src='{{asset('images/images/intro_menu_contact.gif')}}'"></a></div></td>
                        </tr>	
                        <tr><td height="50%">&nbsp;</td></tr>																																															
                    </table>				
                </td>
            </tr>
        </table>
    </body>
@endsection

@section('scripts')
    <script language="JavaScript">           
        var my_timeout=setTimeout("gotosite();",60000);
        
        function gotosite()
        {
            window.location="home.php";
        }
    </script>
@endsection