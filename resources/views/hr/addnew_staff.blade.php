<x-layout>
    <!-- Content Start -->

<!-- Content Start -->
<div class="container">
    <!-- Start of Topbar -->

<div class="row d-flex justify-content-center mb-5 gap-5">

    <div class="col-xl topbar g-col-6 " >
        <div class="container row-gap-3 pb-3" style="margin: 30px 25px 25px 25px;">

            <div class="row pt-2">
                <div class="col-xl h-20">
                <div class="container-fluid " >

                <div class="row justify-content-between pe-5">
                <div class="col-6">

                    <div class="row align-items-center gap-0 row-gap-3">
                        <div class="col-xl-auto align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 32 32"><path fill="#1D214E" d="M22 22v6H6V4h10V2H6a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6Z"/><path fill="#1D214E" d="m29.54 5.76l-3.3-3.3a1.6 1.6 0 0 0-2.24 0l-14 14V22h5.53l14-14a1.6 1.6 0 0 0 0-2.24ZM14.7 20H12v-2.7l9.44-9.45l2.71 2.71ZM25.56 9.15l-2.71-2.71l2.27-2.27l2.71 2.71Z"/></svg>
                        </div>
                        <div class="col-xl float-start " style="padding: -10px;">

                            <div class="row align-items-center">
                                <div class="col-xl-auto text-start font-bold font-color1 text5"  >
                                    Add New Staff Profile
                                </div>
                            </div>

                        </div>

                    </div>
                
                </div>

                </div>

                </div>

                </div>
            
            </div>
            </div>
        </div>
    </div>
    <!-- End of Topbar -->

<!-- Start of  Edit Profile -->

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5">

<div class="col-xl bg-employee g-col-6 " >
<div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

    <div class="row">
        <div class="col-xl">
            <!-- Start of the Alert Bar -->
            <div class="row mb-3">
                <div class="col" >
                    <div class="row align-item-center">
                        <div class="col d-flex me-5 alertBar2" >
                            <h5 class="text-white m-0 p-1">Add a New Staff Profile</h5>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End of the Alert Bar -->
            
            <!-- Start of the Profile Picture -->
            <div class="row mb-3">
                <div class="col" >
                    <div class="row justify-content-center align-items-center">
                        <div class="col-auto">
                            <img src="{{('/img/Man2.png')}}" class="img-md profileStaff pfp" alt="...">
                        </div>

                    </div>
                </div>

            </div>
            <!-- End of the Profile Picture -->

        <div class="container-fluid " >
            <form action="/tambahbaru" method="POST">
                @csrf

        <!-- Start of the Group 1 -->
        <div class="row mb-3">
            <div class="col ps-1">
            
                <!-- Start of the FIRST ROW of the Group 1 -->
                <div class="row mb-3">

                        <!-- Start of the Name of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center justfy-content-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1Z"/></svg>
                            </div>
                            <div class="col-md-2 text-start font-bold font-color1">
                                Name
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="name" class="form-control" id="inputEmail3"  value="{{ old('name') }}">
                            </div>
                            @error('name')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                        <!-- End of the Name of the Group 1 -->

                        <!-- Start of the Join Date of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M12.5 11.95q.725-.8 1.113-1.825T14 8q0-1.1-.388-2.125T12.5 4.05q1.5.2 2.5 1.325T16 8q0 1.5-1 2.625t-2.5 1.325ZM18 20v-3q0-.9-.4-1.713t-1.05-1.437q1.275.45 2.363 1.163T20 17v3h-2Zm2-7v-2h-2V9h2V7h2v2h2v2h-2v2h-2ZM8 12q-1.65 0-2.825-1.175T4 8q0-1.65 1.175-2.825T8 4q1.65 0 2.825 1.175T12 8q0 1.65-1.175 2.825T8 12Zm-8 8v-2.8q0-.85.438-1.563T1.6 14.55q1.55-.775 3.15-1.163T8 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T16 17.2V20H0Zm8-10q.825 0 1.413-.588T10 8q0-.825-.588-1.413T8 6q-.825 0-1.413.588T6 8q0 .825.588 1.413T8 10Zm-6 8h12v-.8q0-.275-.138-.5t-.362-.35q-1.35-.675-2.725-1.012T8 15q-1.4 0-2.775.338T2.5 16.35q-.225.125-.363.35T2 17.2v.8ZM8 8Zm0 10Z"/></svg>
                            </div>
                            <div class="col-md-3 text-start font-bold font-color1">
                                Join Date
                            </div>
                            <div class="col-md-7 text-start">
                                <input id="joinDate" name="joinDate" class="form-control" type="date" value="{{ old('joinDate') }}"/>
                                <span id="startDateSelected"></span>
                            </div>
                            @error('joinDate')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                        <!-- End of the Join Date of the Group 1 -->

                        <!-- Start of the Department of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="#1D214E" d="M15 6a3.001 3.001 0 0 1-2 2.83V11h3a3 3 0 0 1 3 3v1.17a3.001 3.001 0 1 1-2 0V14a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v1.17a3.001 3.001 0 1 1-2 0V14a3 3 0 0 1 3-3h3V8.83A3.001 3.001 0 1 1 15 6Zm-3-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2ZM6 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2Zm12 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2Z"/></g></svg>
                            </div>
                            <div class="col-md-3 text-start font-bold font-color1">
                                Department
                            </div>
                            <div class="col-md-7 text-start">
                                
                                <select value="{{ old('departemenName') }}" class="form-select formSelect"  name="departemenName" aria-label="Default select">
                                    <option disabled selected="">Select Department</option>
                                    @foreach ($depart as $depart)
                                    <option value="{{$depart->id}}">{{ $depart->departemenName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('departemenName')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                        <!-- End of the Department of the Group 1 -->

                </div>
                <!-- End of the FIRST ROW of the Group 1 -->
            
                <!-- Start of the SECOND ROW of the Group 1 -->
                <div class="row mb-3">

                        <!-- Start of the NIP of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 1024 1024"><path fill="#1D214E" d="M872 394c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8H708V152c0-4.4-3.6-8-8-8h-64c-4.4 0-8 3.6-8 8v166H400V152c0-4.4-3.6-8-8-8h-64c-4.4 0-8 3.6-8 8v166H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h168v236H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h168v166c0 4.4 3.6 8 8 8h64c4.4 0 8-3.6 8-8V706h228v166c0 4.4 3.6 8 8 8h64c4.4 0 8-3.6 8-8V706h164c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8H708V394h164zM628 630H400V394h228v236z"/></svg>
                            </div>
                            <div class="col-md-2 text-start font-bold font-color1">
                                NIP
                            </div>
                            <div class="col-md-7">
                                <input value="{{ old('nip') }}"  type="number"  name="nip" class="form-control" id="inputEmail3">
                            </div>
                            @error('nip')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                        <!-- End of the NIP of the Group 1 -->

                        <!-- Start of the Title of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z"/></svg>
                            </div>
                            <div class="col-md-3 text-start font-bold font-color1">
                                Title
                            </div>
                            <div class="col-md-7 text-start">
                                
                                <select value="{{ old('title1Name') }}"  name="title1Name" class="form-select formSelect" aria-label="Default select">
                                    <option disabled selected="">Select Title</option>
                                    @foreach ($title1 as $title1)
                                    <option value="{{$title1->id}}">{{ $title1->title1Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('title1Name')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                        <!-- End of the Title of the Group 1 -->

                        <!-- Start of the Department of the Group 1 -->
                    <div class="col-xl-4">
                        
                    <div class="row d-flex align-items-center">
                            <div class="col-1 ps-1 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M15 9h2v2h-2V9m2-4h-2v2h2V5m-6 10h2v-2h-2v2m2-10h-2v2h2V5m-2 6h2V9h-2v2M9 5H7v2h2V5m0 4H7v2h2V9m5.55 12H13v-3.5h-2V21H5V3h14v8.03c.71.06 1.39.28 2 .6V1H3v22h12.91c-.41-.56-.91-1.24-1.36-2M7 19h2v-2H7v2m2-6H7v2h2v-2m13 3.5c0 2.6-3.5 6.5-3.5 6.5S15 19.1 15 16.5c0-1.9 1.6-3.5 3.5-3.5s3.5 1.6 3.5 3.5m-2.3.1c0-.6-.6-1.2-1.2-1.2s-1.2.5-1.2 1.2c0 .6.5 1.2 1.2 1.2s1.3-.6 1.2-1.2Z"/></svg>
                            </div>
                            <div class="col-md-3 text-start font-bold font-color1">
                                Location
                            </div>
                            <div class="col-md-7 text-start">
                                
                            <select value="{{ old('lokasiName') }}"  name="lokasiName" class="form-select formSelect" aria-label="Default select">
                                    <option disabled selected="">Select Location</option>
                                    @foreach ($lokasi as $lokasi)
                                    <option value="{{$lokasi->id}}">{{ $lokasi->lokasiName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('lokasiName')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        </div>
                        
                    </div>
                        <!-- End of the Department of the Group 1 -->

                <!-- End of the SECOND ROW of the Group 1 -->
            

                <!-- Start of the THIRD ROW of the Group 1 -->
                <div class="row mb-3">

                    <!-- Start of the Id Number of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M22 3H2c-1.09.04-1.96.91-2 2v14c.04 1.09.91 1.96 2 2h20c1.09-.04 1.96-.91 2-2V5a2.074 2.074 0 0 0-2-2m0 16H2V5h20v14m-8-2v-1.25c0-1.66-3.34-2.5-5-2.5c-1.66 0-5 .84-5 2.5V17h10M9 7a2.5 2.5 0 0 0-2.5 2.5A2.5 2.5 0 0 0 9 12a2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 9 7m5 0v1h6V7h-6m0 2v1h6V9h-6m0 2v1h4v-1h-4"/></svg>
                        </div>
                        <div class="col-md-2 text-start font-bold font-color1">
                            ID Number
                        </div>
                        <div class="col-md-7">
                            <input value="{{ old('idNumb') }}"  type="number"  name="idNumb" class="form-control" id="inputEmail3">
                        </div>
                        @error('idNumb')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                </div>
                    <!-- End of the ID Number of the Group 1 -->

                        <!-- Start of the Email of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M1.75 3h20.5c.966 0 1.75.784 1.75 1.75v14a1.75 1.75 0 0 1-1.75 1.75H1.75A1.75 1.75 0 0 1 0 18.75v-14C0 3.784.784 3 1.75 3ZM1.5 7.412V18.75c0 .138.112.25.25.25h20.5a.25.25 0 0 0 .25-.25V7.412l-9.52 6.433c-.592.4-1.368.4-1.96 0Zm0-2.662v.852l10.36 7a.25.25 0 0 0 .28 0l10.36-7V4.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25Z"/></svg>
                                </div>
                                <div class="col-md-3 text-start font-bold font-color1">
                                    Email
                                </div>
                                <div class="col-md-7">
                                    <input value="{{ old('email') }}"  type="email"  name="email" class="form-control" id="inputEmail3">
                                </div>
                                @error('email')
                                <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>
                            <!-- End of the Email of the Group 1 -->

                        <!-- Start of Birth of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 2048 2048"><path fill="#1D214E" d="M1920 1920v128H0v-128h128v-576q0-66 25-124t68-101t102-69t125-26h448V672q0-9 7-15t18-10t22-5t17-2q6 0 17 1t21 5t18 10t8 16v352h448q66 0 124 25t101 69t69 102t26 124v576h128zM448 1152q-37 0-70 13t-58 36t-42 54t-21 68q37 41 86 63t105 22q66 0 114-26t91-76q11-12 22-19t29-7q17 0 28 7t23 19q42 49 90 75t115 27q66 0 114-26t91-76q11-12 22-19t29-7q17 0 28 7t23 19q42 49 90 75t115 27q55 0 104-22t87-63q-4-36-20-67t-42-55t-59-36t-70-13H448zm-192 768h1408v-435q-48 24-93 37t-99 14q-72 0-137-24t-119-73q-54 48-119 72t-137 25q-72 0-137-24t-119-73q-54 48-119 72t-137 25q-54 0-99-13t-93-38v435zM960 512q-26 0-45-19t-19-45q0-12 8-31t18-40t21-40t17-30q6 11 16 30t21 40t19 40t8 31q0 26-19 45t-45 19z"/></svg>
                                </div>
                                <div class="col-md-3 text-start font-bold font-color1">
                                    Birth
                                </div>
                                <div class="col-md-7 text-start">
                                    <input id="birth" name="birth" class="form-control" type="date" value="{{ old('birth') }}"/>
                                    <span id="startDateSelected"></span>
                                </div>
                                @error('birth')
                                <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>
                            <!-- End of the Birth of the Group 1 -->
            </div>
            <!-- End of the THIRD ROW of the Group 1 -->
            

                <!-- Start of the Fourth ROW of the Group 1 -->
                <div class="row mb-3">

                    <!-- Start of the Brand of the Group 1 -->
                <div class="col-xl-4">
                    
                <div class="row d-flex align-items-center">
                        <div class="col-1 ps-1 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 16 16"><path fill="#1D214E" d="M8 8.5c-.08 0-.15-.02-.22-.05L1.28 5.2a.5.5 0 0 1 0-.9l6.5-3.25c.14-.07.31-.07.45 0l6.5 3.25a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05ZM2.62 4.75L8 7.44l5.38-2.69L8 2.06L2.62 4.75Z"/><path fill="#1D214E" d="M8 11.75c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67L2.62 8L8 10.69L13.38 8l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/><path fill="#1D214E" d="M8 15c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67l-2.36 1.18L8 13.94l5.38-2.69l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/></svg>
                        </div>
                        <div class="col-md-2 text-start font-bold font-color1">
                            Brand
                        </div>
                        <div class="col-md-7 text-start">
                            
                            <select value="{{ old('brandName') }}"  name="brandName" class="form-select formSelect" aria-label="Default select">
                                <option disabled selected="">Select Brand</option>
                                @foreach ($brand as $brand)
                                <option value="{{$brand->id }}">{{ $brand->brandName }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('brandName')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                </div>
                    <!-- End of the Brand of the Group 1 -->

                        <!-- Start of the Password of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 512 512"><path fill="none" stroke="#1D214E" stroke-linejoin="round" stroke-width="32" d="M218.1 167.17c0 13 0 25.6 4.1 37.4c-43.1 50.6-156.9 184.3-167.5 194.5a20.17 20.17 0 0 0-6.7 15c0 8.5 5.2 16.7 9.6 21.3c6.6 6.9 34.8 33 40 28c15.4-15 18.5-19 24.8-25.2c9.5-9.3-1-28.3 2.3-36s6.8-9.2 12.5-10.4s15.8 2.9 23.7 3c8.3.1 12.8-3.4 19-9.2c5-4.6 8.6-8.9 8.7-15.6c.2-9-12.8-20.9-3.1-30.4s23.7 6.2 34 5s22.8-15.5 24.1-21.6s-11.7-21.8-9.7-30.7c.7-3 6.8-10 11.4-11s25 6.9 29.6 5.9c5.6-1.2 12.1-7.1 17.4-10.4c15.5 6.7 29.6 9.4 47.7 9.4c68.5 0 124-53.4 124-119.2S408.5 48 340 48s-121.9 53.37-121.9 119.17ZM400 144a32 32 0 1 1-32-32a32 32 0 0 1 32 32Z"/></svg>
                                </div>
                                <div class="col-md-3 text-start font-bold font-color1">
                                    Password
                                </div>
                                <div class="col-md-7">
                                    <input name="password" type="password" class="form-control" id="inputEmail3">
                                </div>
                                @error('password')
                                <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>
                            <!-- End of the Password of the Group 1 -->

                        <!-- Start of the Password of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 512 512"><path fill="none" stroke="#1D214E" stroke-linejoin="round" stroke-width="32" d="M218.1 167.17c0 13 0 25.6 4.1 37.4c-43.1 50.6-156.9 184.3-167.5 194.5a20.17 20.17 0 0 0-6.7 15c0 8.5 5.2 16.7 9.6 21.3c6.6 6.9 34.8 33 40 28c15.4-15 18.5-19 24.8-25.2c9.5-9.3-1-28.3 2.3-36s6.8-9.2 12.5-10.4s15.8 2.9 23.7 3c8.3.1 12.8-3.4 19-9.2c5-4.6 8.6-8.9 8.7-15.6c.2-9-12.8-20.9-3.1-30.4s23.7 6.2 34 5s22.8-15.5 24.1-21.6s-11.7-21.8-9.7-30.7c.7-3 6.8-10 11.4-11s25 6.9 29.6 5.9c5.6-1.2 12.1-7.1 17.4-10.4c15.5 6.7 29.6 9.4 47.7 9.4c68.5 0 124-53.4 124-119.2S408.5 48 340 48s-121.9 53.37-121.9 119.17ZM400 144a32 32 0 1 1-32-32a32 32 0 0 1 32 32Z"/></svg>
                                </div>
                                <div class="col-md-3 text-start font-bold font-color1">
                                    Confirm Password
                                </div>
                                <div class="col-md-7">
                                    <input name="password_confirmation" type="password" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            
                        </div>
                            <!-- End of the Password of the Group 1 -->
        </div>
            <!-- End of the Fourth ROW of the Group 1 -->
            

                <!-- Start of the FIFTH ROW of the Group 1 -->
                <div class="row mb-3">

                    <!-- Start of the Id Number of the Group 1 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center">
                                <div class="col-1 ps-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M22 3H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H2V5h20v14m-3-1l2-2l-1.5-2h-1.65c-.22-.63-.35-1.3-.35-2s.13-1.37.35-2h1.65L21 8l-2-2c-1.3 1-2.27 2.38-2.72 4c-.18.64-.28 1.31-.28 2s.1 1.36.28 2c.45 1.61 1.42 3 2.72 4M9 12a3 3 0 0 0 3-3a3 3 0 0 0-3-3a3 3 0 0 0-3 3a3 3 0 0 0 3 3m0-4a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m6 8.59c0-2.5-3.97-3.59-6-3.59s-6 1.09-6 3.59V18h12v-1.41M5.5 16c.72-.5 2.2-1 3.5-1c1.3 0 2.77.5 3.5 1h-7Z"/></svg>
                        </div>
                        <div class="col-md-2 text-start font-bold font-color1">
                            Phone
                        </div>
                        <div class="col-md-7">
                            <input value="{{ old('phoneNumb') }}"  type="number"  name="phoneNumb" class="form-control" id="inputEmail3">
                        </div>
                        @error('phoneNumb')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                </div>
                    <!-- End of the ID Number of the Group 1 -->
            </div>
            <!-- End of the FIFTH ROW of the Group 1 -->

            </div>
                
            </div>
        </div>
        <!-- End of the Group 1 -->
        

        <!-- Start of the Group 2 -->
        <div class="row mb-3">
            <div class="col ps-1">
            
                <!-- Start of the SECOND ROW of the Group 2 -->
                <div class="row mb-3 mt-4">

                        <!-- Start of the Address of the Group 2 -->
                    <div class="col-xl justfy-content-start pe-4 me-3">
                        
                    <div class="row align-items-center">
                        <div class="col-xl-1 me-2">
                            <div class="row justfy-content-center">
                                <div class="col-1 ps-1 me-0 ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 256 256"><path fill="#1D214E" d="M128 64a40 40 0 1 0 40 40a40 40 0 0 0-40-40Zm0 64a24 24 0 1 1 24-24a24 24 0 0 1-24 24Zm0-112a88.1 88.1 0 0 0-88 88c0 31.4 14.51 64.68 42 96.25a254.19 254.19 0 0 0 41.45 38.3a8 8 0 0 0 9.18 0a254.19 254.19 0 0 0 41.37-38.3c27.45-31.57 42-64.85 42-96.25a88.1 88.1 0 0 0-88-88Zm0 206c-16.53-13-72-60.75-72-118a72 72 0 0 1 144 0c0 57.23-55.47 105-72 118Z"/></svg>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 text-start font-bold font-color1">
                                    Address
                                </div>

                            </div>
                        </div>
                        <div class="col-xl ms-0">
                            <div class="form-floating">
                                <textarea value="{{ old('alamat') }}"  name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                    @error('alamat')
                    <div class="col small m-0 alert alert-danger shadow-sm">
                        {{ $message }}
                    </div>
                    @enderror
                        
                </div>
                        <!-- End of the Address of the Group 1 -->

                </div>
                <!-- End of the Second ROW of the Group 2 -->
                
            </div>
        </div>

        <!-- End of the Group 2 -->


        <!-- Start of the Group 3 -->
        <div class="row mb-3">
            <div class="col ps-1">
            
                <!-- Start of the SECOND ROW of the Group 3 -->
                <div class="row mb-3">

                        <!-- Start of the Job Description of the Group 3 -->
                    <div class="col-xl justfy-content-start pe-4 me-3">
                        
                    <div class="row align-items-center">
                        <div class="col-xl-1 me-2">
                            <div class="row justfy-content-center">
                                <div class="col-1 ps-1 me-0 ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M4 21q-.825 0-1.413-.588T2 19V8q0-.825.588-1.413T4 6h4V4q0-.825.588-1.413T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.588 1.413T20 21H4Zm0-2h16V8H4v11Zm6-13h4V4h-4v2ZM4 19V8v11Z"/></svg>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 text-start font-bold font-color1">
                                    Job Description
                                </div>

                            </div>
                        </div>
                        <div class="col-xl ms-0">
                            <div class="form-floating">
                                <textarea value="{{ old('jobDesc') }}"  name="jobDesc" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                    @error('jobDesc')
                    <div class="col small m-0 alert alert-danger shadow-sm">
                        {{ $message }}
                    </div>
                    @enderror
                        
                </div>
                        <!-- End of the Job Description of the Group 3 -->

                </div>
                <!-- End of the Second ROW of the Group 3 -->
                
            </div>
        </div>

        <!-- End of the Group 3 -->


        <!-- Start of the Group 4 -->
        <div class="row mb-3">
            <div class="col ps-1">
            
                <!-- Start of the THIRD ROW of the Group 4 -->
                <div class="row mb-3">

                        <!-- Start of the Job Purposes of the Group 4 -->
                    <div class="col-xl justfy-content-start pe-4 me-3">
                        
                    <div class="row align-items-center">
                        <div class="col-xl-1 me-2">
                            <div class="row justfy-content-center">
                                <div class="col-1 ps-1 me-0 ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M4 21q-.825 0-1.413-.588T2 19V8q0-.825.588-1.413T4 6h4V4q0-.825.588-1.413T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.588 1.413T20 21H4Zm0-2h16V8H4v11Zm6-13h4V4h-4v2ZM4 19V8v11Z"/></svg>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 text-start font-bold font-color1">
                                    Job Purposes
                                </div>

                            </div>
                        </div>
                        <div class="col-xl ms-0">
                            <div class="form-floating">
                                <textarea value="{{ old('jobPurpose') }}" name="jobPurpose" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                    @error('jobPurpose')
                    <div class="col small m-0 alert alert-danger shadow-sm">
                        {{ $message }}
                    </div>
                    @enderror
                        
                </div>
                        <!-- End of the Job Purposes of the Group 4 -->

                </div>
                <!-- End of the THIRD ROW of the Group 4 -->
                
            </div>
        </div>

        <!-- End of the Group 4 -->

        <!-- Start of the Group 5 -->
        <div class="row mb-3">
            <div class="col ps-1">
                        
                        <div class="row align-items-center">
                                <div class="col-xl-3 me-n5" class="margin-right: -100px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg> 
                                    <span class="ms-2 ps-1 text-start font-bold font-color1">Payroll</span> 
                                </div>
                            </div>
                            
                        </div>
                            <!-- End of the Name of the Group 5 -->
            
                <!-- Start of the FIRST ROW of the Group 5 -->
                <div class="row mb-3 justify-content-even">

                    <!-- Start of the Bank Name of the Group 5 -->
                    <div class="col-xl-5">

                    <div class="row d-flex align-items-center justfy-content-center">
                        <div class="col-xl-4 text-start font-bold font-color1">
                            Bank Name
                        </div>
                        <div class="col-xl-6">
                            <select value="{{ old('bankName') }}"  name="bankName" class="form-select formSelect" aria-label="Default select">
                                    <option disabled selected="">Select Bank</option>
                                    @foreach ($bank as $banka)
                                    <option value="{{$banka->id }}">{{ $banka->bankName }}</option>
                                    @endforeach
                                </select>
                        </div>
                        @error('bankName')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    </div>
                    <!-- End of the Bank Name of the Group 5 -->

                        <!-- Start of the Tax Status of the Group 5 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center justfy-content-center">
                                <div class="col-xl-4 text-start font-bold font-color1">
                                    Tax Status
                                </div>
                                <div class="col-xl-8">
                                    S0
                                </div>
                        </div>
                            
                        </div>
                            <!-- End of the Tax Status of the Group 5 -->
                </div>
                <!-- End of the FIRST ROW of the Group 5 -->
            
                <!-- Start of the SECOND ROW of the Group 5 -->
                <div class="row mb-3 justify-content-even">

                    <!-- Start of the Account Name of the Group 5 -->
                    <div class="col-xl-5">

                    <div class="row d-flex align-items-center justfy-content-center">
                        <div class="col-xl-4 text-start font-bold font-color1">
                            Account Name
                        </div>
                        <div class="col-xl-6">
                            <input value="{{ old('accName') }}" name="accName" type="text" class="form-control" id="inputEmail3">
                        </div>
                        @error('accName')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    </div>
                    <!-- End of the Account Name of the Group 5 -->

                    <!-- Start of the NPWP of the Group 5 -->
                    <div class="col-xl-4">

                    <div class="row d-flex align-items-center justfy-content-center">
                            <div class="col-xl-4 text-start font-bold font-color1">
                                NPWP
                            </div>
                            <div class="col-xl-8">
                                <input value="{{ old('npwp') }}" name="npwp" type="number" class="form-control" id="inputEmail3">
                            </div>
                            @error('npwp')
                            <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                        
                    </div>
                        <!-- End of the NPWP of the Group 5 -->
                    </div>
                    <!-- End of the SECOND ROW of the Group 5 -->
            
                <!-- Start of the THIRD ROW of the Group 5 -->
                <div class="row justify-content-even">

                    <!-- Start of the Account Number of the Group 5 -->
                    <div class="col-xl-5">

                    <div class="row d-flex align-items-center justfy-content-center">
                        <div class="col-xl-4 text-start font-bold font-color1">
                            Account Number
                        </div>
                        <div class="col-xl-6">
                            <input value="{{ old('accNumb') }}" name="accNumb" type="number" class="form-control" id="inputEmail3">
                        </div>
                        @error('accNumb')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    </div>
                    <!-- End of the Account Number of the Group 5 -->

                    </div>
                    <!-- End of the THIRD ROW of the Group 5 -->
                
            </div>
        <!-- End of the Group 5 -->

        <!-- Start of the Group 6 -->
        <div class="row mb-3 mt-2">
            <div class="col ps-1 mt-2">
                        
                        <div class="row align-items-center">
                                <div class="col-xl-3 me-n5" class="margin-right: -100px;">    
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="35px" viewBox="0 0 2000.000000 2000.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,2000.000000) scale(0.100000,-0.100000)"
                                fill="#1D214E" stroke="none">
                                <path d="M13937 17673 c13 -234 9 -1369 -5 -1648 -98 -1927 -417 -3661 -924
                                -5010 -433 -1154 -1052 -2289 -1821 -3340 -482 -658 -984 -1205 -1597 -1742
                                -1095 -958 -2377 -1759 -4005 -2503 -1009 -461 -2385 -947 -3362 -1188 -106
                                -26 -193 -51 -193 -56 0 -15 433 1 620 23 964 114 2307 490 3895 1091 223 85
                                806 315 985 390 859 358 1783 899 2685 1570 2028 1510 3644 3489 4526 5541
                                592 1378 950 3288 1029 5499 11 311 13 1162 3 1378 l-6 142 -919 0 -919 0 8
                                -147z"/>
                                <path d="M9580 15793 c-1606 -43 -3265 -376 -4690 -940 -1444 -571 -2731
                                -1396 -3537 -2265 -772 -833 -1184 -1679 -1310 -2688 -25 -204 -25 -798 0
                                -1012 21 -177 79 -514 112 -652 123 -520 527 -1266 1017 -1880 550 -688 1318
                                -1320 2308 -1900 183 -107 470 -256 494 -256 22 0 359 137 571 232 357 159
                                863 418 1200 613 570 329 942 573 1560 1025 110 80 241 175 290 210 867 617
                                1360 1080 1845 1730 428 575 920 1480 1215 2235 180 460 346 1016 434 1450
                                162 800 198 1614 105 2360 -72 584 -232 1171 -435 1604 l-51 109 -76 6 c-234
                                20 -710 29 -1052 19z"/>
                                <path d="M17833 13182 c-6 -854 -247 -1947 -634 -2887 -586 -1420 -1615 -2935
                                -2669 -3933 -916 -867 -2084 -1694 -3135 -2220 -1082 -542 -2371 -959 -3458
                                -1118 -64 -10 -114 -21 -110 -25 16 -14 616 -64 1088 -91 349 -20 1403 -16
                                1770 5 930 56 1610 139 2375 291 1616 321 3109 945 4305 1799 810 579 1414
                                1219 1887 2002 624 1032 860 2078 697 3095 -67 425 -219 892 -420 1293 -202
                                402 -468 796 -795 1177 -126 147 -477 500 -614 617 -115 98 -271 223 -280 223
                                -3 0 -6 -102 -7 -228z"/>
                                </g>
                                </svg>
                                    <span class="ms-2 ps-1 text-start font-bold font-color1">BPJS Ketenagakerjaan</span> 
                                </div>
                            </div>
                            
                        </div>
                            <!-- End of the Name of the Group 6 -->
            
                <!-- Start of the FIRST ROW of the Group 6 -->
                <div class="row mb-3 justify-content-even">

                    <!-- Start of the Membership Number of the Group 6 -->
                    <div class="col-xl-5">

                    <div class="row d-flex align-items-center justfy-content-center">
                        <div class="col-xl-4 text-start font-bold font-color1">
                            Membership No.
                        </div>
                        <div class="col-xl-6">
                            <input value="{{ old('bpjsKerja') }}" name="bpjsKerja" type="number" class="form-control" id="inputEmail3">
                        </div>
                        @error('bpjsKerja')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    </div>
                    <!-- End of the Membership Number of the Group 6 -->

                        <!-- Start of the Health Insurance Membership of the Group 6 -->
                    <div class="col-xl-4">
                        
                        <div class="row d-flex align-items-center justfy-content-center">
                                <div class="col-xl-4 text-start font-bold font-color1" style="font-size: 13px;">
                                    Health Insurance Membership No.
                                </div>
                                <div class="col-xl-8">
                                    <input value="{{ old('health') }}" name="health" type="number" class="form-control" id="inputEmail3">
                                </div>
                                @error('health')
                                <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                            
                        </div>
                            <!-- End of the Health Insurance Membership of the Group 6 -->
                </div>
                <!-- End of the FIRST ROW of the Group 6 -->
                
        </div>
        <!-- End of the Group 6 -->

        <!-- Start of the Group 7 -->
        <div class="row mb-3 mt-2">
            <div class="col ps-1 mt-2">
                        
                        <div class="row align-items-center">
                                <div class="col-xl-3 me-n5" class="margin-right: -100px;">    
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="35px" viewBox="0 0 308.000000 320.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,320.000000) scale(0.100000,-0.100000)"
                                fill="#1D214E" stroke="none">
                                <path d="M1370 3193 c-180 -18 -361 -68 -505 -140 -49 -25 -92 -47 -94 -49 -2
                                -2 8 -21 23 -43 63 -91 91 -237 63 -338 -13 -50 -13 -53 5 -53 35 0 137 48
                                210 99 40 28 123 94 183 146 143 124 261 208 360 255 81 39 179 69 231 71 25
                                1 23 3 -16 15 -100 32 -331 50 -460 37z"/>
                                <path d="M1795 3052 c-69 -24 -195 -93 -195 -106 0 -3 24 -12 53 -20 82 -25
                                142 -65 280 -190 124 -112 205 -164 281 -181 26 -5 28 -4 22 17 -40 141 -26
                                270 39 370 14 21 25 40 25 43 0 4 -28 19 -63 35 -151 68 -305 80 -442 32z"/>
                                <path d="M410 3059 c-68 -10 -115 -33 -170 -85 -123 -115 -144 -301 -50 -441
                                183 -272 592 -139 592 192 0 209 -172 363 -372 334z"/>
                                <path d="M2568 3059 c-154 -24 -269 -166 -270 -334 0 -331 409 -465 592 -192
                                163 243 -37 571 -322 526z"/>
                                <path d="M2857 2380 c-82 -65 -231 -96 -333 -71 -25 7 -49 10 -51 7 -10 -10
                                39 -135 81 -206 25 -41 92 -134 149 -207 210 -265 298 -431 314 -593 l7 -65
                                18 75 c74 313 26 726 -118 1013 -19 37 -36 67 -38 67 -2 0 -15 -9 -29 -20z"/>
                                <path d="M170 2314 c-34 -83 -60 -200 -60 -272 0 -78 28 -183 69 -267 65 -130
                                64 -130 89 -49 26 84 73 159 175 277 41 49 87 106 102 127 32 46 74 147 75
                                177 0 21 -1 21 -47 6 -74 -23 -193 -13 -270 21 -35 16 -68 35 -74 42 -6 8 -15
                                14 -19 14 -5 0 -22 -34 -40 -76z"/>
                                <path d="M1680 2338 l0 -57 -219 -3 c-203 -3 -222 -5 -247 -24 -55 -41 -67
                                -68 -72 -159 l-5 -86 124 -124 c68 -69 127 -125 131 -125 4 0 8 56 8 125 l0
                                125 140 0 140 0 0 -57 0 -58 120 120 c66 66 120 124 120 130 0 6 -54 64 -120
                                130 l-120 120 0 -57z"/>
                                <path d="M1858 1933 c-41 -43 -96 -102 -123 -130 l-48 -53 127 0 126 0 0 -150
                                0 -149 -56 -3 -55 -3 118 -124 118 -123 118 126 119 126 -56 0 -56 0 0 223 c0
                                249 -5 272 -69 314 -28 19 -48 23 -111 23 l-78 0 -74 -77z"/>
                                <path d="M897 1876 l-119 -126 56 0 56 0 0 -222 c0 -250 5 -273 69 -315 28
                                -19 47 -23 115 -23 l81 1 117 127 116 127 -124 3 -124 3 0 149 0 149 55 3 55
                                3 -117 124 -118 124 -118 -127z"/>
                                <path d="M37 1877 c-72 -325 -25 -723 120 -1010 33 -67 35 -68 56 -53 12 9 51
                                31 87 49 59 29 74 32 155 32 50 0 105 -4 124 -9 l33 -8 -7 33 c-10 47 -67 168
                                -103 221 -17 24 -75 101 -130 170 -205 260 -292 425 -310 590 l-7 63 -18 -78z"/>
                                <path d="M2812 1474 c-25 -82 -74 -160 -163 -264 -127 -147 -173 -221 -185
                                -299 l-6 -40 48 15 c75 24 194 15 271 -20 35 -16 68 -35 74 -42 6 -8 15 -14
                                19 -14 14 0 71 150 86 227 27 140 10 256 -55 388 -65 130 -64 130 -89 49z"/>
                                <path d="M1680 1315 l0 -125 -140 0 -140 0 0 57 0 58 -120 -120 c-66 -66 -120
                                -124 -120 -130 0 -6 54 -64 120 -130 l120 -120 0 57 0 57 219 3 c203 3 222 5
                                247 24 55 41 67 68 72 159 l5 86 -124 124 c-68 69 -127 125 -131 125 -4 0 -8
                                -56 -8 -125z"/>
                                <path d="M388 806 c-204 -44 -315 -285 -223 -481 33 -70 118 -148 185 -170
                                218 -72 432 86 432 320 0 136 -68 248 -185 304 -75 36 -134 44 -209 27z"/>
                                <path d="M2562 810 c-23 -5 -65 -21 -93 -37 -235 -127 -227 -483 13 -602 51
                                -26 73 -31 133 -31 96 0 154 22 220 82 128 117 151 303 55 445 -73 109 -207
                                167 -328 143z"/>
                                <path d="M840 646 c0 -2 7 -33 16 -68 27 -105 6 -233 -53 -322 -24 -38 -25
                                -40 -7 -53 10 -7 54 -27 98 -45 69 -26 98 -32 191 -36 100 -4 117 -2 190 23
                                73 24 187 84 200 105 3 5 -18 16 -47 24 -83 25 -143 65 -281 190 -86 77 -148
                                125 -190 145 -59 28 -117 46 -117 37z"/>
                                <path d="M2138 605 c-76 -31 -178 -103 -313 -220 -143 -124 -261 -208 -360
                                -255 -81 -39 -179 -69 -231 -71 -53 -2 52 -28 181 -45 264 -35 561 14 800 133
                                50 25 92 47 94 49 2 2 -8 21 -23 43 -63 91 -91 237 -63 339 14 51 14 52 -7 52
                                -12 -1 -47 -12 -78 -25z"/>
                                </g>
                                </svg>
                                    <span class="ms-2 ps-1 text-start font-bold font-color1">BPJS Kesehatan</span> 
                                </div>
                            </div>
                            
                        </div>
                            <!-- End of the Name of the Group 7 -->
            
                <!-- Start of the FIRST ROW of the Group 7 -->
                <div class="row mb-3 justify-content-even">

                    <!-- Start of the Membership Number of the Group 7 -->
                    <div class="col-xl-5">

                    <div class="row d-flex align-items-center justfy-content-center">
                        <div class="col-xl-4 text-start font-bold font-color1">
                            Membership No.
                        </div>
                        <div class="col-xl-6">
                            <input value="{{ old('bpjsSehat') }}" name="bpjsSehat" type="number" class="form-control" id="inputEmail3">
                        </div>
                        @error('bpjsSehat')
                        <div class="col-md-7 small m-0 alert alert-danger shadow-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    </div>
                    <!-- End of the Membership Number of the Group 7 -->
                </div>
                <!-- End of the FIRST ROW of the Group 7 -->
                
            </div>
        </div>
        <!-- End of the Group 7 -->

        </div>

        </div>
        <!-- Start of the Button -->
            <div class="row ">
                <div class="col d-flex justify-content-center mb-5 shadow-md">
                    <button type="submit" class="submitBtn p-3 me-5 font-bold font-color1">Submit</button>
                    <button type="reset" class="clearBtn p-3 font-bold font-color1">Clear</button>
                </div>


            </div>
        <!-- End of the Button -->
        </div>
        </div>
    </form>
    
    </div>
    </div>
</div>
</div>
    </div>
<!-- End of Edit Profile -->

</div>

    <!-- Content End -->
</x-layout>