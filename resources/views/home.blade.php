@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection

@section('content')
    <body leftmargin="0" topmargin="0">
        <table class="main_table" cellpadding="0" cellspacing="0" border="0" style="margin-left: auto; margin-right: auto;">
            <tr>
                <td valign="top">
                    <table width="100%" height="100%" class="home_content" cellpadding="0" cellspacing="0" >
                        <tr>
                            <td valign="top">
                                <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top">
                                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="677" height="532" align="top">
                                                <param name="movie" value="{{asset('images/images/intro.swf')}}">
                                                <param name="quality" value="high">
                                                <embed src="{{asset('images/images/intro.swf')}}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="677" height="532"></embed>
                                            </object>				
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td rowspan="2"><img src="{{asset('images/images/home_stream_new.jpg')}}" border="0" usemap="#Map3"></td>
                                                    <td width="153" height="56"><a href="{{ route('about') }}"><img src="{{asset('images/images/home_logo.jpg')}}" border="0" onMouseOver="this.src='{{asset('images/images/home_logo_hover.jpg')}}'" onMouseOut="this.src='{{asset('images/images/home_logo.jpg')}}'" alt="Vào trang Tác giả"></a></td>
                                                </tr>
                                                <tr>
                                                    <td width="153" height="41"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}"><img src="{{asset('images/images/home_album_link.jpg')}}" border="0" onMouseOver="this.src='{{asset('images/images/home_album_link_hover.jpg')}}'" onMouseOut="this.src='{{asset('images/images/home_album_link.jpg')}}'" alt="Vào trang Tác phẩm"></a></td>
                                                </tr>												
                                            </table>
                                        </td>
                                    </tr>			
                                
                                </table>
                            </td>
                        </tr>
                    </table>				
                </td>
            </tr>
        </table>

        <map name="Map3"><area shape="rect" coords="1,82,177,101" href="http://netadong.com" target="_blank" alt="Designed by www.netadong.com"></map>
    </body>
@endsection