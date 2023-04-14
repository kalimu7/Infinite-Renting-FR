@extends('app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #dee1e4;">
            
                
            
            <div class="sidebar-heading text-center py-4  fs-4 fw-bold text-uppercase border-bottom"><h3>name</h3>
              <img class="img-account-profile rounded-circle mb-2 mx-auto" width="100px" src="/images/us.png" alt="">
              <p>owner</p>
            </div>

                                    
            <div class="list-group list-group-flush my-3">
                <button href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</button>
                <button href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold PEB"><i class="fa-solid fa-user me-2"></i>Profile</button>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold MPB"><i class="fa-solid fa-house me-2"></i>My properties</a>
                <a href="/properties/create" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-plus me-2"></i>Add Property</a>
                <a href="/chatify" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
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
                    @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
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
                
                @if (session('flash_message'))
                <div class="alert alert-danger">
                {{ session('flash_message') }}
                </div>
                @endif
                
                {{-- ****************************************************************************************** --}}
                <div class=" mx-4">
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
                              
                              
                              
                              {{-- @foreach($p['mediaproperty'] as $img) --}}
      
                              <tr>
                                <td>
                                  
                                  <div class="d-flex align-items-start">
                                    {{-- @foreach($p['MediaProperty'] as $img) --}}
                                    <img src="/images/{{$p['MediaProperty'][0]['image_path']}}" alt="" style="width: 120px;" class="rounded"/>
                                    {{-- @endforeach --}}
                                    <div class="ms-3 ">
                                      <p class="fw-bold mb-1">{{$p['title']}}</p>
                                      <p class="text-muted mb-0">{{$p['adrress']}}</p>
                                      {{$p['id']}}
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="fw-normal mb-1">2023/07/12</p>
                                </td>
                                <td>
                                @if($p['approve_status'] == 0)
                                <span class="badge badge-success bg-danger rounded-pill text-white">Not Approved</span>
                                @else
                                <span class="badge badge-success bg-success rounded-pill text-white">Approved</span>
                                @endif
                                </td>
                                
                                <td>
                                  <form action="/approve/{{$p['id']}}" method="post">
                                        @csrf
                                      <button type="submit" class="btn badge badge-success  btn-warning rounded-pill">Switch</button>
                                  </form>
                                
                                </td>
                                <td>
                                  
                                    <a href="/properties/{{$p['id']}}/edit" type="submit" class="btn badge badge-success  btn-warning rounded-pill">edit</a>
                                  
                                  </td>
                                <td>
                                  <form method="POST" action="{{url('properties/'.$p['id'])}}" accept-charset="UTF-8" style="display:inline">
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
                            </tbody>
                          </table>
                    </div>
                  </div>
                {{-- ****************************************************************************************** --}}
            </div>
            <!-- ****profile*** -->
            <div class="profile PE">


                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <nav class="nav nav-borders">
                        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
                        
                    </nav>
                    <hr class="mt-0 mb-4">
                    @foreach($Pr as $p)
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                <form action="/iupdate" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <img class="img-account-profile rounded-circle mb-2" width="100px" src="/images/{{$p['profile_photo_path']}}" alt="">
                                    
                                    <!-- Profile picture help block-->
                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                    <!-- Profile picture upload button-->
                                    <input type="file" name='profile_picture'>
                                    {{-- <button class="btn scl text-white" type="button">Upload new image</button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    
                                        <!-- Form Group (username)-->
                                        
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">First name</label>
                                                <input class="form-control" name="firstname" id="inputFirstName" type="text"  value="{{$p['name']}}">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" name="lastname" id="inputLastName" type="text" placeholder="Enter your last name" value="{{$p['last_name']}}">
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (organization name)-->
                                            
                                            <!-- Form Group (location)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLocation">Location</label>
                                                <input class="form-control" name="adrress" id="inputLocation" type="text" placeholder="Enter your location" value="{{$p['adrress']}}">
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="{{$p['email']}}">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                                <input class="form-control" id="inputPhone" type="tel" name="phonenumber" placeholder="Enter your phone number" value="{{$p['phonenumber']}}">
                                            </div>
                                            <!-- Form Group (birthday)-->
                                            
                                        </div>
                                        <!-- Save changes button-->
                                        <button type="submit" class="btn scl text-white">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
        </div>
            
@endsection
            <!-- ************my properties************** -->
           