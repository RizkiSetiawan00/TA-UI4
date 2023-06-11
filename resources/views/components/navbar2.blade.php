<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-light bg-light bgNavbar sticky-top">
          <div class="container-xl font-regular d-flex flex-wrap">
            <a class="navbar-brand fivepx text-white" href="#">
                    <div class="col"style="
                    position: absolute;
                    width: 64px;
                    height: 64px;
        
                    background: #D9D9D9;
                    "></div> 
                     <img src="assets/img/Logo Kanmo.png" class="img-md logoPer" alt="..."> Logo
            </a>
            <button class="navbar-toggler" style="background: #04D7A2;"type="button" data-bs-toggle="collapse" data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse show anavPx row justify-content-evenly" id="navbarWithDropdown">
            <div class="col-lg">
              <ul class="navbar-nav ">
                <li class="nav-item fivepx">
                  <a class="nav-link active text-white " aria-current="page" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item fivepx">
                  <a class="nav-link text-white" href="profile.php">Profile</a>
                </li>
                <li class="nav-item fivepx">
                  <a class="nav-link text-white" href="worksheet.php">Worksheet</a>
                </li>
                <li class="nav-item dropdown fivepx">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                    Request
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">            
        
                      <li><a class="dropdown-item bgIjo" href="#">Resignation Request</a></li>  
                      <li>
                          <a class="dropdown-item dropdown-toggle dropend" href="#" data-bs-toggle="dropdown"  id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            Convey
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item bgIjo" href="convey_req.php">Convey Request</a></li>
                            <li><a class="dropdown-item bgIjo" href="convey_confirm.php">Convey Confirmation</a></li>
                          </ul>
                    </li>
        
                  </ul>
                  
                </li>
        
              </ul>
              </div>
                  <div class="col-auto">
                    <div class="absen">
                      <button type="button" class="btn btn-outline absen text-white" data-bs-toggle="button" autocomplete="off"><strong style="margin-right:4px">Sign In Absent</strong>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="#1D214E" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                      </svg>
                      </button>
                    </div>
                  </div>
                  
                  <div class="col-auto">
                    <img src="assets/img/Man2.png" class="img-md logoPer pfp" alt="...">
                  </div>
                  
                  
        
                  
        
                </div>
            </div>
          </div>
        
        
          </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
