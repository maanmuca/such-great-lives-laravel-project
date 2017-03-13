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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-heading">Contact us</h2>
            </div>
        </div>
     
        <div class="row">
            <div class="col-md-offset-3 col-md-6 form-contact"> 
                
                 @if(notify()->ready())
                 <div class="alert alert-success text-center">
                         {{notify()->message()}}
                     </div>
                @endif
                
                <form action="{{url('contact')}}" method="POST" role="form"> 
                     {!! csrf_field() !!}
                     
                     <div class="form-group" @if ($errors->has('name')) has-error @endif>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" 
                               value="{{ Request::old('name') }}">
                        @if ($errors->has('name'))
                        <p class="help-block">{{ $errors->first('name') }}</p> 
                        @endif
                    </div>
                    
                    <div class="form-group" @if ($errors->has('email')) has-error @endif>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" 
                               value="{{ Request::old('email') }}">
                        @if ($errors->has('email'))
                        <p class="help-block">{{ $errors->first('email') }}</p> 
                        @endif
                    </div>
                    
                    <div class="form-group" @if ($errors->has('subject')) has-error @endif>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" 
                               value="{{ Request::old('subject') }}">
                        @if ($errors->has('subject'))
                        <p class="help-block">{{ $errors->first('subject') }}</p> 
                        @endif
                    </div>
                    
                    <div class="form-group" @if ($errors->has('message')) has-error @endif>
                        <textarea class="form-control" type="textarea" id="message" name="message" 
                                  placeholder="Message" rows="7"
                                  value="{{ Request::old('message') }}">
                        </textarea>
                        @if ($errors->has('message'))
                        <p class="help-block">{{ $errors->first('message') }}</p> 
                        @endif
                    </div>  
                
                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right btn-submit">
                            Send Message</button>  
                    </div>
                     
             </form>

            </div>
        </div>
        
    </div>
</section>
@endsection