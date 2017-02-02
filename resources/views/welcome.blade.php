@extends('layouts.layout')
@section('content')
    <div class="container intro" >
        <div class="row">
            <div class="col-lg-offset-9 col-md-offset-9 col-sm-offset-6 col-xs-offset-5 subscribe">
             <a href="{{url('/sbuscribe')}}">Subscribe !</a>
            </div>
        </div>
        <div class="row text-center">
        <img src="{{URL::asset('images/sgllogo_light.png')}}" id="sgl-logo" class="img-responsive center-block"  alt="logo">
        </div>
        <div class="row text-center">
            <div class="col-lg-12 socialMediaLinksDark text-center">
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row text-center">
            <a href="#"  data-toggle="tooltip" title="Videos !" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" ><img src="{{URL::asset('images/videos.png')}}" class=" center-block bigIcons"   alt="videos"></a>
            <a href="#"  data-toggle="tooltip" title="Releases !" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" ><img src="{{URL::asset('images/releases.png')}}"  class=" center-block bigIcons"   alt="releases"></a>
            <a href="#"  data-toggle="tooltip" title="Photos !" class="col-lg-4 col-md-4 col-sm-4 col-xs-4"  ><img src="{{URL::asset('images/gallery.png')}}" class= " center-block bigIcons"   alt="gallery"></a>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <h2 class="section-heading">About us</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-justify">Michael and Jon came together in 2010 after a mutual friend pointed out they both always put their money where there mouth was when it came to song-writing. After a few misfires - including Jon presenting some folky material - Michael finished off 'Don't Be A Stanger' followed quite soon by "Kitchen Table".
                    Soon, "Gotta Girlfriend Today" popped out. Easy. A paternership was born.</p>

                <p class="text-justify"> Matt, formerly of Michael's old band Beautiful Disaster, joined ship in late 2015 and they were on their way to the open mics!</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 col-sm-4">
                <!-- <img class=" img-responsive" src='images/jon.jpg' /> -->
                <img src="images/jon_02.png" class="img-responsive" id="singer">
                <h4 class="service-heading">Jon</h4>
                <p class="text-justify">Jon is our rhyhthm guitarist and lead singer. He relishes being on stage and is the infant of the group. He sits at home in the dark, however, and writes some magical tunes.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <img src='images/jon_02.png'  class="img-responsive"  />
                <h4 class="service-heading">Matt</h4>
                <p class="text-justify">Matt is our drummer and backing vocalist. He points out our boring tunes and embellishes the good ones around his drum kit. Our number one fan, he gets us access to
                    our rehearsal space and is always in a positive mood.
                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <img src='images/jon_02.png' class="img-responsive" />
                <h4 class="service-heading">Michael</h4>
                <p class="text-justify">Michael is our a five string frettless bassist and lead singer! He always presents with a lot of purple energy and commitment. Mike grew up in Canberra but
                    has been all around the world, rock-climbing and learning Spanish. Michael has sung, played and recorded music since the early 1990s.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 socialMediaLinksDark">
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="star-wars-intro">
                <p class="intro-text">
                   Such Great Lives Official Website...
                </p>
                <h2 class="main-logo">
                    <img src="{{URL::asset('images/sgllogostarwars.png')}}">
                </h2>
                <div class="main-content">
                    <div class="title-content">
                        <p class="content-header">Welcome People !<br>to www.suchgreatlives.com</p>
                        <br>
                        <p class="content-body">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 starwarsSglTitle">
                                    <img src="{{URL::asset('images/sgllogostarwars.png')}}" class="img-responsive">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 ">
                                After years of galactic silence, civilization is on the brink of more Star Wars movies. Now, with the Force already awaken, the people of Earth seek solace in creating websites, memes, and presentations that need the intro crawl we've come to know and love. Make cooler stuff, faster, with our simple CSS library for the Star Wars Intro Crawl. Follow us on :

                                </div>
                                <div class="col-lg-12 socialMediaLinksDark text-center">
                                    <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container sglNews">
            <div class="row text-center">
            <h2 class="section-heading">News</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-6 col-xs-12 "><h4 class="service-heading">Last Gig</h4>
                    <p class="text-justify">Jon is our rhyhthm guitarist and lead singer. He relishes being on stage and is the infant of the group. He sits at home in the dark, however, and writes some magical tunes.Jon is our rhyhthm guitarist and lead singer. He relishes being on stage and is the infant of the group. He sits at home in the dark, however, and writes some magical tunes.Jon is our rhyhthm guitarist and lead singer. He relishes being on stage and is the infant of the group. He sits at home in the dark, however, and writes some magical tunes.</p></div>
                <div class="col-md-6 col-lg-6  col-xs-12 "><img src="images/jon.jpg" class="img-thumbnail imageNews" alt="news"> </div>
            <div class="row">
                <div class="col-lg-12 socialMediaLinksDark">
                    <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>

            </div>
    </div>
    <div class="container shows">
        <div class="row text-center">
            <h2 class="section-heading">Shows</h2>
        </div>
        <div id="upcomingShows" class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ">
                <table class="table text-center upcomingShowsTable" >
                    <thead>
                    <tr>
                        <th>City/Town</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Melbourne</td>
                        <td>The palace</td>
                        <td>JAN/21/2017</td>
                    </tr>
                    <tr>
                        <td>Melbourne</td>
                        <td>Cherry Bar</td>
                        <td>FEB/03/2017</td>
                    </tr>
                    <tr>
                        <td>Melbourne</td>
                        <td>The palace</td>
                        <td>FEB/17/2017</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container sglMore">
        <div class="row text-center">
            <h2 class="section-heading">Links</h2>
        </div>
        <div class="row text-center">
            <p>And more on our suchgreatlives singers YOUTUBE channel here: </p>
        </div>
        <div class="row text-center">
                <ul>
                    <li>
                        <td><a href="https://www.youtube.com/user/szabologist">Szabologist Channel <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></td>
                    </li>
                    <li>
                        <td><a href="https://www.youtube.com/user/Bamptonoid">Bamptonoid Channel <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></td>
                    </li>
                    <li>
                        <td><a href="https://www.youtube.com/channel/UCTdf_tRogxxn3VTx7IK671Q">Such Great Lives Channel <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></td>
                    </li>
                </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 socialMediaLinksDark text-center">
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection