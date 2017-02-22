<?php

namespace App\Http\Controllers;
use Facebook\Exceptions\FacebookOtherException;
use Facebook\Exceptions\FacebookResponseException;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Psy\Exception\ErrorException;
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

	public function index()
    {
       $fb = new \Facebook\Facebook([
            'app_id' => env('FACEBOOK_APP_IP'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v2.8',
            'default_access_token' => env('APP_TOKEN')
        ]);


        try
        {
            $response = $fb->get('suchgreatlives?fields=posts.limit(1){message,created_time}');
            $posts= $response->getGraphAlbum();
            //echo "<script>alert('".$posts."')</script>";
            return view('index')->with('posts', json_decode($posts, true));

        }
        catch(\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;

        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;

        }

	}
        
        //albums
    public function albums()
    {
        $fb = new \Facebook\Facebook([
            'app_id' => env('FACEBOOK_APP_IP'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v2.8',
            'default_access_token' => env('APP_TOKEN')
        ]);

        try
        {
            $response = $fb->get('suchgreatlives?fields=albums{name,photos{images}}');


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
        echo "<script>alert('".$albums."')</script>";
        return view('pages.albums')->with('albums',json_decode($albums, true));

    }

        //photos
    public function photos($idAlbum){
        $fb = new \Facebook\Facebook([
            'app_id' => env('FACEBOOK_APP_IP'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v2.8',
            'default_access_token' => env('APP_TOKEN')
        ]);

        try
        {
            $query = $idAlbum."?fields=photos{id,images}";
            //echo "<script>alert('". $query ."')</script>";
            $response = $fb->get($query);


        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $photos = $response->getGraphAlbum();
        //echo "<script>alert('".$photos."')</script>";

        return view('pages.photos')->with('photos',json_decode($photos, true));
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
