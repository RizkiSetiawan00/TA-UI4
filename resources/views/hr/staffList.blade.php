<x-hr-layout>
    <!-- Content Start -->

    <div class="container mt-3 pt-5">

        <!-- Start of content on ROW 1 -->
          <div class="row justify-content-between">
        
            <!-- Start of Staff List -->
            <div class="col">
            
              <div class="row align-items-center">
                <div class="col-auto font-bold">
                  <h1 class="font-color1" style="">Staff List</h1>
                </div>
        
                <div class="col-auto font-bold">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-filter" viewBox="0 0 16 16"><path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/></svg>
        
                  </button>
                </div>
              </div>
        
            </div>
            <!-- End of Staff List -->
        
            <!-- Start of search bar and add new -->
            <div class="col ">
            
            <div class="row justify-content-end align-items-center">
              <div class="col-auto font-bold ">
                
                <form type="GET" action="{{route('hr.search')}}">
                    <div class="input-group ">
                        <input name="search" class="form-control border-end-0 border searchBar2 p-2" type="search" placeholder="Search" id="example-search-input">
                        <span class="input-group-append">
                            <button class="searchBar2 p-2 btn btn-outline-secondary border-start-0 border-bottom-0 border ms-n5" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                    </div>
                  </form>
        
              </div>
        
              <div class="col-auto font-bold">
                <a href="/hr/addnew_staff">
                  <button type="button" class="btnStaff p-2 align-items-center font-color1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
                  Add New
                  </button>
                </a>
              </div>
            </div>
        
          </div>
          <!-- End of search bar and add new -->
        
          </div>
        <!-- End of content on ROW 1 -->

            
        @if (session('berhasil'))
            <div class="row">
                <div class="col" >
                    <div class="row align-item-center">
                        <div class="col d-flex alertBar2" >
                            <h5 class="text-white font-bold m-0 p-1">
                                {{ session('berhasil') }}</h5>
                        </div>

                    </div>
                </div>

            </div>
          @endif
        
        <!-- Start of content on ROW 2 -->
        <div class="row justify-content-start row-gap-5 mt-2 pt-2">
        
          <!-- Start of Card1 -->
        @foreach($profileAjanya as $showProfile)
          <div class="col-xl-4">
        
            <div class="container-fluid cardStaff">
        
              <div class="row justify-content-center align-items-center mt-2 pt-2 pb-3">
                <div class="col-8 mt-2 pt-2">
                  <img src="{{('/img/man2.png')}}" width="auto" class="pfp img-fluid imgCard" alt="">
                </div>
              </div>
        
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-8 mt-2 pt-2">
                  <p class="font-bold font-color1 textCard1 m-0 p-0 text-truncate" style="max-height: 30px;" >{{$showProfile->name}}</p>
                  <p class=" font-color1 text-lowercase"  >{{$showProfile->title1Name}}</p>
                </div>
              </div>
        
              <div class="row justify-content-center align-items-center text-center mx-2">
                <div class="col">
                  
                  <div class="container-fluid">
        
                    <div class="row justify-content-start align-items-center text-start">
                        <div class="col-6">
                          <p class="font-bold font-color1 " style="margin:0px;padding:0;"  >NIP</p>
                        </div>
                        <div class="col">
                          <p class="font-color1 " style="margin:0px;padding:0;"  >{{$showProfile->nip}}</p>
                        </div>
                    </div>
        
                    <div class="row justify-content-start align-items-center text-start">
                        <div class="col-6">
                          <p class="font-bold font-color1 " style="margin:0px;padding:0;"  >Date Of Birth</p>
                        </div>
                        <div class="col">
                          <p class="font-color1 " style="margin:0px;padding:0;"  >{{  date('d F Y', strtotime($showProfile->birth))  }}</p>
                        </div>
                    </div>
        
                    <div class="row justify-content-start align-items-center text-start">
                        <div class="col-6">
                          <p class="font-bold font-color1 " style="margin:0px;padding:0;"  >Phone Number</p>
                        </div>
                        <div class="col">
                          <p class="font-color1 " style="margin:0px;padding:0;"  >0{{$showProfile->phoneNumb}}</p>
                        </div>
                    </div>
        
                    <div class="row justify-content-start align-items-center text-start ">
                        <div class="col-6">
                          <p class="font-bold font-color1 " style="margin:0px;padding:0;"  >Email</p>
                        </div>
                        <div class="col">
                          <p class="font-color1 text-truncate" style="margin:0px;padding:0; max-width: 150px"  >{{$showProfile->email}}</p>
                        </div>
                    </div>
        
                  </div>
        
                </div>
        
              <div class="row justify-content-center align-items-center text-center pb-2 py-1 m-0">
                <div class="col my-2 py-2 d-grid">
                  <a href="/hr/staff_moredetails/{{$showProfile->id}}" class="text-decoration-none text-body buttonDetails"target="_blank" rel="noopener noreferrer">
                  <button type="button" class="p-2 font-bold" style="background: none; border: none;">More Details</button>
                  </a>
                </div>
              </div>
            </div>
        
            </div>
        
          </div>
          <!-- End of Card1 -->
          @endforeach
        
        
        </div>
        <!-- End of content on ROW 2 -->
        <div class="p-3 mt-3 d-flex justify-content-center">
          <div class="row  ">{{ $profileAjanya->links() }} </div>
        </div>
        
        
        </div>
        
    <!-- Content End -->
</x-hr-layout>