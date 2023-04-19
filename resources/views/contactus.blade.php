
@extends('app')
@section('content')


<div class="firstSectionnothome">
    <h1 class="text-white display-1">Contact us</h1>
    <p class="display-5 text-white text-center">How can we help you?</p>
</div>
<div class="mainform d-flex justify-content-center align-items-center my-5">
    <div class="col-6">
        <span class="text-primary">Infinite Renting</span><i class="fa-solid fa-greater-than mx-2"></i><span style="color: #6F7780;">Submit a request</span>
        <h3 class="display-6">Submit a request</h3>
        <form action="">
            <label class="d-block" for="email">Your email address</label>
            <input type="text" class="form-control mt-1" > <br>
            <label class="d-block" for="help">What can we help you with today?</label>
            <select name="help" id="" class="form-control mb-4 mt-1">
                <option value="">Please Select an option</option>
                <option value="">Finding A rental</option>
                <option value="">Account Activation</option>
                <option value="">Linsting a Rental</option>
                <option value="">General Information</option>
                <option value="">Other</option>
            </select>
            <label class="d-block" for="email">Subject</label>
            <input type="text" class="form-control mt-1" > <br>
            <label class="d-block" for="email">Description</label>
            <textarea class="form-control mt-1" name="" id="" cols="55" rows="5"></textarea> <br>
            <div class="text-end">
                <button class="btn text-white" style="background-color:#25323E;">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>