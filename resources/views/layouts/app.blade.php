<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Nhacminhson') }}</title>

        <meta name="description" content="nhac, am nhac, tinh khuc, tinh ca, nhac khuc, sang tac, que huong, mien Nam, ca khuc, minh son, nhac si">
        <meta name="keywords" content="nhac, am nhac, tinh khuc, tinh ca, nhac khuc, sang tac, que huong, mien Nam, ca khuc, minh son, nhac si">

        @yield('styles')
    </head>

    @yield('content')
    
    @yield('scripts')
</html>