<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('app')
@section('content')
<body style="background-color: #f5f7fb;">
    <!-- style="background-color: #f5f7fb;" -->
    
      <div class="bigresult row mt-5 mx-2 my-4 ">
          <div class="col-lg-3 col-md-10 px-3 bg-white rounded mx-2 text-center" style="height: max-content; ">
            <div class="border-bottom  p-2 mb-4">
              <h4>Find Your house</h4>
            </div>
            <div class="search form ">
              <form action="" class="p-3">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter an adrress" aria-label="Username" aria-describedby="basic-addon1">
                </div>
  
                <select class="form-select my-3" aria-label="Default select example" id="locationfilter">
                  <option selected disabled hidden >
                    <span class="select-icon"><i class="fa-solid fa-location-dot"></i>Property location</span>
                  </option>
                  @foreach($city as $s)
                  <option value="{{$s['city']}}">{{$s['city']}}</option>
                  @endforeach
                  
                </select>
  
                <select class="form-select" aria-label="Default select example" >
                  <option selected disabled hidden >
                    <span class="select-icon"><i class="fa-solid fa-location-dot"></i>Property Type</span>
                  </option>
                  <option value="House">House</option>
                  <option value="Apartement">Apartement</option>
                  <option value="Garage">Garage</option>
                </select>
  
                <select class="form-select my-3" aria-label="Default select example" id="bedrooms">
                  <option selected disabled hidden >
                    <span class="select-icon"><i class="fa-solid fa-location-dot"></i>Bedrooms</span>
                  </option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
  
                <select class="form-select my-3" aria-label="Default select example">
                  <option selected disabled hidden >
                    <span class="select-icon"><i class="fa-solid fa-location-dot"></i>Bathrooms</span>
                  </option>
                  
                  <option value="1">one</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <button class="btn  " style="background-color: #0D2A3A;color: white;">
                  <svg fill="none" height="10" viewBox="0 0 17 14" width="13" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M8.99944 3.06248H16.0006" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M1 10.7H8.00112" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M1 3H4.5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M12.5 10.7H16" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><circle cx="10.3765" cy="10.625" r="1.875" stroke="#fff" stroke-width="1.5"></circle><circle cx="6.62354" cy="3.125" r="1.875" stroke="#fff" stroke-width="1.5"></circle></svg> Filters
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-9 col-md-12 row gap-5 ">
           @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif
            @foreach ($Pr as $p)
            
            @foreach ($p['properties'] as $prop)
            <div class="singleroom col-lg-4 col-md-4 col-xs-4  me-4 "  >
              
              <div class="img-ico position-relative " >
                  <div class="carousel ">
                      <div id="carouselExample{{$prop['id']}}" class="carousel slide" style="width: 345px;"  >
                          
                          <div class="carousel-inner">
                              
                              {{-- ***here i have to loop for images from my database*** --}}
                              @foreach($prop['mediaproperty'] as $img)
                                  @if($loop->first)
                                      <div class="carousel-item active">
                                          <img src="/images/{{$img['image_path']}}" class="d-block w-100" height="258px" alt="...">
                                      </div>
                                      @continue
                                  @endif
                                  
                                  <div class="carousel-item ">
                                      <img src="/images/{{$img['image_path']}}" class="d-block w-100" height="258px" alt="...">
                                  </div>
                              @endforeach
                              {{-- ***here i have to loop for images from my database*** --}}
                              
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{$prop['id']}}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{$prop['id']}}" data-bs-slide="next">
                              <span  class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                  </div>
                  <div class="icons position-absolute bottom-0 d-flex justify-content-between p-3" style="width: 345px;"  >
                      <a href="/properties/{{$prop['id']}}" class="text-white">${{$prop['price']}}/Mo</a>
                      <a href="/properties/{{$prop['id']}}" class="text-white  "><i class="fa-solid fa-image p-2 rounded" style="background-color: rgba(74, 74, 76, 0.5);" ></i></a>
                      <a href="/properties/{{$prop['id']}}" class="text-white  "><i class="fa-sharp fa-solid fa-link p-2 rounded" style="background-color: rgba(74, 74, 76, 0.5);" ></i></a>
                  </div>
              </div>
              <div class="roominfo bg-white  p-3 rounded-bottom" style="width: 345px;">
                  <p class="">{{$p['title']}}</p>
                  <p class="cl "><i class="fa-solid fa-location-dot me-3"></i>{{$prop['adrress']}}</p>
                  <div class="d-flex justify-content-between">
                      <p class="cl"><i class="fa-solid fa-bed me-2"></i>{{$prop['beedrooms_number']}} Bedrooms</p>
                      <p class="cl"><i class="fa-solid fa-bath me-2"></i>{{$prop['bath_number']}} Bathrooms</p>
                  </div>
                
                  <div class="d-flex justify-content-between" >
                    <p class="cl "><i class="fa-solid fa-chart-area me-2"></i>{{$prop['area']}} sq ft</p>
                     <p class="cl" style="margin-right: 20px;"><i class="fa-solid fa-car me-2" ></i>{{$prop['garages_number']}} Garages  </p>
                  </div>
                  <div class="userinfo d-flex align-items-center justify-content-between border-top ">
                      <div class=" pt-2 d-flex align-items-center">
                        <img src="/images/us.jpg" class="rounded-circle me-2" width="50px" alt="">
                        <span class="cl">{{$p['name']}}</span>
                      </div>
                      <span class="cl">2 months ago</span>
                  </div>
              </div>
            </div>
            @endforeach

            @endforeach
  
          </div>
      </div>
      <script src="{{asset('JS/filter.js')}}" ></script>

  </body>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>