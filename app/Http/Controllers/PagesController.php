<?php

namespace App\Http\Controllers;
use App\Models\properties;
use App\Models\MediaProperty;
use App\Models\user;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function profile(){
        return view('profile');
    }
    public function dash()
    {
        $id = auth()->user()->id;
        $property = user::with("properties.mediaproperty")->where('id','=',$id)->get();
        // foreach($property as $p){

        //     echo $p['properties'];
        //     foreach($p['properties'] as $m){
        //         echo $m['mediaproperty'][0]['image_path'];
        //     }
        // }
        // die;
        return view('dashboard1')->with('Pr',$property);
    }
}
