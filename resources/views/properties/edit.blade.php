
@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<section class=" user-page section-padding my-3 AP d-block">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
                <div class="single-add-property">
                    <h3>Property description and price</h3>
                    <div class="property-form-group">
                        <form action="{{url('properties/'.$pr['id'])}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="title">Property Title</label>
                                        <input type="text" name="title" id="title"
                                            placeholder="Enter your property title" value="{{$pr['title']}}">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description</label>
                                        <textarea id="description" name="pro-desc"
                                            placeholder="Describe about your property" value="{{$pr['description']}}">{{$pr['description']}}</textarea>
                                    </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" placeholder="RMB" id="price" value="{{$pr['price']}}">
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input type="number" name="area" placeholder="Sqft" id="area" value="{{$pr['area']}}">
                                    </p>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="ms-5">
                    
                    
                        
                    
                </div>
                <div class="single-add-property">
                    <h3>property Media</h3>
                    <input type="text" name="myvideopath" value="{{$pr['mediaproperty'][0]['video_path']}}">
                    <div class="d-flex align-items-start my-3">
                        @foreach ($pr['mediaproperty'] as $img)
                        {{$img['video_path']}}

                        <img src="/images/{{$img['image_path']}}" alt="" style="width: 150px;" height="130px" class="rounded mx-3" />
                        @endforeach
                    </div>
                
                    <div class="imagesfromdatabase">
                        
                    </div>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dropzone">
                                    <div class="aploadInsideConatiner" id="upl">


                                        <i class="fa-solid fa-cloud-arrow-up"></i>

                                        <span id="span-alert">By updating your old pics you goona override it with new one</span>
                                    </div>
                                    <input type="file" name="images[]" multiple id="fileInput" style="display:none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>property Location</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="address">Address</label>
                                    <input type="text" name="address" placeholder="Enter Your Address" id="address" value="{{$pr['adrress']}}">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="city">City</label>
                                    <input type="text" name="city" placeholder="Enter Your City" id="city" value="{{$pr['city']}}">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="state">State</label>
                                    <input type="text" name="state" placeholder="Enter Your State" id="state" value="{{$pr['state']}}">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="country">Country</label>
                                    <input type="text" name="country" placeholder="Enter Your Country" id="country" value="{{$pr['country']}}">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dropzone">
                                <div class="aploadInsideConatiner" id="uplvideo">
                                    
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <span id="span-alertvideo">Click Here to upload a video of your property</span>
                                </div>
                                <input type="file" name="video" multiple id="filevideo" style="display:none" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>Extra Information</h3>
                    <div class="property-form-group">
                        <div class="row">

                            <div class="col-lg-4 col-md-12">

                                <label for="area">type</label>
                                <select name="type" id="type">
                                    
                                    <option  @selected($pr->type == '1') value="1">House</option>
                                    <option  @selected($pr->type == '2') value="2">Apartement</option>
                                    <option  @selected($pr->type == '3') value="3">Garage</option>
                                </select>

                            </div>

                            <div class="col-lg-4 col-md-12">

                                <label for="area">Rooms</label>
                                <select name="rooms" id="type">
                                    <option @selected($pr->rooms_number	 == '1') value="1">1</option>
                                    <option @selected($pr->rooms_number	 == '2') value="2">2</option>
                                    <option @selected($pr->rooms_number	 == '3') value="3">3</option>
                                </select>

                            </div>



                            <div class="col-lg-4 col-md-12">

                                <label for="bathrooms">BathRooms</label>
                                <select name="bathrooms" id="type">
                                    <option @selected($pr->bath_number == '1') value="1">1</option>
                                    <option @selected($pr->bath_number == '2') value="2">2</option>
                                    <option @selected($pr->bath_number == '3') value="3">3</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-4 col-md-12">

                            <label for="Garages">Garages</label>
                            <select name="garages" id="type">
                                <option @selected($pr->garages_number == '1') value="1">1</option>
                                <option @selected($pr->garages_number == '2') value="2">2</option>
                                <option @selected($pr->garages_number == '3') value="3">3</option>
                            </select>

                        </div>



                        <div class="col-lg-4 col-md-12">

                            <label for="area">BedRooms</label>
                            <select name="bedrooms" id="type">
                                <option @selected($pr->beedrooms_number == '1') value="1">1</option>
                                <option @selected($pr->beedrooms_number == '2') value="2">2</option>
                                <option @selected($pr->beedrooms_number == '3') value="3">3</option>
                            </select>

                        </div>
                    </div>
                </div>

            </div>
            <div class="single-add-property">
                <h3>Property Features</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pro-feature-add pl-0">
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-a" type="checkbox" name="Air" value="aircondition" >
                                            <label for="check-a">Air Conditioning</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-b" type="checkbox" name="check[]" value="swimming" >
                                            <label for="check-b">Swimming Pool</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-c" type="checkbox" name="Check[]" value="heating">
                                            <label for="check-c">Central Heating</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-d" type="checkbox" name="check[]" value="laundry">
                                            <label for="check-d">Laundry Room</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-e" type="checkbox" name="check[]" value="gym">
                                            <label for="check-e">Gym</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-g" type="checkbox" name="check[]" value="alrm">
                                            <label for="check-g">Alarm</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-h" type="checkbox" name="check[]" value="windowcovering">
                                            <label for="check-h">Window Covering</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-i" type="checkbox" name="check[]" value="refrigetor">
                                            <label for="check-i">Refrigerator</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-j" type="checkbox" name="check[]" value="tvcablewifi">
                                            <label for="check-j">TV Cable & WIFI</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-k" type="checkbox" name="check[]" value="microwave">
                                            <label for="check-k">Microwave</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prperty-submit-button my-4">
                <button type="submit">Submit Property</button>
            </div>
        </form>
            {{-- <div class="single-add-property">
                <h3>Contact Information</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="con-name">Name</label>
                                <input type="text" placeholder="Enter Your Name" id="con-name" name="con-name">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="con-user">Username</label>
                                <input type="text" placeholder="Enter Your Username" id="con-user" name="con-user">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb first">
                                <label for="con-email">Email</label>
                                <input type="email" placeholder="Enter Your Email" id="con-email" name="con-email">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="con-phn">Phone</label>
                                <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="con-phn">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="add-property-button pt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="prperty-submit-button">
                                <button type="submit">Submit Property</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
</section>
<script>
    const  fileInput = document.querySelector('#fileInput');
    const  bigInput = document.querySelector('#upl');
    const  span = document.querySelector('#span-alert');
    const  bigInputvideo = document.querySelector('#uplvideo');
    const  fileInputvideo = document.querySelector('#filevideo');
    const  spanvideo = document.querySelector('#span-alertvideo');
    bigInput.addEventListener('click', () => {
        fileInput.click();
    });
    fileInput.addEventListener('change', () => {
        // Handle the selected file(s) here
        const ar =  fileInput.files;
        const arr=[];
        for(let i = 0;i<ar.length;i++){
            arr[i] = ar[i].name;
        }
        const name = fileInput.files[0].name;
        console.log(arr);
        // console.log(fileInput.files);
        span.textContent = arr;
    });
    bigInputvideo.addEventListener('click', () => {
        fileInputvideo.click();
    });
    fileInputvideo.addEventListener('change',()=>{
        
        const namevideo = fileInputvideo.files[0].name;
        spanvideo.textContent = namevideo;
    })

    
</script>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>