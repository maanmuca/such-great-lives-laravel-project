<!--
  Name: photos.blade.php
  Authors: Marco Munoz
           Paola Sanabria 
  Description: View of photos page, comes from albums
  Date:08/02/2017
  Version: 1.0
 -->

@extends('layouts.layout')
@section('content')
    <div class="container text-center" id="topPhotos">

        <div class="row text-center">

                @foreach($photos['photos'] as $photo)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 photos-class text-center">
                    <img  src="{{$photo['images'][2]['source']}}"/>
                    <div class="buttonsPhotos text-center">
                        <div class="btn btn-primary" data-href="https://www.facebook.com/suchgreatlives/" data-layout="button_count" data-toggle="tooltip" title="Share on Facebook" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsuchgreatlives%2F&amp;src=sdkpreparse"><i class="fa fa-facebook myFacebookShareButton" aria-hidden="true"></i></a></div>
                        <a class="btn btn-primary" href="#topPhotos" data-toggle="tooltip" title="Back to the top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                        <a class="btn btn-primary" href="{{url('/albums')}}" data-toggle="tooltip" title="Back to the Album's Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
@endsection