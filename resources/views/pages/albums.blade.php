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
            @if (count($albums) > 0)
                @foreach($albums['albums'] as $album)
                    <a href="photos/{{$album['id']}}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="hovereffect">
                                <img src="{{$album['picture']['url']}}" height="250" width="250"/>
                                <div class="overlay">
                                    <p>
                                   <h5>{{$album['name']}}</h5>
                                    <p>Share on</p>
                                    <a href="#"><i class="fa fa-facebook"  aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"  aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection