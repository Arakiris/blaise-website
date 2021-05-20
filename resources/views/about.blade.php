@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
@endsection

@section('content')
    <body leftmargin="0" topmargin="0">
        <center>
            <table class="main_table" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td colspan="4" class="header_table"></td>
                </tr>
                <tr>
                    <td>
                        @include('partials/left')
                    </td>
                    <td width="100%">
                        <table border="0" cellpadding="0" cellspacing="0" class="about_content_table">
                            <tr>
                                <td valign="top" colspan="3">
                                    <div align="right"><img src="{{asset('images/images/about_title.gif')}}" border="0"></div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" colspan="3" height="100%" class="about_text">
                                    <img src="{{asset('images/images/author.gif')}}" border="0" hspace="10" align="left">{!! $about->content !!}
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/images/about_content_11.gif')}}" border="0" style="display: block"></td>
                                <td colspan="2" rowspan="2">
                                    <img src="{{asset('images/images/about_content_bak.gif')}}" border="0" style="display: block" usemap="#Map2">
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/images/about_content_21.gif')}}" border="0" style="display: block"></td>		
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/images/about_content_31.gif')}}" border="0" style="display: block"></td>
                                <td><img src="{{asset('images/images/about_content_32.gif')}}" border="0" style="display: block"></td>
                                <td><img src="{{asset('images/images/about_content_33.gif')}}" border="0" style="display: block"></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('images/images/about_content_41.jpg')}}" border="0" style="display: block" usemap="#Map3"></td>
                                <td><img src="{{asset('images/images/about_content_42.gif')}}" border="0" style="display: block" usemap="#Map4"></td>
                                <td><img src="{{asset('images/images/about_content_43.gif')}}" border="0" style="display: block"></td>
                            </tr>			
                        </table>
                        
                        <map name="Map2" id="Map2"><area shape="rect" coords="178,60,336,77" href="mailto:mail@nhacminhson.fr" /></map>
                        <map name="Map3" id="Map3"><area shape="rect" coords="62,42,159,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>
                        <map name="Map4" id="Map4"><area shape="rect" coords="1,63,85,82" href="http://netadong.com" target="_blank" alt="www.netadong.com"/></map>
                    </td>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" class="about_menu_table">
                            <tr>
                                <td valign="top"><img src="{{asset('images/images/about_menu_1.gif')}}" style="display: block" border="0"></td>
                            </tr>
                            <tr>
                                <td valign="top"><a href="home.php"><img src="{{asset('images/images/about_menu_home.gif')}}" style="display: block" border="0"></a></td>
                            </tr>	
                            <tr>
                                <td valign="top"><img src="{{asset('images/images/about_menu_author.gif')}}" style="display: block" border="0"></td>
                            </tr>	
                            <tr>
                                <td valign="top"><a href="{{ route('album', ['id' => 1, 'play' => 1]) }}"><img src="{{asset('images/images/about_menu_album.gif')}}" style="display: block" border="0"></a></td>
                            </tr>	
                            <tr>
                                <td valign="top"><a href="photos.php"><img src="{{asset('images/images/about_menu_photo.gif')}}" style="display: block" border="0"></a></td>
                            </tr>	
                            <tr>
                                <td valign="top"><a href="contact.php"><img src="{{asset('images/images/about_menu_contact.gif')}}" style="display: block" border="0"></a></td>
                            </tr>	
                            <tr>
                                <td valign="top"><a href="http://daviddong.vn" target="	"><img src="{{asset('images/images/about_menu_link.gif')}}" style="display: block" border="0"></a></td>
                            </tr>	
                            <tr>
                                <td valign="top"><img src="{{asset('images/images/about_menu_2.gif')}}" style="display: block" border="0"></td>
                            </tr>
                            <tr>
                                <td valign="top"><a href="index.php"><img src="{{asset('images/images/about_menu_3.jpg')}}" style="display: block" border="0" onMouseOver="this.src='{{asset('images/images/about_menu_3.gif')}}'" onMouseOut="this.src='{{asset('images/images/about_menu_3.jpg')}}'"></a></td>
                            </tr>		
                        </table>
                        <map name="Map5" id="Map5"><area shape="rect" coords="66,3,211,97" href="{{ route('index') }}" /></map>
                    </td>
                    <td>
                        @include('partials/right')
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="visitor" valign="bottom"><div align="center" class="visitor">Hiện có <strong>{{ $visitors }}</strong> người xem / <strong>{{ $count_visitor->quantity }}</strong> lần xem</div></td>	
                </tr>
            </table>
        </center>
    </body>
@endsection