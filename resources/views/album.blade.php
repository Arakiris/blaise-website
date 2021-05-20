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
                            @include('partials/album_content')
                        </td>
                        <td>
                            @include('partials/album_menu')
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
            <audio id="audio" controls style="display: none;">
                <source src="" type="audio/mpeg">
                Votre navigateur ne prend pas en charge l'audio HTML.
            </audio>
    </body>
@endsection

@section('scripts')
    <script language="JavaScript" src="{{asset('js/large_image.js')}}"></script>
    <script language="JavaScript" src="{{asset('js/boxover.js')}}"></script>
    <script type="text/javascript">
        let song_array = @json($play_song);
        let play = {{ $play }};
        let asset = "{{ asset('storage/images/images_store/') }}/";
        let i = 0;

        if (play)
            audio_player();

        function audio_player() {
            let audio = document.getElementById('audio');
            audio.src = asset + song_array[0];
            audio.load();
            audio.play();

            audio.addEventListener('ended', () => {
                i++;
                audioPlayer = document.getElementById('audio');
                audioPlayer.src = asset + song_array[i];;
                audioPLayer.load();
                audioPlayer.play();

                if (i == (song_array.length - 1)) 
                    i = 0;
            }, false);
        }
    </script>
@endsection