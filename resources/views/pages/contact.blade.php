<!--
  Name: photos.blade.php
  Authors: Marco Munoz
           Paola Sanabria 
  Description: View of contact page
  Date:08/02/2017
  Version: 1.0
-->

@extends('layouts.layout')
@section('content')
<div id="bg_hd_contact">
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
                <h2 class="section-heading">Contact us</h2>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-offset-3 col-md-6 form-contact">  
                <form role="form">        
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7">
                        </textarea>
                    </div>          
                </form>

                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right btn-submit">Submit</button>     
            </div>
        </div>
    </div>
</section>
@endsection