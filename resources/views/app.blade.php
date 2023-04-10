<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Renting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-3 ">
        <div>
          <img src="./images/infinterentingblack.png" alt="" srcset="" width="70px" >
            <a class="navbar-brand" href="/home">Infinite Renting</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav align-items-center gap-3">
            <div class="d-flex align-items-center">
              @if(!auth()->user())
              <a class="nav-item nav-link " href="/register">Sign Up</a>
              <span>/</span>
              <a class="nav-item nav-link" href="/login">Sign In</a>
              @endif

              @if(auth()->user())
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit" class="btn btn-primary">logout</button>
              </form>
              @endif
            </div>
            <a class="nav-item nav-link adP text-center text-white py-2 px-4 rounded active" href="/dash">Add Property</a>
          </div>
        </div>
    </nav>
    @yield('content')
    <footer class=" d-flex align-items-start   px-5 py-3" style="background-color: #25323E;">
        <div class="col-3 ">
          <img src="./images/infinte_Renting.png" alt="" srcset="" width="70px" style="border-radius: 50%;" >
          <a class="navbar-brand" href="#" style="color: #93979A;" >Infinite Renting</a>
          <div class="mt-3 d-flex   ">
            <i class="bi bi-facebook ms-1 me-4" style="color: #93979A;"></i>
            <i class="bi bi-instagram mx-5" style="color: #93979A;"></i>
            <i class="bi bi-youtube ms-3" style="color: #93979A;"></i>
          </div>
        </div>
        <div class="Advertisers   col-3">  
          <p class="" style="color: #93979A;">Advertisers</p>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;" >Advertise</a>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;">Add a Property</a>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;">Digital Feeds Program</a>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;">Customer Portal</a>
        </div>
        <div class="Marketplace  col-3"> 
          <p class="" style="color: #93979A;">Explore</p>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;" >InfinitRenting.com</a>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;">ForRent</a>
        </div>
        
        <div class="About Us  col-3"> 
          <p class="" style="color: #93979A;">About Us</p>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;" >Contact Us</a>
          <a href="" class="d-block text-white" style="text-decoration: none;color: #7F7E7E;">Sign up</a>
        </div>
        
    </footer>
        {{-- <script src="/JS/animation.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
  </html>