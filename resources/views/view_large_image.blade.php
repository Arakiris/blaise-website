@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <style type="text/css">
        img
        {
            border:none;
        }
        .view_table
        {
            background-color:#F3FEF2;
        }
        
        .view_table td
        {
            color:#F4831D;
        }
        
        .view_large_album img
        {
            /*width:500px;*/
            height:600px;
        }
        
        .view_large_photo img
        {
            width:780px;
        }
        
        a.view_large_image_close
        {
            font-size:11px;
        }
        
        a.view_large_image_close:hover
        {
            color:#FF9933;
            font-size:11px;
        }
            
        td, th
        {
            font-family:"Times New Roman", Times, serif;
            font-size: 15px;
            line-height: 22px;
            color:#EAEEE9;
            text-align:left;
        }
        
        a
        {
            color: #99C194;
            text-decoration:none;
        }
        
        a:hover
        {
            color:#FEF971;
            text-decoration:underline;
        }		
    </style>
@endsection

@section('content')
    <body leftmargin="0" topmargin="0" bgcolor="#F3FEF2">
        <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="1" class="view_table">
            @if (!empty($current_product->largeImage))
                <tr>
                    <td style="padding-top:10px">		
                        <a href="#" onClick="window.close(); return false;">
                            @if ($type == "photo")
                                <div align="center" class="view_large_photo"><img src="{{asset('images/images_store/' . $current_product->largeImage)}}" border="0"></div>
                            @else
                                <div align="center" class="view_large_album"><img hspace="0" src="{{asset('images/images_store/' . $current_product->largeImage)}}" align="baseline" border="0" /></div>
                            @endif
                        </a>
                    </td>
                </tr>
            @endif
            
            @if (!empty($current_product->name))
                <tr>
                    <td><div align="center"><strong>{{$current_product->name}}</strong></div></td>
                </tr>
            @endif

            @if ($type == "photo" && !empty($current_product->description))
                <tr>
                    <td><div align="center">{{$current_product->description}}</div></td>
                </tr>
            @endif
            <tr>
                <td height="100%" valign="top"><div align="right"><a href="#" onClick="window.close(); return false;" class="view_large_image_close">[<strong>Đóng cửa sổ</strong>]</a></div></td>
            </tr>	
        </table>
    </body>
@endsection