<!--
  Name: photos.blade.php
  Authors: Marco Munoz
           Paola Sanabria 
  Description: View game page
  Date:08/02/2017
  Version: 1.0
-->
     
@extends('layouts.layout')
@section('content')
    
<div id="bg_hd_game">
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
            
         <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="{{url('/')}}">
                    <img src="{{URL::asset('images/logo_header.png')}}"
                         class="center-block logo_header"  alt="logo"></a>
            </div>
        </div>
        
        
    </div>
</div>      
    
<section id="" class="section-dark-blue">
    <div class="container-fluid"> <!-- ---------------------------------must be fluid--->
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
            <div class="col-lg-12">
                <h2 class="section-heading">GAME</h2>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12">  
                <p>Comming Soon!</p>
            </div>
        </div>
    </div>
</section>
     

@endsection