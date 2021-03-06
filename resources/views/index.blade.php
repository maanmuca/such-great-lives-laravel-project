@extends('layouts.layout')
@section('content')

<!-------------------------------- Intro -----------------------------------*-->

<div id="intro">
    <div class="container-fluid">
        
       <div class="row pull-right hd-media-index">
            <div class="col-lg-12 hd-icons-index">
                <a href="https://www.facebook.com/suchgreatlives">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                    <i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/106986527777902815660">
                    <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
          
           <!--  Logo image-->
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{url('/')}}">
                    <img src="{{URL::asset('images/logo_index.png')}}"
                         class="center-block logo_index"  alt="logo"></a>
            </div>
        </div>
            
        <div class="row section-intro">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 text-center">
                <a href="{{url('/videos')}}"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                    <img src="{{URL::asset('images/videos.png')}}" class="bigIcons"   alt="videos">
                </a>
                <a href="{{url('/releases')}}"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                    <img src="{{URL::asset('images/music.png')}}"  class="bigIcons"   alt="releases">
                </a>
                <a href="{{url('/albums')}}"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4"  >
                    <img src="{{URL::asset('images/images.png')}}" class= "bigIcons"   alt="gallery">
                </a>
            </div>
   
        </div>
    </div>
</div>  

<!-------------------------------- Section News ------------------------------*-->

<section id="news" class="section-dark-blue">
    <div class="container-fluid">
        
        <div class="row pull-right media">
            <div class="col-lg-12 icons-group">
                <a href="https://www.facebook.com/suchgreatlives">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                    <i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/106986527777902815660">
                    <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">NEWS</h2>
            </div>
        </div>
            
        <div class="row">
            <div class="col-lg-12">
                <?php
                    //var_dump($posts['posts']);

                    foreach ($posts['posts'] as $post)
                    {
                        if (!array_key_exists('message', $post))
                        {
                            continue;
                        }
                        else
                        {
                            echo "<hr>";
                            $pieces = explode(" ", $post['created_time']['date']);
                            echo "<dl>".$pieces[0]."</dl>";
                            echo "<dl>".$post['message']."</dl>";
                        }
                    }

                ?>
            </div>
            
        </div>
    </div> 
</section>

<!-------------------------------- Section About ------------------------------*-->
<section id="about" class="section-blue">
    <div class="container-fluid">
        
        <div class="row pull-right media">
            <div class="col-lg-12 icons-group">
                <a href="https://www.facebook.com/suchgreatlives">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                    <i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/106986527777902815660">
                    <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-heading">ABOUT US</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <p class="text-justify">In 2010 Michael and Jon came together 
                    after a mutual friend pointed out they both were both prolific 
                    authors of great bedroom pop-rock songs.  
                    After a few misfires - including Jon presenting some folky 
                    material - Michael finished off Jon's 'Don't Be a Stranger', 
                    followed quite soon after by "Kitchen Table".  More and more 
                    tunes popped out. A partnership was born.</p>
                    
                <p class="text-justify"> Matt - formerly of Michael's old group 
                    Beautiful Disaster - joined ship in late 2015 and they were 
                    on their way to the open mics!</p>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 about-wrapper">
                <img src='images/jon.png' alt="" class="img-responsive">
                <div>
                    <h4 class="sub-heading">JON</h4>
                </div>
                <p class="text-justify">Jon is our rhythm guitarist and lead singer. 
                    He relishes being on stage but is the infant of the group.
                    Since his early 20's he's been sitting at home in the dark 
                    writing some magical tunes.</p>
                <p class="text-justify">He loves the
                    Fauves and lives with his Lovely Latina wife.
                </p>
            </div>
            <div class="col-md-4 col-sm-4 about-wrapper">
                <img src='images/michael.png' alt="" class="img-responsive">
                <div>
                    <h4 class="sub-heading">MICHAEL</h4>
                </div>
                <p class="text-justify">Michael is our five-string fretless bassist 
                    and lead singer! He is always present with his purple energy. 
                    The band's leader grew up in Canberra but has been all around 
                    the world, rock-climbing and learning Spanish. Michael has sung, 
                    played and recorded music since the mid-1990s.
                </p>
            </div>
            <div class="col-md-4 col-sm-4 about-wrapper">
                <img src='images/matt.png' alt="" class="img-responsive">
                <div>
                    <h4 class="sub-heading">MATT</h4>
                </div>
                <p class="text-justify">Matt is our drummer and enduring backing 
                    vocalist. He points out our boring tunes and embellishes all 
                    the good ones with his kit. Our number one fan, he gets us 
                    access to our rehearsal space and is always in a positive mood.
                </p>
            </div>
                
        </div>
    </div>
    
