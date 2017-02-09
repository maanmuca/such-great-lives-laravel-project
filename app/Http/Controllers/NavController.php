<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/** 
 * Name: NavController
 * Authors: Marco Munoz
 *          Paola Sanabria 
 * Description: Controller for navigation
 * Date:08/02/2017
 * Version: 1.0
 */


class NavController extends Controller
{
      //home (about, news, shows,links)
	public function index(){
	   return view('index');
	}
        
        //albums
        public function albums(){
            return view('pages.albums');
        }

        //photos
        public function photos(){
            return View('pages.photos');
        }
        
        //videos
        public function videos(){
            return View('pages.videos');
        }
        
        //releases
        public function releases(){
            return View('pages.releases');
        }
        
        //game
        public function game(){
            return View('pages.game');
        }
        
         //contact
        public function contact(){
            return View('pages.contact');
        }
        
        //subscribe
        public function subscribe(){
            return View('pages.subscribe');
        }
        
}
