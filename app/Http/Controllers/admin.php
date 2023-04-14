<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\MediaProperty;
use App\Models\user;
class admin extends Controller
{
    public function approve(){
        $property =properties::with('MediaProperty')->get();
        // foreach($property as $p){
        //     foreach($p['MediaProperty'] as $img){
        //         echo $img['image_path'];
        //     }
        // }
        // die;
        return view('admin.Dashboard')->with('Pr',$property);

    }
    public function approve_status($id){
        // echo $id;
        // die;
        $property = properties::find($id);
        if($property->approve_status == 0){
            $property->approve_status = 1;
        }else{
            $property->approve_status = 0;
        }
        $property->save();
        return back();
    }
    
}
