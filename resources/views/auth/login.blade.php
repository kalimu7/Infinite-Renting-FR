@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
<section class=" h-custom" style="background-color: #f5f9fb;height:fit-content;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                    class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                    alt="Sample photo">
                    <x-validation-errors class="mb-4" />
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Login In</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-outline" >
                <x-label for="email" value="{{ __('Email') }}" class="form-label"/>
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4 form-outline">
                <x-label for="password" value="{{ __('Password') }}" class="form-label"/>
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center ">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <div class="d-flex justify-content-end">
                    <x-button class=" ml-4 border-0 text-white py-2  active">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </div>
        </form>
        </div>
      </div>
      </div>
     </div>
    </div>
</section>
@endsection
    