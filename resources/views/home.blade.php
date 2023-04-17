
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@extends('app')
@section('content')
<body>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="firstSection text-center">
        <h1 class="text-white display-1">Discover Your New Home</h1>
        <p class="display-5 text-white">Helping  renters find their perfect fit.</p>
       
          <form action="/search" method="post" class="d-flex w-50 mt-5">
            @csrf
            <input type="text" id="searchInput" class="form-control" placeholder="Search place" aria-label="Username" aria-describedby="basic-addon1" name="searchname"> 
  
            <button type="submit" style="background-color: #25323E;" class="btn text-white mx-2 px-3 ">Search</button>
          </form>
        
        
    </div>
    <div class="secondsection p-5">
      <h3 class="text-center my-5">Explore Rentals in Dalian</h3>

      <div class="row">

        <div class="col-lg-3  col-xs-10 col-sm-6 my-1">
          
          <div class="card " >
            <img class="card-img-top" src="/images/1card.jpg" alt="Card image cap"  >
            <div class="card-body text-center">
              <h5 class="card-title">Elevate</h5>
              <p class="card-text">930 W Altgeld St, <br>Chicago, IL 60614 <br>Studio - 3 Beds | $2,210 - $14,555 </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3  col-xs-10 col-sm-6  my-1">
          <div class="card " >
            <img class="card-img-top" src="/images/5card.jpg" alt="Card image cap"  >
            <div class="card-body text-center">
              <h5 class="card-title">Elevate</h5>
              <p class="card-text">930 W Altgeld St, <br>Chicago, IL 60614 <br>Studio - 3 Beds | $2,210 - $14,555 </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3  col-xs-10 col-sm-6 my-1">
          <div class="card " >
            <img class="card-img-top" src="/images/pexels-alexander-zvir-3705529.jpg" alt="Card image cap" >
            <div class="card-body text-center">
              <h5 class="card-title">Elevate</h5>
              <p class="card-text">930 W Altgeld St, <br>Chicago, IL 60614 <br>Studio - 3 Beds | $2,210 - $14,555 </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3  col-xs-10 col-sm-6 my-1">
          <div class="card " >
            <img class="card-img-top" src="/images/1card.jpg" alt="Card image cap" >
            <div class="card-body text-center">
              <h5 class="card-title">Elevate</h5>
              <p class="card-text">930 W Altgeld St, <br>Chicago, IL 60614 <br>Studio - 3 Beds | $2,210 - $14,555 </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="/properties" style="background-color: #25323E;" class="btn text-white mx-1 " >View More</a>
      <h3 class="my-3">The Most Rental Listings</h3>
      <p class="my-2">Choose from over 1 million apartments, houses, condos, and townhomes for rent</p>
    </div>
    <div class="thirdsection container">
        <div class="d-flex game">
          <div  class="w-50 d-flex flex-column justify-content-between p-5" style="background-color:#F5F5F5;">
            <h2>Renting Made Simple</h2>
            <p>Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device.</p>
            <a href="">Find Out More</a>
          </div>
          <div class="w-50" >
            <img src="/images/pic1.jpg" width="100%" alt="" srcset="">
          </div>
        </div>
        
        <div class="d-flex ">
          <div class="w-50">
            <img src="/images/pexels-cottonbro-studio-4569340 1.png" width="100%" alt=""  srcset="">
          </div>
          <div  class="w-50 d-flex flex-column justify-content-between p-5" style="background-color:#F5F5F5;">
            <h2>Renting Made Simple</h2>
            <p>Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device.</p>
            <a href="">Find Out More</a>
          </div>
        </div>

        <div class="d-flex">
          <div  class="w-50 d-flex flex-column justify-content-between p-5" style="background-color:#F5F5F5;">
            <h2>Renting Made Simple</h2>
            <p>Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device.</p>
            <a href="">Find Out More</a>
          </div>
          <div class="w-50">
            <img src="/images/pic3.png" width="100%" alt="" srcset="">
          </div>
        </div>
    </div>
    <div class="text-center my-5">
      <h3 class="display-6" >The Perfect Place to Manage Your Property</h3>
      <h3 class="display-6" >Work with the best suite of property management tools on the market</h3>
    </div>
    <div class="forthcontainer container">
      <div class="d-flex">
        <div  class="w-50 d-flex flex-column justify-content-between p-5" style="background-color:#F5F5F5;">
          <h2>Renting Made Simple</h2>
          <p>Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device.</p>
          <a href="">Find Out More</a>
        </div>
        <div class="w-50" >
          <img src="/images/pexels-photo-2549031.png" width="100%" alt="" srcset="">
        </div>
      </div>
      
      <div class="d-flex ">
        <div class="w-50">
          <img src="/images/pexels-peter-olexa-4012966_1.png" width="100%" alt=""  srcset="">
        </div>
        <div  class="w-50 d-flex flex-column justify-content-between p-5" style="background-color:#F5F5F5;">
          <h2>Renting Made Simple</h2>
          <p>Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device.</p>
          <a href="">Find Out More</a>
        </div>
      </div>
      <div class="text-center my-4">
        <h3 class="display-6">available for rent. You’ll find your next home, in any style you prefer.</h3> 
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      
          
      <script>
       
        $(function() {
          
          var available =@json($city);
          console.log(available);
          $("#searchInput").autocomplete({
            source:available
          });
        });

        


        </script>
        
</body>
@endsection
