@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<section class=" user-page section-padding my-3 AP d-block">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">

                <div class="single-add-property">
                    <h3>Property description and price</h3>
                    <div class="property-form-group">
                        <form action="{{url('properties')}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="title">Property Title</label>
                                        <input type="text" name="title" id="title"
                                            placeholder="Enter your property title">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description</label>
                                        <textarea id="description" name="pro-desc"
                                            placeholder="Describe about your property"></textarea>
                                    </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" placeholder="RMB" id="price">
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input type="text" name="area" placeholder="Sqft" id="area">
                                    </p>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>property Media</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dropzone">
                                    <div class="aploadInsideConatiner" id="upl">


                                        <i class="fa-solid fa-cloud-arrow-up"></i>

                                        <span id="span-alert">Click Here Or Drop Files To Upload</span>
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
                                    <input type="text" name="address" placeholder="Enter Your Address" id="address">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="city">City</label>
                                    <input type="text" name="city" placeholder="Enter Your City" id="city">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="state">State</label>
                                    <input type="text" name="state" placeholder="Enter Your State" id="state">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="country">Country</label>
                                    <input type="text" name="country" placeholder="Enter Your Country" id="country">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="no-mb first">
                                    <label for="latitude">Google Maps latitude</label>
                                    <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p class="no-mb last">
                                    <label for="longitude">Google Maps longitude</label>
                                    <input type="text" name="longitude" placeholder="Google Maps longitude"
                                        id="longitude">
                                </p>
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
                                    <option value="volvo">House</option>
                                    <option value="saab">Apartement</option>
                                    <option value="mercedes">Garage</option>
                                </select>

                            </div>

                            <div class="col-lg-4 col-md-12">

                                <label for="area">Rooms</label>
                                <select name="rooms" id="type">
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="mercedes">3</option>
                                </select>

                            </div>



                            <div class="col-lg-4 col-md-12">

                                <label for="bathrooms">BathRooms</label>
                                <select name="type" id="type">
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="mercedes">3</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-4 col-md-12">

                            <label for="Garages">Garages</label>
                            <select name="garages" id="type">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                            </select>

                        </div>



                        <div class="col-lg-4 col-md-12">

                            <label for="area">BedRooms</label>
                            <select name="bedrooms" id="type">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
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
                                            <input id="check-a" type="checkbox" name="Air" >
                                            <label for="check-a">Air Conditioning</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-b" type="checkbox" name="Swi">
                                            <label for="check-b">Swimming Pool</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-c" type="checkbox" name="Central">
                                            <label for="check-c">Central Heating</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-d" type="checkbox" name="check">
                                            <label for="check-d">Laundry Room</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-e" type="checkbox" name="check">
                                            <label for="check-e">Gym</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-g" type="checkbox" name="check">
                                            <label for="check-g">Alarm</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-h" type="checkbox" name="check">
                                            <label for="check-h">Window Covering</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-i" type="checkbox" name="check">
                                            <label for="check-i">Refrigerator</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-j" type="checkbox" name="check">
                                            <label for="check-j">TV Cable & WIFI</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-k" type="checkbox" name="check">
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
    bigInput.addEventListener('click', () => {
        fileInput.click();
    });
    fileInput.addEventListener('change', () => {
        // Handle the selected file(s) here
        const name = fileInput.files[0].name;
        span.textContent = name;
    });
</script>
    @endsection