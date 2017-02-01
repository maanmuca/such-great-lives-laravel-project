<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Welcome to the Official Website of such great lives">
    <meta name="keywords" content="such great life,melbourne,band,comedy rock,rock" />

    <meta name="author" content="Paola Sanabria & Marco Munoz">

    <title>Such great Lives - Official Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://use.fontawesome.com/fdb3ab1e60.js"></script>
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/starwarsintro.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('images/favicon.ico')}}">
    <script>
        window.Laravel =
        <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<a href="#" id="menu-slider"><i class="fa fa-bars text-center" aria-hidden="true"></i></a>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
    <li><a href="{{url('/welcome')}}">Home</a></li>
    <li><a class="page-scroll" href="{{url('/aboutUs')}}">About</a></li>
    <li><a class="page-scroll" href="{{url('/news')}}">News</a></li>
    <li><a class="page-scroll" href="{{url('/shows')}}">Shows</a></li>
    <li><a href="{{url('/photos')}}">Photos</a></li>
    <li><a href="{{url('/videos')}}">Videos</a></li>
    <li><a href="{{url('/releases')}}">Releases</a></li>
    <li><a href="{{url('/game')}}">Game</a></li>
    <li><a class="page-scroll" href="{{url('/links')}}">Links</a></li>
    <li><a href="{{url('/contact')}}">Contact</a></li>
</div>
<div id="main">
    @yield('content')
    <div class="container myNavigation">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid myFooter">
                        <p>Copyright &copy; 2016 - <a href="http://www.suchgreatlives.com/">www.suchgreatlives.com</a> | All Rights Reserved | Created by Paola Sanabria and Marco Munoz</p>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>



    <!-- /#page-content-wrapper -->
<!--<div class="container">
    <nav class="navbar navbar-inverse myNavbar">
        <div class="container-fluid ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse myNavbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/welcome') }}">Home</a></li>
                    <li><a href="{{ url('/aboutUs') }}">About us</a></li>
                    <li><a href="{{ url('/shows') }}">Shows</a></li>
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a href="{{ url('/photos') }}">Photos</a></li>
                    <li><a href="{{ url('/media') }}">Media</a></li>
                    <li><a href="{{ url('/subscribe') }}"><span class="glyphicon glyphicon-user"></span> Subcribe !</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
