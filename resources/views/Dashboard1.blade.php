@extends('app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #dee1e4;">
            <div class="sidebar-heading text-center py-4  fs-4 fw-bold text-uppercase border-bottom"><h3> Mahjour </h3>
              <img class="img-account-profile rounded-circle mb-2 mx-auto" width="100px" src="/images/us.jpg" alt="">
              <p>owner</p>
            </div>

                                    
            <div class="list-group list-group-flush my-3">
                <button href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</button>
                <button href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold PEB"><i class="fa-solid fa-user me-2"></i>Profile</button>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold MPB"><i class="fa-solid fa-house me-2"></i>My properties</a>
                <a href="/properties/create" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-plus me-2"></i>Add Property</a>
                <button href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-comment-dots me-2"></i>Chat</button>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Published Property</p>
                            </div>
                            <i class="fa-solid fa-house primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Pending Properties</p>
                            </div>
                           
                            <i class="fa-solid fa-spinner primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Visitors Online</p>
                            </div>
                            <i class="fa-solid fa-heart primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    
                </div>
                <!-- listing -->
                div
                @if (session('flash_message'))
                <div class="alert alert-danger">
                {{ session('flash_message') }}
                </div>
                @endif
                <div class="row my-5 LT">
                  <h3>My properties</h3>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                          <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                    src="images/b-1.jpg"
                                    alt=""
                                    style="width: 120px;"
                                    class="rounded"
                                    />
                                <div class="ms-3 ">
                                  <p class="fw-bold mb-1">Real estate</p>
                                  <p class="text-muted mb-0">Est St, 77 - Central Park South, NYC</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">2023/07/12</p>
                            </td>
                            <td>
                              <span class="badge badge-success bg-success rounded-pill text-white">Active</span>
                            </td>
                            
                            <td>
                              <button type="button" class="btn badge badge-success  btn-warning rounded-pill">
                                Edit
                              </button>
                            </td>
                            
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                    src="images/b-1.jpg"
                                    alt=""
                                    style="width: 120px;"
                                    class="rounded"
                                    />
                                <div class="ms-3 ">
                                  <p class="fw-bold mb-1">Real estate</p>
                                  <p class="text-muted mb-0">Est St, 77 - Central Park South, NYC</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">2023/07/12</p>
                            </td>
                            <td>
                              <span class="badge badge-success bg-danger rounded-pill text-white">not Active</span>
                            </td>
                            
                            <td>
                                
                              <button type="button" class="btn badge badge-success  btn-warning rounded-pill">
                                Edit
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>

            </div>
            <!-- ****profile*** -->
            <div class="profile PE">


                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <nav class="nav nav-borders">
                        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
                        
                    </nav>
                    <hr class="mt-0 mb-4">
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile rounded-circle mb-2" width="100px" src="/images/us.jpg" alt="">
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <button class="btn scl text-white" type="button">Upload new image</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form>
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">First name</label>
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (organization name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                                            </div>
                                            <!-- Form Group (location)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLocation">Location</label>
                                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                            </div>
                                            <!-- Form Group (birthday)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <button class="btn scl text-white" type="button">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- ************my properties************** -->
            <div class="MP mx-4">
              <div class="row my-5 LT">
                <h3>My properties</h3>
                  <table class="table align-middle mb-0 bg-white">
                      <thead class="bg-light">
                          <tr>
                              <th></th>
                              <th>Position</th>
                              <th>Status</th>
                              <th>Actions</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        @foreach($Pr as $p)
                        
                        @foreach ($p['properties'] as $m)
                        
                        {{-- @foreach($pp['mediaproperty'] as $img) --}}

                        <tr>
                          <td>
                            
                            <div class="d-flex align-items-start">
                              <img src="/images/{{$m['mediaproperty'][0]['image_path']}}" alt="" style="width: 120px;" class="rounded"/>
                              <div class="ms-3 ">
                                <p class="fw-bold mb-1">{{$m['title']}}</p>
                                <p class="text-muted mb-0">{{$m['adrress']}}</p>
                                {{$m['id']}}
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fw-normal mb-1">2023/07/12</p>
                          </td>
                          <td>
                            <span class="badge badge-success bg-success rounded-pill text-white">Active</span>
                          </td>
                          
                          <td>
                            <button type="button" class="btn badge badge-success  btn-warning rounded-pill">
                              Edit
                            </button>
                          </td>
                          <td>
                            <form method="POST" action="{{url('properties/'.$m['id'])}}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn" type="submit">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </button>
                            </form>
                            
                          </td>
                        </tr>
                        {{-- @endforeach --}}
                        @endforeach
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>
            <!-- *****************add property*********** -->
            <div class="d-flex w-100 justify-content-center"> 

              <section class=" user-page section-padding my-3 AP">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                            <!-- <div class="col-lg-12 mobile-dashbord dashbord">
                                <div class="dashboard_navigationbar dashxl">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                        <ul id="myDropdown" class="dropdown-content">
                                            <li>
                                                <a href="dashboard.html">
                                                    <i class="fa fa-map-marker mr-3"></i> Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="fa fa-user mr-3"></i>Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="my-listings.html">
                                                    <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                                </a>
                                            </li>
                                            <li>
                                                <a href="favorited-listings.html">
                                                    <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                                </a>
                                            </li>
                                            <li>
                                                <a class="active" href="add-property.html">
                                                    <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                                </a>
                                            </li>
                                            <li>
                                                <a href="payment-method.html">
                                                    <i class="fas fa-credit-card mr-3"></i>Payments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="invoice.html">
                                                    <i class="fas fa-paste mr-3"></i>Invoices
                                                </a>
                                            </li>
                                            <li>
                                                <a href="change-password.html">
                                                    <i class="fa fa-lock mr-3"></i>Change Password
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index.html">
                                                    <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <div class="single-add-property">
                                <h3>Property description and price</h3>
                                <div class="property-form-group">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="title">Property Title</label>
                                                    <input type="text" name="title" id="title" placeholder="Enter your property title">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="description">Property Description</label>
                                                    <textarea id="description" name="pro-dexc" placeholder="Describe about your property"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                
                                                <label for="area">type</label>
                                                <select name="type" id="type">
                                                    <option value="volvo">House</option>
                                                    <option value="saab">Apartement</option>
                                                    <option value="mercedes">Garage</option>
                                                </select>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                               
                                                    <label for="area">Rooms</label>
                                                    <select name="type" id="type">
                                                    <option value="volvo">1</option>
                                                    <option value="saab">2</option>
                                                    <option value="mercedes">3</option>
                                                </select>
                                               
                                            </div>
                                        </div>
            
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb">
                                                    <label for="price">Price</label>
                                                    <input type="text" name="price" placeholder="USD" id="price">
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb last">
                                                    <label for="area">Area</label>
                                                    <input type="text" name="area" placeholder="Sqft" id="area">
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>property Media</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="/file-upload" class="dropzone">
                                                 <div class="aploadInsideConatiner" id="upl" >
            
                                                
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            
                                            <span id="span-alert">Click Here Or Drop Files To Upload</span>
                                            </div>
                                            <input type="file" id="fileInput" style="display:none">
                                            </form>
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
                                                <input type="text" name="city" placeholder="Enter Your City" id="city">
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
                                                <input type="text" name="country" placeholder="Enter Your Country" id="country">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="latitude">Google Maps latitude</label>
                                                <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="longitude">Google Maps longitude</label>
                                                <input type="text" name="longitude" placeholder="Google Maps longitude" id="longitude">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Extra Information</h3>
                                <div class="property-form-group">
                                <div class="row">
            
                                        <div class="col-lg-4 col-md-12">
                                                        
                                                        <label for="area">Age</label>
                                                        <select name="type" id="type">
                                                        <option value="volvo">1</option>
                                                        <option value="saab">2</option>
                                                        <option value="mercedes">3</option>
                                                    </select>
                                                    
                                                </div>
            
                                                <div class="col-lg-4 col-md-12">
                                                        
                                                        <label for="area">Rooms</label>
                                                        <select name="type" id="type">
                                                        <option value="volvo">1</option>
                                                        <option value="saab">2</option>
                                                        <option value="mercedes">3</option>
                                                    </select>
                                                    
                                                </div>
            
            
            
                                            <div class="col-lg-4 col-md-12">
                                               
                                               <label for="area">BathRooms</label>
                                               <select name="type" id="type">
                                               <option value="volvo">1</option>
                                               <option value="saab">2</option>
                                               <option value="mercedes">3</option>
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
                                                            <input id="check-a" type="checkbox" name="check">
                                                            <label for="check-a">Air Conditioning</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-b" type="checkbox" name="check">
                                                            <label for="check-b">Swimming Pool</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-c" type="checkbox" name="check">
                                                            <label for="check-c">Central Heating</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-d" type="checkbox" name="check">
                                                            <label for="check-d">Laundry Room</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-e" type="checkbox" name="check">
                                                            <label for="check-e">Gym</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-g" type="checkbox" name="check">
                                                            <label for="check-g">Alarm</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-h" type="checkbox" name="check">
                                                            <label for="check-h">Window Covering</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-i" type="checkbox" name="check">
                                                            <label for="check-i">Refrigerator</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-j" type="checkbox" name="check">
                                                            <label for="check-j">TV Cable & WIFI</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-k" type="checkbox" name="check">
                                                            <label for="check-k">Microwave</label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
              
            
          </div>
        </div>
      </div>
      <script src="{{asset('JS/add.js')}}" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
@endsection
