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
                        @include('partials/contact_content')
                    </td>
                    <td>
                        @include('partials/contact_menu')
                    </td>
                    <td>
                        @include('partials/right')
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="visitor" valign="bottom">
                        <div align="center" class="visitor">Hiện có <strong>{{ $visitors }}</strong> người xem / <strong>{{ $count_visitor->quantity }}</strong> lần xem</div>					
                    </td>
                </tr>			
            </table>
        </center>
    </body>    
@endsection