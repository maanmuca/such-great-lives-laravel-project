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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading">Photos</h2>
            </div>
        </div>
        <div class="row">
            @if (count($arrayUrl) > 0)
                @foreach($arrayUrl as $url)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nopadding">
                        <div class="hovereffect">
                            <img  width="250" height="250"  src="{{$url}}" alt="">
                            <div class="overlay">
                                <p>
                                <a href="album.html"><h5>Album Such</h5></a>
                                <p>Share on</p>
                                <a href="#"><i class="fa fa-facebook"  aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus"  aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection