<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <ul class="navbar">
        <li><a href="/home">Home</a></li>
        <li><a href="/about">About</a></li>
        <li class="navkanan"><a href="/tp" style="color:blue;">Tugas Pendahuluan 6</a></li>
    </ul>
    <hr>
    <div class="judul">
        @yield('judul')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

  

    
    