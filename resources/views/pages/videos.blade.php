@extends('layouts.layout')
@section('content')     


 <iframe 
    src="https://www.youtube.com/embed/KpkJtkNEGSk?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" 
    allowfullscreen class="fullscreen-video" id="myVideo">   
</iframe> 
               

<section id="" class="section-dark-blue">
    <div class="container-fluid"> <!-- ---------------------------------must be fluid--->
        
         <div class="row pull-right">
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
                <h2 class="section-heading">Videos</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-offset-1 col-md-10"> 
                <div class="row text-center">
                    <div id="myThumbnails">    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection