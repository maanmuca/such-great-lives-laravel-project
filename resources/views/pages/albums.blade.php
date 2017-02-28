<!--
  Name: photos.blade.php
  Authors: Marco Munoz
           Paola Sanabria 
  Description: View of photos page - displays albums from facebook account
  Date:08/02/2017
  Version: 1.0
-->

@extends('layouts.layout')
@section('content')
     
<section id="links" class="section-nocolor">
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
                <h2 class="section-heading">OUR ALBUMS</h2>
            </div>
        </div>
            
            <div class="container" id="topAlbums">
           
            <div class="row text-center">
                @if (count($albums) > 0)
                @foreach($albums['albums'] as $album)
<<<<<<< HEAD
                    <a href="photos/{{$album['id']}}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="hovereffect">
                                <img src="{{$album['photos'][0]['images'][1]['source']}}"/>
                                <div class="overlay">
                                    <p>
                                    <h5>{{$album['name']}}</h5>
                                    <p>Share on</p>
                                    </p>
                                </div>
                            </div>
                            <div class="buttonsAlbum text-center">
                                <div class="btn btn-primary" data-href="https://www.facebook.com/suchgreatlives/" 
                                     data-layout="button_count" data-toggle="tooltip" title="Share on Facebook" 
                                     data-size="large" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" 
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsuchgreatlives%2F&amp;src=sdkpreparse">
                                        <i class="fa fa-facebook myFacebookShareButton" aria-hidden="true"></i></a>
                                </div>
=======
                <a href="photos/{{$album['id']}}">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 nopadding">
                        <div class="hovereffect" >
                            <div class="overlay" style="background-image: url({{$album['photos'][0]['images'][1]['source']}})">
                                <p>
                                <h6>{{$album['name']}}</h6>
                                <p>Share on</p>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsuchgreatlives%2F&amp;src=sdkpreparse">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </p>
>>>>>>> 23b9c331728ddd019f06eb0349f950fd0e24981f
                            </div>
                        </div>
                     
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
       
@endsection