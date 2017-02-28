<!--
  Name: photos.blade.php
  Authors: Marco Munoz
           Paola Sanabria 
  Description: View of releases page
  Date:08/02/2017
  Version: 1.0
-->
     
@extends('layouts.layout')
@section('content')

<div id="bg_hd_releases">
    <div class="container-fluid">
        
        <div class="row pull-right header-media">
            <div class="col-lg-12 header-icons">
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="{{url('/')}}">
                    <img src="{{URL::asset('images/logo_header.png')}}"
                         class="center-block logo_header"  alt="logo"></a>
            </div>
        </div>
        
    </div>
</div>      
    
<section id="" class="section-pink">
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
                <h2 class="section-heading">RELEASES</h2>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <h4 class="sub-heading">3.3</h4>
                <h5>[ SOON ]</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <img src='images/3.3.png' alt="" class="img-responsive">          
            </div>
                
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <p class="text-justify">Our forthcoming album is brimming with 
                    originality. It is set to feature such live
                    favourites as NO RETREAT, NIEN NUNB, and SMARTPHONE. </p>
                <p class="text-justify"> Please stay tuned! </p>
                <ol class="songs pull-left">
                    <li>Waiting For Episode 7</li>
                    <li>Life Coach</li>
                    <li>When I Turn 40</li>
                    <li>I'm Starving</li>
                    <li>Purple Poem</li>
                    <li>For My Health</li>
                    <li>El Turco</li>
                    <li>I Told 'Em</li>
                    <li>Blamer</li>
                    <li>Means So Much To Me</li>
                    <li>Smartphone</li>
                    <li>Nien Nunb</li>
                    <li>Reading Renee</li>
                </ol>
                    
                <ul class="mins pull-right">
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>
                    <li>(3.33)</li>    
                </ul>
            </div>
        </div>
            
    </div>
</section>
<section id="" class="section-blue">
    <div class="container-fluid">
        
          
        <div class="row">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <h4 class="sub-heading">THE MANIA</h4>
                <h5>[ 2014 ]</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <img src='images/mania.png' alt="" class="img-responsive">          
            </div>
                
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <p class="text-justify">Recorded at Jon's House in the long 
                    Australian winter of 2014. Drums kindly provided by
                    David LLoyd. </p>
                <p  class="text-justify">This is the big one folks! Our best album. 
                    It deserves to be on your shelf!
                </p>
                <ol class="songs pull-left">
                    <li>I'll Take You To The Bush</li>
                    <li>Girls Of The World</li>
                    <li>Stan's Van</li>
                    <li>Quick Brown Fox</li>
                    <li>Gezellig</li>
                    <li>Purple Parliament </li>
                    <li>It's Not Fair   </li>
                    <li>Coxy Don't Do It </li>
                    <li>Pescaterian Paradise</li>
                    <li>David Knight</li>
                    <li>Marty Go Wild</li>
                    <li>Fucking The Amazon</li>
                    <li>Write A List</li>
                    <li>Always The Towel</li>
                </ol> 
                     
                <ul class="mins pull-right">
                    <li>(3.15)</li>
                    <li>(3.07)</li>
                    <li>(3.45)</li>
                    <li>(3.01)</li>
                    <li>(2.53)</li>
                    <li>(2.57)</li>
                    <li>(4.35)</li>
                    <li>(2.57)</li>
                    <li>(3.12)</li>
                    <li>(0.55)</li>
                    <li>(3.36)</li>
                    <li>(3.48)</li>
                    <li>(3.44)</li>
                    <li>(1.44)</li>    
                </ul>
            </div>
        </div>
            
    </div>
</section>
      
<section id="" class="section-red">
    <div class="container-fluid">          
        <div class="row">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <h4 class="sub-heading">WHAT A CACK!</h4>
                <h5>[ 2011 ]</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <img src='images/what_a_cack.png' alt="" class="img-responsive">          
            </div>
            
            <div class="col-md-offset-1 col-md-4 col-sm-4 releases-wrapper">
                <p class="text-justify">Why not purchase our first album? 
                    You know most of the songs already. There are no drums and a 
                    bit of noise on the masters, but there's also a real lot of 
                    fun to be had. Many numbers are staples of our live set even 
                    to this day. 
                </p>
                <ol class="songs pull-left">
                    <li>Don't Be A Stranger</li>
                    <li>Kitchen Table</li>
                    <li>Szabology</li>
                    <li>UVPPP</li>
                    <li>Keeps Us Strong</li>
                    <li>Sexy Secretary</li>
                    <li>Got A New Girlfriend Today</li>
                    <li>I'm Like A Bear</li>
                    <li>Zarva</li>
                    <li>Run For Roses</li>
                    <li>Dutch Oven Engines</li>
                    <li>Trivia Nights (Take The Piss)</li>
                    <li> All Things Considered</li>
                    <li>Lieverd</li>
                    <li>33.3 </li>
                    <li>Pleasure</li>
                    <li>John's Schlong (Purple Pineapple)</li>
                </ol> 
                    
                <ul class="mins pull-right">
                    <li>(2.15)</li>
                    <li>(2.42)</li>
                    <li>(3.41)</li>
                    <li>(3.11)</li>
                    <li>(2.20)</li>
                    <li>(2.42)</li>
                    <li>(3.45)</li>
                    <li>(1.50)</li>
                    <li>(1.41)</li>
                    <li>(2.43)</li>
                    <li>(3.12)</li>
                    <li>(2.25)</li>
                    <li>(3.13)</li>
                    <li>(2.46)</li>
                    <li>(2.33)</li>
                    <li> (2.57)</li>
                    <li>(0.56)</li>
                </ul>
            </div>
                
        </div>
    </div>
</section>
@endsection