<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/custom-css.css">
    

    <!-- Popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Tempus Dominus JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.7.7/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>

    <!-- Tempus Dominus Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.7.7/dist/css/tempus-dominus.min.css" crossorigin="anonymous">
      
      <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
      <script src="assets/plugins/global/plugins.bundle.js"></script>
      

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Employee Portal') }}</title>

</head>
<body>
    <div id="app">

      
      @auth
        <nav class="navbar navbar-expand-xl navbar-light bg-light bgNavbar sticky-top">
          <div class="container-xl font-regular d-flex flex-wrap">
            <div class="col"style="
            position: absolute;
            width: 64px;
            height: 64px;

            background: #D9D9D9;
            "></div> 
            <a class="navbar-brand fivepx text-white" href="/staff/index">
                     <img src="{{('/img/Logo Kanmo.png') }}" class="img-md logoPer" alt="..."> Logo
            </a>
            <button class="navbar-toggler" style="background: #04D7A2;"type="button" data-bs-toggle="collapse" data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse show anavPx row justify-content-evenly" id="navbarWithDropdown">
            <div class="col-lg">
              <ul class="navbar-nav ">
                <li class="nav-item fivepx">
                  <a class="nav-link active text-white " aria-current="page" href="{{route('admin.home')}}">Dashboard</a>
                </li>
                <li class="nav-item fivepx">
                  <a class="nav-link text-white" href="{{route('admin.crudData')}}">Data Records</a>
                </li>
                <!--
                <li class="nav-item dropdown fivepx">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                    Request
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">            
        
                      <li><a class="dropdown-item " href="#">Resignation Request</a></li>  
                      <li>
                          <a class="dropdown-item dropdown-toggle dropend" href="#" data-bs-toggle="dropdown"  id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            Convey
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="convey_req.php">Convey Request</a></li>
                            <li><a class="dropdown-item " href="convey_confirm.php">Convey Confirmation</a></li>
                          </ul>
                    </li>
        
                  </ul>
                  
                </li>
              -->
        
              </ul>
              </div>
              <!--
                  <div class="col-auto">
                    <div class="absen">
                      <button type="button" class="btn btn-outline absen text-white" data-bs-toggle="button" autocomplete="off"><strong style="margin-right:4px">Sign In Absent</strong>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25px" fill="#1D214E" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                      </svg>
                      </button>
                    </div>
                  </div>
                -->
                  <div class="col-1 d-flex">
                    
                    <li class="nav-item dropdown fivepx align-self-center mt-n1 mb-2 pt-0">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item dropdown " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false" v-pre>
                        <svg xmlns="http://www.w3.org/2000/svg" width="64px" viewBox="0 0 256 256"><path fill="white" d="M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26ZM71.44 198a66 66 0 0 1 113.12 0a89.8 89.8 0 0 1-113.12 0ZM94 120a34 34 0 1 1 34 34a34 34 0 0 1-34-34Zm99.51 69.64a77.53 77.53 0 0 0-40-31.38a46 46 0 1 0-51 0a77.53 77.53 0 0 0-40 31.38a90 90 0 1 1 131 0Z"/></svg>
                        <!--<img src="{{('/img/Man2.png')}}" class="img-md logoPer pfp" alt="...">-->
                      </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">            
           
                          <li>
                            
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>  
            
                        </ul>
                      
                      </li>
                      

                      <!--
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{('/img/Man2.png')}}" class="img-md logoPer pfp" alt="...">
                      </a>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                      
                      -->
                  </div>
                  
        
                  
        
                </div>
            </div>
          </div>
        
        
          </div>
        </nav>

        
        @else
        <nav class="navbar navbar-expand-xl navbar-light bg-light bgNavbar" style="height: 90px;">
          <div class="container-xl font-regular d-flex flex-wrap">
                  <a class="nav-link text-white" href="/">Employee Portal</a>
            <div class="collapse navbar-collapse show anavPx row justify-content-evenly" id="navbarWithDropdown">
            <div class="col-lg">
              <ul class="navbar-nav ">
        
              </ul>
              </div>
                  <div class="col-auto">
                    <div class="absen">
                    </div>
                  </div>
                  
                  <div class="col-auto">
                  </div>
                  
                  
        
                  
        
                </div>
            </div>
          </div>
        
        
          </div>
        </nav>
        <!-- NAV END HERE -->
        @endauth

        <main class="">
          {{$slot}}
    
            


        <!-- footer begins -->
        <footer class="border-top text-center small text-muted py-3">
            <p class="m-0">Copyright &copy; {{date('Y')}} <a href="/" class="text-muted">Employee Portal</a>. All rights reserved.</p>
          </footer>
      
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          <script>
            $('[data-toggle="tooltip"]').tooltip()
          </script>
    </div>
</body>
</html>
