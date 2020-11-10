<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\User;
use App\EventsImages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('index','events');
        $this->projects = array(
                            1 =>array("name"=>"VisionEvents",
                                      "image"=>"images/projects/visionevents_prod1.png",
                                      "url"=>"https://visionlinks.ca/eventadmin",
                                      "env"=>"Production OLD",
                                      "project"=>"visionevents",
                                     ),
                            2 =>array("name"=>"VisionEvents",
                                      "image"=>"images/projects/visionevents_prod.png",
                                      "url"=>"https://visionevents.visiontravel.ca/admin/signin",
                                      "env"=>"Production",
                                      "project"=>"visionevents",
                                     ),
                            3 =>array("name"=>"VisionEvents",
                                      "image"=>"images/projects/visionevents_prod1.png",
                                      "url"=>"https://visionevents.dev.visiontravel.ca/admin/signin",
                                      "env"=>"Development",
                                      "project"=>"visionevents",
                                     ),
                            4 =>array("name"=>"VisionLinks",
                                      "image"=>"images/projects/visionlinks_prod.png",
                                      "url"=>"https://visionlinks2.visiontravel.ca",
                                      "env"=>"Production",
                                      "project"=>"visionlinks",
                                     ),
                            5 =>array("name"=>"VisionLinks1",
                                      "image"=>"images/projects/visionlinks_prod1.png",
                                      "url"=>"https://visionlinks.ca/en/admin/login",
                                      "env"=>"Production OLD",
                                      "project"=>"visionlinks",
                                     ),
                            6 =>array("name"=>"VisionIntel",
                                      "image"=>"images/projects/visionintel_prod.png",
                                      "url"=>"http://visionintel.ca/",
                                      "env"=>"Production",
                                      "project"=>"visionintel",
                                     ),
                            7 =>array("name"=>"VisionIntel",
                                      "image"=>"images/projects/visionintel_prod.png",
                                      "url"=>"https://visionintel.preprod.visiontravel.ca",
                                      "env"=>"PreProduction",
                                      "project"=>"visionintel",
                                     ),
                            8 =>array("name"=>"VisionIntel",
                                      "image"=>"images/projects/visionintel_prod.png",
                                      "url"=>"https://visionintel.staging.visiontravel.ca",
                                      "env"=>"Staging",
                                      "project"=>"visionintel",
                                     ),
                            9 =>array("name"=>"VisionIntel",
                                      "image"=>"images/projects/visionintel_prod.png",
                                      "url"=>"https://rguptavi.dev.visiontravel.ca",
                                      "env"=>"Rgupta",
                                      "project"=>"visionintel",
                                     ),
                            10 =>array("name"=>"PHPMYADMIN",
                                      "image"=>"images/projects/phpmyadmin.png",
                                      "url"=>"https://phpmyadmin.dev.visiontravel.ca/",
                                      "env"=>"DB",
                                      "project"=>"db",
                                     )
                            );
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
                "event_public" => 1,
                "event_feature" => 1,
                "event_active" => 1,
                "public" => 1,
                "feature" => 1,
                "active" => 1
        );
        $projects = $this->projects;
         
        
        // $galleryevents = Events::fetchallpublic();
         $galleryevents = Events::fetchallpublic();
        $events = Events::fetchallpublic();
        $events = array();
        
        $users = User::get();
        return view('home.index',compact('galleryevents','events','projects','users'));
    }
    
    public function events($id = "")
    {
        $data = array(
                "event_public" => 1,
                "event_feature" => 1,
                "event_active" => 1,
                "public" => 1,
                "feature" => 1,
                "active" => 1
        );
        $projects = $this->projects;
        $galleryevents = Events::fetchallpublic();
        $selectedEvents = Events::find($id);

        $allevents = Events::fetchall();
        $users = User::get();
//        $selectedEvents = $selectedEvents[0];
        return view('home.events',compact('allevents','events','projects','users','selectedEvents','galleryevents'));
    }
}