</section>

<!-------------------------------- Section Shows ------------------------------*-->
<section id="shows" class="section-purple">
    <div class="container-fluid shows">
        
        <div class="row pull-right media">
            <div class="col-lg-12 icons-group">
                <a href="https://www.facebook.com/suchgreatlives">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                    <i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/106986527777902815660">
                    <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-heading">SHOWS</h2>
            </div>
        </div>
        
        <div class="row" id="upcomingShows" >
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
                <table class="table table-condensed text-center upcomingShowsTable" >
                    <thead>
                        <tr>
                            <th>City/Town</th>
                            <th>Location</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TBA</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Melbourne</td>
                            <td>Cherry Bar, AC/DC Lane</td>
                            <td>16 January 2017</td>
                        </tr>
                        <tr>
                            <td>Melbourne</td>
                            <td>Cherry Bar, AC/DC Lane</td>
                            <td>5 December 2016</td>
                        </tr>
                        <tr>
                            <td>Melbourne</td>
                            <td>Mr Boogie Man, 160 Hoddle Street, Abbotsford</td>
                            <td>6 July 2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-------------------------------- Section crawl star wars ------------------------------*-->
<section id="crawl">
    <div class="container-fluid">
        
        <div class="row text-center">
            <div class="star-wars-intro">
                <p class="intro-text">
                    <strong>It is a time of great drought!</strong>
                </p>
                <h2 class="main-logo">
                    <img src="{{URL::asset('images/sgllogostarwars.png')}}">
                </h2>
                <div class="main-content">
                    <div class="title-content">
                        <p class="content-header"><br>www.suchgreatlives.com</p>
                        <br>
                        <p class="content-body">
                        <div class="row text-center ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 starwarsSglTitle">
                                <img src="{{URL::asset('images/sgllogostarwars.png')}}" class="img-responsive">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 ">
                                
                                <p>The evil Galactic Empire has hunted all the Feel-Good Rock Bands into extinction.
                                    Emerging from hibernation SUCH GREAT LIVES has emerged to fill a gap.</p>
                                <br/>
                                <p>With only guitar, bass, drums and vocals they head across the galaxy with
                                    their collection of short, melodic, and humorous songs. No lyrical introspection,
                                    no grandiose soloing, no half-hearted commitment.</p>
                                <br/>
                                <p>Come and see SUCH GREAT LIVES at their latest gig. Before the Empire shuts them down.</p>
                                <br/>
                                <center>Follow us on:</center>
                                
                            </div>
                            <div class="col-lg-12 socialMediaLinksDark text-center">
                                <a href="https://www.facebook.com/suchgreatlives">
                                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                                    <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                                <a href="https://plus.google.com/106986527777902815660">
                                    <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                            </div>
                                
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------------- Section Links ------------------------------*-->
<section id="links" class="section-dark-blue">
    <div class="container-fluid">
        
        <div class="row pull-right media">
            <div class="col-lg-12 icons-group">
                <a href="https://www.facebook.com/suchgreatlives">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCd6sEEFIAg7SPoM5fBujc8g">
                    <i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/106986527777902815660">
                    <i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
            
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-heading">LINKS</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-5 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
                <p>And more on our Such Great Lives singers YouTube channel here: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-2 col-xs-10 col-sm-offset-1">
                <ul>
                    <li>
                        <a href="https://www.youtube.com/user/szabologist">
                            <i class="fa fa-youtube fa-2x links-icons" aria-hidden="true">   
                            </i>Szabologist Channel</a>
                    </li>
                    <li><a href="https://www.youtube.com/user/Bamptonoid">
                            <i class="fa fa-youtube fa-2x links-icons" aria-hidden="true">     
                            </i>Bamptonoid Channel</a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCTdf_tRogxxn3VTx7IK671Q">
                            <i class="fa fa-youtube fa-2x links-icons" aria-hidden="true">
                            </i>Mr Clean Channel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection