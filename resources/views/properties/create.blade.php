@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<section class=" user-page section-padding my-3 AP d-block">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
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
                                        <input type="number" name="area" placeholder="Sqft" id="area">
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
                                    {{-- <input type="text" name="city" placeholder="Enter Your City" id="city"> --}}
                                    <select id="city-select" class="form-select" name="city">

                                    </select>
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
                                    {{-- <input type="text" name="country" placeholder="Enter Your Country" id="country"> --}}
                                    <select id="country-select" class="form-select" name="country">

                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dropzone">
                                <div class="aploadInsideConatiner" id="uplvideo">


                                    <i class="fa-solid fa-cloud-arrow-up"></i>

                                    <span id="span-alertvideo">Click Here to upload a video of your property</span>
                                </div>
                                <input type="file" name="video" multiple id="filevideo" style="display:none">
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
                                    <option value="1">House</option>
                                    <option value="2">Apartement</option>
                                    <option value="3">Garage</option>
                                </select>

                            </div>

                            <div class="col-lg-4 col-md-12">

                                <label for="area">Rooms</label>
                                <select name="rooms" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div>



                            <div class="col-lg-4 col-md-12">

                                <label for="bathrooms">BathRooms</label>
                                <select name="bathrooms" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-4 col-md-12">

                            <label for="Garages">Garages</label>
                            <select name="garages" id="type">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>

                        </div>



                        <div class="col-lg-4 col-md-12">

                            <label for="area">BedRooms</label>
                            <select name="bedrooms" id="type">
                                <option value="2">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
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
                                            <input id="check-a" type="checkbox" name="Air" value="Air Conditioning" >
                                            <label for="check-a">Air Conditioning</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-b" type="checkbox" name="check[]" value="Swimming Pool" >
                                            <label for="check-b">Swimming Pool</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-c" type="checkbox" name="Check[]" value="Central Heating">
                                            <label for="check-c">Central Heating</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-d" type="checkbox" name="check[]" value="Laundry Room">
                                            <label for="check-d">Laundry Room</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-e" type="checkbox" name="check[]" value="Gym">
                                            <label for="check-e">Gym</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-g" type="checkbox" name="check[]" value="alrm">
                                            <label for="check-g">Alarm</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-h" type="checkbox" name="check[]" value="Window Covering">
                                            <label for="check-h">Window Covering</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-i" type="checkbox" name="check[]" value="Refrigerator">
                                            <label for="check-i">Refrigerator</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-j" type="checkbox" name="check[]" value="TV Cable & WIFI">
                                            <label for="check-j">TV Cable & WIFI</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="check-k" type="checkbox" name="check[]" value="Microwave">
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
<script src="{{asset('JS/index.js')}}"></script>
<script>
    const countryList = [
	"Afghanistan",
	"Albania",
	"Algeria",
	"American Samoa",
	"Andorra",
	"Angola",
	"Anguilla",
	"Antarctica",
	"Antigua and Barbuda",
	"Argentina",
	"Armenia",
	"Aruba",
	"Australia",
	"Austria",
	"Azerbaijan",
	"Bahamas (the)",
	"Bahrain",
	"Bangladesh",
	"Barbados",
	"Belarus",
	"Belgium",
	"Belize",
	"Benin",
	"Bermuda",
	"Bhutan",
	"Bolivia (Plurinational State of)",
	"Bonaire, Sint Eustatius and Saba",
	"Bosnia and Herzegovina",
	"Botswana",
	"Bouvet Island",
	"Brazil",
	"British Indian Ocean Territory (the)",
	"Brunei Darussalam",
	"Bulgaria",
	"Burkina Faso",
	"Burundi",
	"Cabo Verde",
	"Cambodia",
	"Cameroon",
	"Canada",
	"Cayman Islands (the)",
	"Central African Republic (the)",
	"Chad",
	"Chile",
	"China",
	"Christmas Island",
	"Cocos (Keeling) Islands (the)",
	"Colombia",
	"Comoros (the)",
	"Congo (the Democratic Republic of the)",
	"Congo (the)",
	"Cook Islands (the)",
	"Costa Rica",
	"Croatia",
	"Cuba",
	"Curaçao",
	"Cyprus",
	"Czechia",
	"Côte d'Ivoire",
	"Denmark",
	"Djibouti",
	"Dominica",
	"Dominican Republic (the)",
	"Ecuador",
	"Egypt",
	"El Salvador",
	"Equatorial Guinea",
	"Eritrea",
	"Estonia",
	"Eswatini",
	"Ethiopia",
	"Falkland Islands (the) [Malvinas]",
	"Faroe Islands (the)",
	"Fiji",
	"Finland",
	"France",
	"French Guiana",
	"French Polynesia",
	"French Southern Territories (the)",
	"Gabon",
	"Gambia (the)",
	"Georgia",
	"Germany",
	"Ghana",
	"Gibraltar",
	"Greece",
	"Greenland",
	"Grenada",
	"Guadeloupe",
	"Guam",
	"Guatemala",
	"Guernsey",
	"Guinea",
	"Guinea-Bissau",
	"Guyana",
	"Haiti",
	"Heard Island and McDonald Islands",
	"Holy See (the)",
	"Honduras",
	"Hong Kong",
	"Hungary",
	"Iceland",
	"India",
	"Indonesia",
	"Iran (Islamic Republic of)",
	"Iraq",
	"Ireland",
	"Isle of Man",
	"Israel",
	"Italy",
	"Jamaica",
	"Japan",
	"Jersey",
	"Jordan",
	"Kazakhstan",
	"Kenya",
	"Kiribati",
	"Korea (the Democratic People's Republic of)",
	"Korea (the Republic of)",
	"Kuwait",
	"Kyrgyzstan",
	"Lao People's Democratic Republic (the)",
	"Latvia",
	"Lebanon",
	"Lesotho",
	"Liberia",
	"Libya",
	"Liechtenstein",
	"Lithuania",
	"Luxembourg",
	"Macao",
	"Madagascar",
	"Malawi",
	"Malaysia",
	"Maldives",
	"Mali",
	"Malta",
	"Marshall Islands (the)",
	"Martinique",
	"Mauritania",
	"Mauritius",
	"Mayotte",
	"Mexico",
	"Micronesia (Federated States of)",
	"Moldova (the Republic of)",
	"Monaco",
	"Mongolia",
	"Montenegro",
	"Montserrat",
	"Morocco",
	"Mozambique",
	"Myanmar",
	"Namibia",
	"Nauru",
	"Nepal",
	"Netherlands (the)",
	"New Caledonia",
	"New Zealand",
	"Nicaragua",
	"Niger (the)",
	"Nigeria",
	"Niue",
	"Norfolk Island",
	"Northern Mariana Islands (the)",
	"Norway",
	"Oman",
	"Pakistan",
	"Palau",
	"Palestine, State of",
	"Panama",
	"Papua New Guinea",
	"Paraguay",
	"Peru",
	"Philippines (the)",
	"Pitcairn",
	"Poland",
	"Portugal",
	"Puerto Rico",
	"Qatar",
	"Republic of North Macedonia",
	"Romania",
	"Russian Federation (the)",
	"Rwanda",
	"Réunion",
	"Saint Barthélemy",
	"Saint Helena, Ascension and Tristan da Cunha",
	"Saint Kitts and Nevis",
	"Saint Lucia",
	"Saint Martin (French part)",
	"Saint Pierre and Miquelon",
	"Saint Vincent and the Grenadines",
	"Samoa",
	"San Marino",
	"Sao Tome and Principe",
	"Saudi Arabia",
	"Senegal",
	"Serbia",
	"Seychelles",
	"Sierra Leone",
	"Singapore",
	"Sint Maarten (Dutch part)",
	"Slovakia",
	"Slovenia",
	"Solomon Islands",
	"Somalia",
	"South Africa",
	"South Georgia and the South Sandwich Islands",
	"South Sudan",
	"Spain",
	"Sri Lanka",
	"Sudan (the)",
	"Suriname",
	"Svalbard and Jan Mayen",
	"Sweden",
	"Switzerland",
	"Syrian Arab Republic",
	"Taiwan",
	"Tajikistan",
	"Tanzania, United Republic of",
	"Thailand",
	"Timor-Leste",
	"Togo",
	"Tokelau",
	"Tonga",
	"Trinidad and Tobago",
	"Tunisia",
	"Turkey",
	"Turkmenistan",
	"Turks and Caicos Islands (the)",
	"Tuvalu",
	"Uganda",
	"Ukraine",
	"United Arab Emirates (the)",
	"United Kingdom of Great Britain and Northern Ireland (the)",
	"United States Minor Outlying Islands (the)",
	"United States of America (the)",
	"Uruguay",
	"Uzbekistan",
	"Vanuatu",
	"Venezuela (Bolivarian Republic of)",
	"Viet Nam",
	"Virgin Islands (British)",
	"Virgin Islands (U.S.)",
	"Wallis and Futuna",
	"Western Sahara",
	"Yemen",
	"Zambia",
	"Zimbabwe",
	"Åland Islands"
];

