<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">

        <title>Vespa Balap Indonesia - Indonesian Vespa Racing </title>
        <link rel="icon" href="{{URL::asset('favicon.ico')}}">
        <!-- Bootstrap core CSS -->
        {!! Html::style('/layout/css/bootstrap-superhero-theme.min.css') !!}

        <!-- Bootstrap costom -->
        {!! Html::style('/layout/css/costom.css') !!}
        {!! Html::style('/layout/css/standing.css') !!}
        {!! Html::style('/layout/css/berita.css') !!}
        {!! Html::style('/layout/css/form.css') !!}
        {!! Html::style('/layout/css/teamrider.css') !!}
        {!! Html::style('/layout/css/video.css') !!}
        {!! Html::style('/layout/css/hasil.css') !!}

        <!-- Bootstrap Calendar -->
        {!! Html::style('/layout/css/responsive-calendar.css') !!}

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        {!! Html::style('/layout/css/ie10-viewport-bug-workaround.css') !!}

        <!-- Custom styles for this template -->
        {!! Html::style('/layout/css/navbar-fixed-top.css') !!}

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        {!! Html::script('/layout/js/ie-emulation-modes-warning.js') !!}
        
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <img src="{{URL::asset('/layout/images/VespaBalapIndonesiaOfficialLogo.png')}}" width="100px">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{URL::asset('/')}}"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li class="{{ Request::is('chat') ? 'active' : '' }}"><a href="{{URL::asset('/chat')}}"><i class="glyphicon glyphicon-comment"></i> Chat</a></li>
                        <li class="dropdown {{ Request::is('hasil') ? 'active' : '' }} {{ Request::is('jadwal') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="glyphicon glyphicon-screenshot"></i> Race <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::asset('/regulasi')}}"><i class="glyphicon glyphicon-book"></i> Regulasi</a></li>
                                <li><a href="{{URL::asset('/hasil')}}"><i class="glyphicon glyphicon-star"></i> Hasil</a></li>
                                <li><a href="{{URL::asset('/jadwal')}}"><i class="glyphicon glyphicon-calendar"></i> Jadwal</a></li>
                                <li><a href="{{URL::asset('/tambahjadwal')}}"><i class="glyphicon glyphicon-calendar"></i> Tambah Jadwal</a></li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('album') ? 'active' : '' }} {{ Request::is('video') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="glyphicon glyphicon-picture"></i> Galeri <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::asset('/album')}}"><i class="glyphicon glyphicon-camera"></i> Photo</a></li>
                                <li><a href="{{URL::asset('/video')}}"><i class="glyphicon glyphicon-facetime-video"></i> Video</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('berita') ? 'active' : '' }}"><a href="{{URL::asset('/berita')}}"><i class="glyphicon glyphicon-signal"></i> Berita</a></li>
                        <li class="{{ Request::is('team') ? 'active' : '' }} {{ Request::is('teamdetail') ? 'active' : '' }}"><a href="{{URL::asset('/team')}}"><i class="glyphicon glyphicon-th-list"></i> Team    </a></li>
                        <li class="{{ Request::is('region') ? 'active' : '' }}"><a href="{{URL::asset('/region')}}"><i class="glyphicon glyphicon-globe"></i> Region</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="{{ Request::is('profil') ? 'active' : '' }}"><a href="{{URL::asset('/profil')}}"><i class="glyphicon glyphicon-user"></i> Profil</a></li>
                        <li class="dropdown {{ Request::is('album') ? 'active' : '' }} {{ Request::is('video') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="glyphicon glyphicon-cog"></i> Akun <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Ubah Profil</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-plane"></i> Keluar</a></li>
                            </ul>
                        </li> -->
                        <li class="{{ Request::is('daftar') ? 'active' : '' }}"><a href="{{URL::asset('/daftar')}}"><i class="glyphicon glyphicon-plus"></i> Daftar</a></li>
                        <li class="{{ Request::is('masuk') ? 'active' : '' }}"><a href="{{URL::asset('/masuk')}}"><i class="glyphicon glyphicon-play"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('container')

        <!-- Javascript -->
        {!! Html::script('/layout/js/jquery-1-11-3.js') !!}
        {!! Html::script('/layout/js/bootstrap.min.js') !!}

        <!-- Javascript Costom -->
        {!! Html::script('/layout/js/photo.js') !!}
    </script>
</body>
</html>
