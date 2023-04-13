<?php

namespace App\Http\Controllers;
use App\Models\properties;
use App\Models\MediaProperty;
use App\Models\user;
use Illuminate\Http\Request;

class Userdata extends Controller
{
    // public function updateuserinfo(request $request){
    //     $id = auth()->user()->id;
    //     user::find($id);
    //     $first = $request->input('fitstname');
    //     $last = $request->input('lastname');
    //     $email = $request->input('email');
    //     $phone = $request->input('phonenumber');
    //     $adrress = $request->input('adrress');
    //     $image = $request->file('profile_picture');
    //     $imagen =  $image->getClientOriginalName();
        
        
    // }
    public function updateuserinfo(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user->name = $request->input('firstname');

        $user->last_name = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phonenumber = $request->input('phonenumber');
        $user->adrress = $request->input('adrress');
        
        $image = $request->file('profile_picture');
        if ($image) {
            $name = $image->getClientOriginalName();
            $path = public_path('images');
            $image->move($path, $name);
            $user->profile_photo_path = $name;
        }
        
        $user->save();
        
        return redirect()->back()->with('success', 'User info updated successfully!');
    }
    
}
