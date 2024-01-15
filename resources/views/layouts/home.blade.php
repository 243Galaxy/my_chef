<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>MyChef</title>
    @livewireStyles()
</head>
<body>
    <header>
        <nav class="nav-wrapper teal">
            <div class="container">
                <a href="{{ route('home') }}" style="font-size: 25px">
                    MyChef
                </a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down" style="font-weight: bolder">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="">Sign up</a></li>
                    <li><a href="">Login</a></li>
                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="">Sign up</a></li>
                    <li><a href="">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    {{ $slot }}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.scrollspy').scrollSpy();
    });
  </script>
  @livewireScripts()
</body>
</html>