<?php

namespace App\Http\Controllers;
use App\Models\properties;
use App\Models\MediaProperty;
use App\Models\user;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $cities = properties::select('city')->get();
        $city = [];
        foreach($cities as $cs){
            array_push($city,$cs['city']);
        }
        
        return view('home')->with('city',$city);
    }
    public function profile(){
        return view('profile');
    }
    public function dash()
    {
        $id = auth()->user()->id;
        $property = user::with("properties.mediaproperty")->where('id','=',$id)->get();
        // foreach($property as $p){
        //     echo $p;
        //     // echo $p['properties'];
        //     // foreach($p['properties'] as $m){
        //     //     echo $m['mediaproperty'][0]['image_path'];
        //     // }
        // }
        // die;
        $active =  properties::where('approve_status','=',1)->where('user_id','=',$id)->get();
        $number = $active->count();
        $notactive = properties::where('approve_status','=',0)->where('user_id','=',$id)->get();
        $numbernot = $notactive->count();
        
        return view('dashboard1')->with('Pr',$property)->with('activep',$number)->with('notactive',$numbernot);
    }

    public function index()
    {
        
        $property = user::with("properties.mediaproperty")->get();
        $cities = properties::select('city')->get();

        // $property = properties::with("mediaproperty")->get();
        
        
        // foreach($property as $p){
        //     echo $p;
        // }
        // die;
        return view('properties.index')->with('Pr',$property)->with('city',$cities);
        
        
        
        // dd($property);
    }
    public function search(Request $request){
        
        $city = $request->input('searchname');
        if(empty($city)){
            $property = properties::with("mediaproperty","user")->where('approve_status','=',1)->get();
        }else{
            $property = properties::with("mediaproperty","user")->where('approve_status','=',1)->where('city','=',$city)->get();
        }

        // foreach($property as $p){
            //     echo $p;
            // }
            // die;
        $cities = properties::select('city')->get();
        return view('properties.indexx')->with('Pr',$property)->with('city',$city)->with('cities',$cities);
    }
    public function show($id)
    {
        
        // $property = properties::with('mediaproperty')->where("id","=",$id);
        // $property = properties::with('mediaproperty')->find($id);
        $property = properties::with("mediaproperty","user")->find($id);
        if($property['approve_status'] ==0){
            return back();
        }
        $property['features'] = explode(',',$property['features']);
        
        
        return view('properties.show')->with('pr',$property);
    }
    
}
