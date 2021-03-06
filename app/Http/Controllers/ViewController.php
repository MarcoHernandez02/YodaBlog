<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Yoda;

class ViewController extends Controller
{
    // -- All fuctions with last word finish in 'Route' are routes for view

    // -- HomeRoute incluide model 'Yoda' conection and index route
    public function HomeRoute()
    {
        $Yoda = Yoda::all();
        $info = [];
        foreach ($Yoda as $yoda){
            $info []=[
                'name'=>$yoda->name,
                'description'=>$yoda->description,
                'image'=>$yoda->image,
            ];
        }
        return view('index', ['info' => $info]);
  
    }

    // -- This function called apiYoda is the BoredApi parametre= participants
    public function apiYoda()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.boredapi.com/api/activity?participants');
        $json = $response->getBody();
        $participantsA = json_decode($json, true);

        return compact('participantsA');
    }
    
    // -- Route for BoredApi (function apiYoda) parametre= participants
    public function GameRoute()
    {
        return view('game', ['participantsA' => $this->apiYoda()]);
    }
    
    // -- This is the function for the SWAPI 
    public function swApiRoute()
    {
        $Yoda = Yoda::all();
        $bio = [];
        foreach ($Yoda as $yoda){
           
        $bio []=[
                'name'=>$yoda->name,
                'description'=>$yoda->description,
                'image'=>$yoda->image
          ]; 
        }
        return view('swapi', ['bio' => $bio]);
    }

    // -- Contact view
    public function ContactRoute()
    {
        return view('contact');
    }

    // -- Video view
    public function VideoRoute()
    {
        return view('video');
    }

}
