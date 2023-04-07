<?php

namespace App\Http\Controllers;
use App\Models\properties;
use App\Models\MediaProperty;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $property = properties::with("mediaproperty")->get();
        $property = user::with("properties.mediaproperty")->get();
        // foreach($property as $p){
        //     echo $p;
        // }
        // die;
        return view('properties.index')->with('Pr',$property);
        
        
        
        // dd($property);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'pro-desc' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'type' => 'required|max:255',
            'country' => 'required|max:255',
            'rooms' => 'required|integer|min:0',
            'bedrooms' => 'required|integer|min:0',
            'garages' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'video' => 'mimes:mp4|max:30000',
            'images' => 'required|array',
            'images.*' => 'required|image',
            
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $features = implode(',', $request->input('check'));
        
        // ***first send the essential data***
        $properties = new properties;
        $properties->title=$request->input('title');
        $properties->description=$request->input('pro-desc');
        $properties->price=$request->input('price');
        $properties->area=$request->input('area');
        $properties->adrress=$request->input('address');
        $properties->city=$request->input('city');
        $properties->state=$request->input('state');
        $properties->type=$request->input('type');
        $properties->country=$request->input('country');
        $properties->rooms_number=$request->input('rooms');
        $properties->beedrooms_number=$request->input('bedrooms');
        $properties->garages_number=$request->input('garages');
        $properties->bath_number=$request->input('bathrooms');
        $properties->user_id=auth()->user()->id;
        $properties->features=$features;

        $properties->save();

        // ***here i try handling the images*****
        
        $video = $request->file('video');
        $images = $request->file('images');
        $path = public_path('images');
        $pathv = public_path('video');
        if($video){
            $namev = $video->getClientOriginalName();
            $video->move($pathv, $namev);
        }else{
            $namev = '';
        }
        foreach ($images as $image) {
            $name = $image->getClientOriginalName();
            $image->move($path, $name);
            $img = new MediaProperty;
            $img->image_path=$name;
            $img->properties_id=$properties->id;
            $img->landloard_id=auth()->user()->id;
            $img->video_path = $namev;
            
            $img->save();
        }
        
    return redirect('/properties')->with('msg','new property added ');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        // $property = properties::with('mediaproperty')->where("id","=",$id);
        // $property = properties::with('mediaproperty')->find($id);
        $property = properties::with("mediaproperty","user")->find($id);
        // echo $property;
        // die; 
        return view('properties.show')->with('pr',$property);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = properties::with("mediaproperty","user")->find($id);
        // echo $property;
        // die;
        return view('properties.edit')->with('pr',$property);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'pro-desc' => 'required|max:255',
        'price' => 'required|numeric|min:0',
        'area' => 'required|numeric|min:0',
        'address' => 'required|max:255',
        'city' => 'required|max:255',
        'state' => 'required|max:255',
        'type' => 'required|max:255',
        'country' => 'required|max:255',
        'rooms' => 'required|integer|min:0',
        'bedrooms' => 'required|integer|min:0',
        'garages' => 'required|integer|min:0',
        'bathrooms' => 'required|integer|min:0',
        'video' => 'mimes:mp4|max:30000',
        // 'images' => 'required|array',
        // 'images.*' => 'required|image',
        'check'=>'required|array',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

    $features = implode(',', $request->input('check'));

    $property = properties::find($id);
    $property->title = $request->input('title');
    $property->description = $request->input('pro-desc');
    $property->price = $request->input('price');
    $property->area = $request->input('area');
    $property->adrress = $request->input('address');
    $property->city = $request->input('city');
    $property->state = $request->input('state');
    $property->type = $request->input('type');
    $property->country = $request->input('country');
    $property->rooms_number = $request->input('rooms');
    $property->beedrooms_number = $request->input('bedrooms');
    $property->garages_number = $request->input('garages');
    $property->bath_number = $request->input('bathrooms');
    $property->user_id = auth()->user()->id;
    $property->features = $features;

    $property->save();

    // delete the old images
    if(!empty($images)){
    MediaProperty::where('properties_id', $id)->delete();
    }
    // upload the new images and video
    $video = $request->file('video');
    $images = $request->file('images');
    $path = public_path('images');
    $pathv = public_path('video');

    if ($video) {
        $namev = $video->getClientOriginalName();
        $video->move($pathv, $namev);
    } else {
        $namev = '';
    }
    if(!empty($images)){
    foreach ($images as $image) {
        $name = $image->getClientOriginalName();
        $image->move($path, $name);

        $img = new MediaProperty;
        $img->image_path = $name;
        $img->properties_id = $property->id;
        $img->landloard_id = auth()->user()->id;
        $img->video_path = $namev;

        $img->save();
    }
    }

    return redirect('/properties')->with('msg', 'Property updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //
        
    }
}
