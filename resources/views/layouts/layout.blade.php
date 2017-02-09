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
        <link rel="shortcut icon" href="{{URL::asset('images/mini-logo.png')}}">
        <script>
            window.Laravel =
            <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    
    <body>
        <a href="#" id="menu-slider">
            <i class="fa fa-bars text-center" aria-hidden="true"></i></a>
        
        <div id="mySidenav" class=" sidenav">
            <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
            <li><a class="currentNavPage" href="{{url('/')}}">Home</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#about">About</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#news">News</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#shows">Shows</a></li>
            <li><a class="currentNavPage" href="{{url('/albums')}}">Photos</a></li>
            <li><a class="currentNavPage" href="{{url('/videos')}}">Videos</a></li>
            <li><a class="currentNavPage" href="{{url('/releases')}}">Releases</a></li>
            <li><a class="currentNavPage" href="{{url('/game')}}">Game</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#links">Links</a></li>
            <li><a class="currentNavPage" href="{{url('/contact')}}">Contact</a></li>
        </div>
        <div id="main">
            @yield('content')     
        </div>
        <!------------------------------------------footer contents ---------------------------->       
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class=" col-md-offset-3 col-md-3 col-sm-6">
                        <h5>FIND US</h5>
                        <p><i class="fa fa-map-pin"></i> Melbourne. Australia</p>
                        <p><i class="fa fa-envelope"></i> E-mail : info@suchgreatlives.com</p>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-media">
                        <br /><br />
                            <a href="{{url('/subscribe')}}"><i class="fa fa-envelope-open fa-2x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/106986527777902815660">
                            <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                        <br /><br />
                    </div>
                    <div class=" col-md-2 col-sm-6 pull-left">
                         <h5>OUR SITE</h5>
                        <ul class="footer-links">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/albums')}}">Photos</a></li>
                            <li><a href="{{url('/videos')}}">Videos</a></li>
                            <li><a href="{{url('/releases')}}">Releases</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </footer>
        <!------------------------------------------footer black block ---------------------------->
        
        <div class="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p>COPYRIGHT &copy; 2017 | SUCH GREAT LIVES | ALL RIGHTS RESERVED</p>
                </div>
                <div class="col-md-6">
                    <ul class="authors">
                        <li>Site</li>
                        <li>Design</li>
                        <li>Marco Munoz</li>
                        <li>Paola Sanabria</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!------------------------------------------scripts ---------------------------->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                accesskey=""integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
    </body>
</html>
