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
<div class="jumbotron" id="bg_hd_contact">
    <nav class="navbar">
        <div class="container">
            
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger" id="menu-slider">Menu</span>
                    </a>
                </li>
            </ul>
                
            <ul class="nav navbar-nav navbar-right">
                <li><a href="subscribe.html"><span class=""></span> Subscribe</a></li>
            </ul>
        </div>  
    </nav>  
        
    <!--  Logo image-->
    <div class="row">
        <div class="col-sm-12"> 
            <div class="text-center">
                <a href="#">
                    <img src="images/such_great_lives_logo.png" class="logo_fluid" alt="Such great lives logo">
                </a>
            </div>
        </div>
    </div>
        
    <ol class="list-inline social-buttons pull-right">
        <li><a href="#"><i class="fa fa-youtube fa-2x aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-2x aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus fa-2x aria-hidden="true"></i></a></li>
    </ol>  
</div>

<div class="row text-center">
    <h2 class="section-heading">Contact</h2>
</div>
    
<div class="row">
    <div class="col-lg-5">
        <h2 class="section-heading">Contact us</h2>        
    </div>
</div>
        
<div class="col-lg-5 form-contact">  
    <form role="form">        
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
        </div>
                
        <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7">
            </textarea>
         </div>          
    </form>
           
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
       

</div> 
@endsection