@extends('app')
@section('content')
<div class="displaysingle row my-3 mx-0">
    
    <div class="col-lg-8 detailsofroom px-5">
      <div class="d-flex justify-content-between">
        <h2>{{$pr['title']}}</h2>
        <h3 class="scl">¥{{$pr['price']}}</h3>
      </div>
      <div class="d-flex justify-content-between">
        <p class="cl"><i class="fa-solid fa-location-dot me-3"></i>{{$pr['adrress']}}</p>
        <h5>{{$pr['area']}}/sq ft</h5>
      </div>
      <div class="gallexsxsry bg-white p-3 rounded">
        <h4>Gallery</h4>
        <div class="carousel ">
          <div id="carouselExample" class="carousel slide"  >
            <div class="carousel-inner">
                @foreach($pr['mediaproperty'] as $img)
                @if($loop->first)
                    <div class="carousel-item active">
                        <img src="/images/{{$img['image_path']}}" class="d-block w-100" height="450px" alt="...">
                    </div>
                    @continue
                @endif
                
                <div class="carousel-item ">
                    <img src="/images/{{$img['image_path']}}" class="d-block w-100" height="450px" alt="...">
                </div>
            @endforeach
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span  class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="bg-white my-2 p-3 rounded">
        <h6 class="">Description</h6>
        <hr style="width: 100px;border: 2px solid #0e2487;">
        <p>{{$pr['description']}}</p>
      </div>
      <div class="my-2 rounded bg-white p-3 ">
        <h6 class="">Property Details</h6>
        <hr style="width: 100px;border: 2px solid #0e2487;">
        <ul class="list">
          <li class="list-item cl "><b> Property ID:</b> V254680</li>
          <li class="list-item cl"><b>Property Type:</b> {{$pr['type']}}</li>
          <li class="list-item cl"><b> Property Price:</b> ¥{{$pr['price']}}</li>
          <li class="list-item cl"><b> Rooms:</b> {{$pr['rooms_number']}}</li>
          <li class="list-item cl"><b> Bedrooms:</b> {{$pr['beedrooms_number']}}</li>    
          <li class="list-item cl"><b> Bath:</b> {{$pr['bath_number']}}</li>
          <li class="list-item cl"><b> Garages:</b> {{$pr['garages_number']}}</li>
          <li class="list-item cl"><b> Year Built:</b> 10/6/2020</li>    
      </ul>
      <h6 class="">Amenities</h6>
      <hr style="width: 60px;border: 2px solid #0e2487;">
      <ul class="list">
        @foreach($pr['features'] as $amenity)
        <li class="list-item  "><i class="fa-solid fa-square-check scl " ></i> {{$amenity}}</li>
        @endforeach   
    </ul>
    </div>
    @if($pr['mediaproperty'][0]['video_path'])
    <div class="bg-white my-2 p-3 rounded">
      <h6 class="">Property Video</h6>
      <hr style="width: 100px;border: 2px solid #0e2487;">
      <video controls src="/video/{{$pr['mediaproperty'][0]['video_path']}}" type="video/mp4" height="100%" width="100%" ></video>
    </div>
    @endif
    <div class="bg-white my-2 p-3 rounded">
      <h6 class="">Location</h6>
      <hr style="width: 100px;border: 2px solid #0e2487;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d724.9959173741022!2d-9.24249268231212!3d32.29673447554169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212e53e8f12b%3A0x54d19e6c57b5aaf3!2s7QW4%2BMR8%2C%20Safi!5e0!3m2!1sen!2sma!4v1680398937037!5m2!1sen!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    <div class="col-lg-3 detailofowner  rounded">
      <div class="agentinformation bg-white px-3 rounded">
        <div class="border-bottom">
          <h6 class="py-3 px-2">Owner information</h6>
        </div>
        <div class=" pt-2 d-flex align-items-start my-4">
          <img src="/images/us.jpg" class="rounded-circle me-2" width="80px" alt="">
          <div class="ms-3">
            <span class="cl d-block">{{$pr['user']['name']}}</span>
            <span>Owner of Property</span>
          </div>
        </div>
        <div class="moreinfo border-bottom px-3 py-2">
          <p class="cl"><i class="fa-solid fa-location-dot me-3"></i>{{$pr['adrress']}}</p>
          <p class="cl"><i class="fa-solid fa-phone me-2"></i>+212-6 87206097</p>
          <p class="cl"><i class="fa-solid fa-envelope me-2"></i>{{$pr['user']['email']}}</p>
        </div>
        <div class="openchat my-2 px-3 py-3">
          <a href="/chatify/{{$pr['user']['id']}}" class="btn text-white" style="background-color:#25323E;">Chat the owner</a>
        </div>
      </div>

      <div class="agentinformation bg-white my-4 px-3 rounded">
        <div class="border-bottom">
          <h6 class="py-3 px-2">Recent Properties</h6>
        </div>
        <div class=" py-3">
          <div class="d-flex align-items-start">
            <img src="/images/fp-2.jpg" alt="" srcset="" width="100px">
            <div class="ms-3">
              <span class="d-block mb-2">Family Home</span>
              <span class="cl">$230,000</span>
            </div>
          </div>
          <div class="d-flex align-items-start my-3">
            <img src="/images/fp-3.jpg" alt="" srcset="" width="100px">
            <div class="ms-3">
              <span class="d-block mb-2">Family Home</span>
              <span class="cl">$230,000</span>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <img src="/images/b-1.jpg" alt="" srcset="" width="100px">
            <div class="ms-3">
              <span class="d-block mb-2">Family Home</span>
              <span class="cl">$230,000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection