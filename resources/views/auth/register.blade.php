<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@extends('app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

       
    <section class="" style="background-color: #f5f9fb;height:fit-content;">
    <x-validation-errors class="mb-4" />
        <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3">
                    <img src="./images/Real-estate1.png"
                      class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;height:300px;"
                      alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="roles w-100  d-flex justify-content-between mb-3 ">
                <button id="tenant" type="button" class="w-50  border-0 text-white py-2 active">Tenenat</button>
                <button id="landlord" type="button" class="w-50  border-0 text-white py-2 notactive">Landlord</button>
            </div>
            <div class=" form-outline  mb-4 frm">
                <x-label for="name " class="form-label " value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="form-outline  mb-4">
                <x-label for="lastname" class="form-label " value="{{ __('Last name') }}" />
                <x-input id="lastname" class="block mt-1 w-full form-control" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />
            </div>
            <div class=" form-outline  mb-4">
                <input id="status" class="block mt-1 w-full form-control" type="hidden" name="status" :value="" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" class="form-label" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 form-outline">
                <x-label for="password" value="{{ __('Password') }}" class="form-label" />
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 form-outline">
                <x-label for="password_confirmation"  class="form-label" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <div class="d-flex justify-content-end">
                    <x-button class="ml-4 border-0 text-white py-2  active">
                        {{ __('Register') }}
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
    
<script src="{{asset('JS/animation.js')}}" ></script>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>