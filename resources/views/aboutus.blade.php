@extends('app')
@section('content')
<div class="firstSectionnothome">
    <h1 class="text-white display-1">About us</h1>
    <p class="display-5 text-white text-center">Finding a new place is the start <br> of something great</p>
</div>
<div class="maincontent container  d-flex align-items-center justify-content-center flex-column">
  <h1 class="py-5" style="color:#25323ee2;">Our Purpose</h1>
  <p class="para col-6 py-3 ">We believe finding your new apartment is more than just a move. It’s something bigger. A step forward. A new beginning. A fresh start. Whether you’re moving across the country or across the street, you deserve to love where you land.</p>
  <p class="para col-6 py-3 ">But today’s rental experience is broken. It’s outdated, exhausting, and slow. We spend hours of our lives searching just to settle for places that don’t feel like home. The nightmare ends now.</p>
  <p class="para col-6 py-3 ">Infinite Renting is on a mission to change the way you rent, forever. To make it easier, faster, and more human. By making this vision a reality, we’re creating opportunity for everyone to live better—from one fresh start to the next.</p>
</div>
<div class="mainwithpictures">
  <h1 class="py-5 text-center" style="color:#25323ee2;">Who We Help</h1>
  <div class="d-flex flex-column  align-items-center ">
    <div class="d-flex flex-column flex-lg-row col-6 align-items-center mb-5" >
      <img src="/images/IMAGE.png" width="300px" alt="" srcset="">
      <div class="m-3" style="width :300px;">
        <h3 style="color:#C1BFBD;">By making renting an apartment as easy as booking a hotel</h3>
        <p style="color:#C1BFBD;" >From browsing and touring to applying and signing the lease, the entire process is becoming faster, easier, and more trustworthy on Infinit Renting.</p>
      </div>
    </div>
    <div class="d-flex flex-column flex-lg-row-reverse col-6 align-items-center mb-5 " >
      <img src="/images/scp.png" width="300px" alt="" srcset="">
      <div class="m-3 " style="width :300px;">
        <h3 style="color:#C1BFBD;">By connecting them with quality renters</h3>
        <p style="color:#C1BFBD;">We connect property owners and multifamily partners with quality renters and give them the tools they need to fill more vacancies, more quickly.</p>
      </div>
    </div>
    <div class="d-flex flex-column flex-lg-row col-6 align-items-center mb-5" >
      <img src="/images/trp.png" width="300px" alt="" srcset="">
      <div class="m-3" style="width :300px;">
        <h3 style="color:#C1BFBD;">By fostering a safe and respectful renting experience</h3>
        <p style="color:#C1BFBD;">We have a zero-tolerance policy for any form of discrimination and we build products that are accessible to all.</p>
      </div>
    </div>
  </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>