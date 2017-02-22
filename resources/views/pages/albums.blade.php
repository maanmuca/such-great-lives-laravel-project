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
    <div class="container" id="topAlbums">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">Albums</h2>
            </div>
        </div>
        <div class="row">
            @if (count($albums) > 0)
                @foreach($albums['albums'] as $album)
                    <a href="photos/{{$album['id']}}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="hovereffect">
                                <img src="{{$album['photos'][0]['images'][1]['source']}}" height="250" width="250"/>
                                <div class="overlay">
                                    <p>
                                   <h5>{{$album['name']}}</h5>
                                    <p>Share on</p>
                                    </p>
                                </div>
                            </div>
                            <div class="buttonsAlbum text-center">
                                <div class="btn btn-primary" data-href="https://www.facebook.com/suchgreatlives/" data-layout="button_count" data-toggle="tooltip" title="Share on Facebook" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsuchgreatlives%2F&amp;src=sdkpreparse"><i class="fa fa-facebook myFacebookShareButton" aria-hidden="true"></i></a></div>
                                <a class="btn btn-primary" href="#topAlbums" data-toggle="tooltip" title="Back to the top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                <a class="btn btn-primary" href="{{url('/')}}" data-toggle="tooltip" title="Back to the home Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection