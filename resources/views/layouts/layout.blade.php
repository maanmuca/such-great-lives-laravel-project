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
        
        <title>Such Great Lives - Official Website</title>
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
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1858518364430034";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <a href="#" id="menu-slider">
            <i class="fa fa-bars text-center" aria-hidden="true"></i></a>
        <div id="mySidenav" class="sidenav">
<!--            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
            <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
            <li><a class="currentNavPage" href="{{url('/')}}">HOME</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#about">ABOUT</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#news">NEWS</a></li>
            <li><a class="currentNavPage" href="{{url('/')}}#shows">SHOWS</a></li>
            <li><a class="currentNavPage" href="{{url('/albums')}}">PHOTOS</a></li>
            <li><a class="currentNavPage" href="{{url('/videos')}}">VIDEOS</a></li>
            <li><a class="currentNavPage" href="{{url('/releases')}}">RELEASES</a></li>
            <!--            <li><a class="currentNavPage" href="{{url('/game')}}">GAME</a></li>-->
            <li><a class="currentNavPage" href="{{url('/')}}#links">LINKS</a></li>
            <li><a class="currentNavPage" href="{{url('/contact')}}">CONTACT</a></li>
        </div>
        <div id="main">
            @yield('content')     
        </div>
        <!------------------------------------------footer contents ---------------------------->       
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class=" ft-contact col-md-offset-3 col-md-3 col-sm-offset-1 col-sm-4">
                        <h5>FIND US</h5>
                        <p><a href="mailto:info@suchgreatlives.com" class="phone-link"><i class="fa fa-envelope footer-icon">
                                </i> E-mail : band@suchgreatlives.com</p>
                        <p><a href="{{url('/contact')}}" class="phone-link">
                                <i class="fa fa-phone footer-icon"></i>Contact us</a></p>
                        <p><i class="fa fa-map-pin footer-icon"></i> Melbourne. Australia</p>
                    </div>
                    <div class="col-md-3 col-sm-4 footer-media">
                        <br /><br />
                        <a href="https://www.facebook.com/suchgreatlives">
                            <i class="fa fa-facebook fa-2x" aria-hidden="true" data-toggle="tooltip" title="Facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true" data-toggle="tooltip" title="YouTube"></i></a>
                        <a href="https://plus.google.com/106986527777902815660">
                            <i class="fa fa-google-plus fa-2x" aria-hidden="true" data-toggle="tooltip" title="Google+"></i></a>
                        <br /><br />
                    </div>
                    <div class=" col-md-2 col-sm-3 pull-left">
                        <h5 class="align-title">OUR SITE</h5>
                        <table class="footer-links">
                            <tbody>
                                <tr>
                                    <td><a href="{{url('/')}}">Home</a></td>
                                    <td><a href="{{url('/videos')}}">Videos</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/')}}#about">About</a></td> 
                                    <td><a href="{{url('/releases')}}">Releases</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/')}}#news">News</a></td>
                                    <td><a href="{{url('/')}}#links">Links</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/')}}#shows">Shows</a></td>
                                    <td><a href="{{url('/contact')}}">Contact</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/albums')}}">Photos</a></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
        </footer>
        <!------------------------------------------footer black block ---------------------------->
        
        <div class="copyright">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <p>COPYRIGHT &copy; 2017 | SUCH GREAT LIVES </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6">
                        <p>SITE | DESIGN | MARCO MUNOZ | PAOLA SANABRIA</p>
                    </div>
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
