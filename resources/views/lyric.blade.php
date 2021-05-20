@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/lyric.css')}}">
@endsection

@section('content')
    <body leftmargin="0" topmargin="0">
        <center>
            <table class="main_table" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%" height="100%">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%">
                            <tr>
                                <td height="100%">
                                    <table border="0" cellpadding="0" cellspacing="0" class="lyric_content" height="100%">
                                        @if (!empty($seleted_song->name))
                                            <tr><td class="song_name"><div align="center">{{ $seleted_song->name }}</div></td></tr>
                                        @endif
                                        @if (!empty($seleted_song->note))
                                            <tr><td class="song_note"><div align="right">{{ $seleted_song->note }}</div></td></tr>
                                        @endif
                                        @if (!empty($seleted_song->description))
                                            <tr><td height="100%" valign="top" class="song_description">{{ $seleted_song->description }}</td></tr>
                                        @endif																	
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td valign="bottom"><img src="{{asset('images/images/lyric_bg.jpg')}}" border="0"></td>
                            </tr>
                        </table>
                    </td>
                    <td height="100%">
                        <table border="0" cellpadding="0" cellspacing="0" class="right_menu_table" height="100%" background="{{asset('images/images/lyric_right_bg.gif')}}" style="background-repeat:repeat-y">
                            <tr>
                                <td valign="bottom"><img src="{{asset('images/images/lyric_3.gif')}}" border="0"></td>
                            </tr>	
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
@endsection