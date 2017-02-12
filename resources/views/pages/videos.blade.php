@extends('layouts.layout')
@section('content')
    <div class="container mainVideoContainer">
        <div class="row text-center">
            <iframe width="896" height="495" src="https://www.youtube.com/embed/KpkJtkNEGSk?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" id="myVideo" frameborder="5" allowfullscreen></iframe>
        </div>
        <div class="row text-center">
            <div id="myThumbnails"></div>
        </div>
    </div>
@endsection