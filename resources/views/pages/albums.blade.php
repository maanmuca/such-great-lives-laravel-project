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
            @if (count($albums) > 0)
                @foreach($albums['albums'] as $album)
                    <a href="photos/{{$album['id']}}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="hovereffect" >
                                <div class="overlay" style="background-image: url({{$album['photos'][0]['images'][1]['source']}})">
                                   
                                   <h5>{{$album['name']}}</h5>
                                   <p>Share on</p>
                                   <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsuchgreatlives%2F&amp;src=sdkpreparse">
                                       <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection