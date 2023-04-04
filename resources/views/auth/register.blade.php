

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.firstSection{
    background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('/images/firstsection.jpg');
    height: 80vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.firstSectionnothome{
    background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('/images/firstsection.jpg');
    height: 60vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.para{
    font-family: 'Roboto', sans-serif;
}
.cl{
    color: #666;
}
.scl{
    color: #25323E;
}
.list {
    line-height: 40px;
    list-style-type: none;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
#chat3 .form-control {
    border-color: transparent;
}
    
#chat3 .form-control:focus {
    border-color: transparent;
    box-shadow: inset 0px 0px 0px 1px transparent;
}
.active{
    background-color: #03254b;
}
.notactive{
    background-color: #03254bc9;
}


</style>

       
        <x-validation-errors class="mb-4" />
        <section class="" style="background-color: #f5f9fb;height:fit-content;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                  <div class="card rounded-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                      class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
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
                    <x-button class="ml-4 border-0 text-white py-2 w-25  active">
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
    
<script>
    // **toggle the signup***
const tn = document.querySelector('#tenant');
const ld = document.querySelector('#landlord');
const input = document.querySelector('#status');
input.value = '0';
tn.addEventListener('click',()=>{
    tn.style.backgroundColor = '#03254b';
    ld.style.backgroundColor = '#03254bc9';
     input.value='0';
    })
ld.addEventListener('click',()=>{
    ld.style.backgroundColor = '#03254b';
    tn.style.backgroundColor = '#03254bc9';
    input.value='1';
    })
</script>