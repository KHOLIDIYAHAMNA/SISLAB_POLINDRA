<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'default'}}</title>
</head>
<body>
    @yield('content')
    @include('componen/navbar')
    @include('componen/sidebar')
</body>
</html>