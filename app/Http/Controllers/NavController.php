<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SammyK\LaravelFacebookSdk;
use Illuminate\Support\Facades\App;

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
       $fb = new \Facebook\Facebook([
            'app_id' => env('FACEBOOK_APP_IP'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v2.8',
            'default_access_token' => env('APP_TOKEN')
        ]);

        try {
            $response = $fb->get('suchgreatlives?fields=posts.limit(3){message,created_time}');
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $posts= $response->getGraphAlbum();
        return view('index')->with('posts', json_decode($posts, true));
	}
        
        //albums
        public function albums(){
            $fb = new \Facebook\Facebook([
                'app_id' => env('FACEBOOK_APP_IP'),
                'app_secret' => env('FACEBOOK_APP_SECRET'),
                'default_graph_version' => 'v2.8',
                'default_access_token' => env('APP_TOKEN')
            ]);

            try {
                // Get the \Facebook\GraphNodes\GraphUser object for the current user.
                // If you provided a 'default_access_token', the '{access-token}' is optional.
                $response = $fb->get('suchgreatlives?fields=albums{cover_photo,picture{url}}');
            } catch(\Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(\Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $albums = $response->getGraphAlbum();

            $arrayLinksAlbum = json_decode($albums, true);
            $arraylength =count($arrayLinksAlbum['albums']);
            $arrayIds = [];
            $arrayUrl = [];



          for ($x = 0; $x <$arraylength; $x++)
            {
                $arrayIds[$x] =$arrayLinksAlbum['albums'][$x]['cover_photo']['id'];
                $arrayUrl[$x] =$arrayLinksAlbum['albums'][$x]['picture']['url'];
                $arrayAlbums[$x]=[$arrayIds[$x],$arrayUrl[$x]];
            }
            echo "<script>alert('".$arrayAlbums[0][0]."')</script>";

            /*echo "<script>alert('".$arrayLinksAlbum['albums'][0]['cover_photo']['id']."')</script>";
            echo "<script>alert('".$arrayLinksAlbum['albums'][0]['picture']['url']."')</script>";
            echo "<script>alert('".$arrayLinksAlbum['albums'][1]['picture']['url']."')</script>";
            echo "<script>alert('".$arraylength."')</script>";
            echo "<script>alert('".$arrayIds[0]."')</script>";*/



          //return  View::make('pages.albums', compact($arrayUrl,$arrayIds));
          return view('pages.albums')->with('arrayUrl', $arrayUrl);
          //return view('pages.albums', compact($arrayUrl,$arrayIds));
        }

        //photos
        public function photos(){


            return View();
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
