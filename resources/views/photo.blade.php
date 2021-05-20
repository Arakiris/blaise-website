@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/thumbnailviewer.css')}}">
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
                    <td>
                    <td width="100%">
                        @include('partials/photo_content')
                    </td>
                    <td>
                        @include('partials/photo_menu')
                    </td>
                    <td>
                        @include('partials/right')
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="visitor" valign="bottom"><div align="center" class="visitor">Hiện có <strong>{$UIVAR.CountOnlineVisitor}</strong> người xem / <strong>{$UIVAR.CountVisitor}</strong> lần xem</div></td>	
                </tr>			
            </table>
        </center>
    </body>
@endsection

@section('scripts')
    <script language="JavaScript" src="{{asset('js/large_image1.js')}}"></script>
    <script language="JavaScript" src="{{asset('js/thumbnailviewer.js')}}"></script>
@endsection