var states = new Array("Agadir", "Al Hoceima", "Azilal", "Beni Mellal", "Ben Slimane", "Boulemane", "Casablanca", "Chaouen", "El Jadida", "El Kelaa des Sraghna", "Er Rachidia", "Essaouira", "Fes", "Figuig", "Guelmim", "Ifrane", "Kenitra", "Khemisset", "Khenifra", "Khouribga", "Laayoune", "Larache", "Marrakech", "Meknes", "Nador", "Ouarzazate", "Oujda", "Rabat-Sale", "Safi", "Settat", "Sidi Kacem", "Tangier", "Tan-Tan", "Taounate", "Taroudannt", "Tata", "Taza", "Tetouan", "Tiznit");
    // *********************testcities***********************
    
    // *********************testcities***********************
    const selectcity = document.getElementById("city-select");

    
    // Loop through the countries array and create an option element for each country
    for (let i = 0; i < states.length; i++) {
    const option = document.createElement("option");
    option.text = states[i];
    option.value = option.text; 
    selectcity.add(option);
    
    }
    /***************************************************************/
    const select = document.getElementById("country-select");

    
    // Loop through the countries array and create an option element for each country
    for (let i = 0; i < countryList.length; i++) {
    const option = document.createElement("option");
    option.text = countryList[i];
    option.value = option.text; 
    select.add(option);
    
    }
    /***************************************************************/


    const  fileInput = document.querySelector('#fileInput');
    const  bigInput = document.querySelector('#upl');
    const  span = document.querySelector('#span-alert');
    const  bigInputvideo = document.querySelector('#uplvideo');
    const  fileInputvideo = document.querySelector('#filevideo');
    const  spanvideo = document.querySelector('#span-alertvideo');
    bigInput.addEventListener('click', () => {
        fileInput.click();
    });
    fileInput.addEventListener('change', () => {
        // Handle the selected file(s) here
        const ar =  fileInput.files;
        const arr=[];
        for(let i = 0;i<ar.length;i++){
            arr[i] = ar[i].name;
        }
        const name = fileInput.files[0].name;
        console.log(arr);
        // console.log(fileInput.files);
        span.textContent = arr;
    });
    bigInputvideo.addEventListener('click', () => {
        fileInputvideo.click();
    });
    fileInputvideo.addEventListener('change',()=>{
        
        const namevideo = fileInputvideo.files[0].name;
        spanvideo.textContent = namevideo;
    })

    
</script>
    @endsection