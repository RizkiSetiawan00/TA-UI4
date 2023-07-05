<x-admin-layout>
    <!-- Content Start -->

<!-- Content Start -->
<div class="container">
    <!-- Start of Topbar -->

<div class="row d-flex justify-content-center mb-5 gap-5">

    <div class="col-xl topbar g-col-6 " >
        <div class="container row-gap-3 pb-3" style="margin: 30px 25px 25px 25px;">
        

            <div class="row pt-1">
                <!-- Start Of Alert BAR! -->
            @if (session('success'))
                <div class="row pb-4">
                    <div class="col" >
                        <div class="row align-item-center">
                            <div class="col d-flex alertBar2" >
                                <h5 class="text-white font-bold m-0 p-1">
                                    {{ session('success') }}</h5>
                            </div>
        
                        </div>
                    </div>
        
                </div>
                @endif
                
                <!-- End Of Alert BAR! -->
                <div class="col-xl h-20">
                <div class="container-fluid " >

                <div class="row justify-content-between pe-5">
                <div class="col-6">

                    <div class="row align-items-center gap-0 row-gap-3">
                        <div class="col-xl-auto align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 2048 2048"><path fill="#1D214E" d="M1024 128v896h896v1024H0V128h1024zM896 1920v-768H128v768h768zm0-896V256H128v768h768zm896 128h-768v768h768v-768zm-128-768h384v128h-384v384h-128V512h-384V384h384V0h128v384z"/></svg>
                        </div>
                        <div class="col-xl float-start " style="padding: -10px;">

                            <div class="row align-items-center">
                                <div class="col-xl-auto text-start font-bold font-color1  text5"  >
                                    Add Data
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


    <!-- Start of Table Content 1 -->

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


    <!-- Start of Table BANK -->
    <div class="col-xl bg-employee g-col-6 accordion-flush" id="bankDataParent">
        <div class="accordion-item">
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
        
                            
        <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
            <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankData" aria-expanded="true" aria-controls="flush-collapseOne">
            <div class="col-xl-3 me-n5 align-self-center ">

                    <svg xmlns="http://www.w3.org/2000/svg" width="35" fill="#1D214E" class="bi bi-bank" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                    </svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Bank</span> 
            </div>
        </button>
                                

            <div class="row accordion-collapse collapse close" id="bankData"  aria-labelledby="flush-headingOne" data-bs-parent="#bankDataParent">
                <div class="col-xl h-20 accordion-body">
                <div class="col d-flex justify-content-start" >
                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col-sm">
                <div class="table-responsive-xl">
                    <div class="col-auto d-flex justify-content-end font-bold ">
                        <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#bankNew">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Add New
                        </button>
                    </div>
                    <form action="/postBank" method="POST">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col-8">Name</th>
                            <th scope="col" text-align="right">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($bank as $banknya)
                        <tr>
                            <th scope="row">{{$banknya->id}}</th>
                            <td>{{$banknya->bankName}}</td>
                            <td class="pe-3" align="right">
                                <form action="{{ route('bank.Hapus', $banknya->id) }}" method="post">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bankEdit">Edit</button>
                                <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                @csrf
                                @method('delete')
                              </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </form>
                
                </div>

                </div>

                </div>

                </div>
            
            </div>
            </div>
        </div>
    </div>
    <!-- End of Table Bank -->
    </div>
</div>
            </div>
    <!-- End of Table Content 1 --> 

    
    <!-- Start of Table Content 2 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table Title -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="TitleDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#titleData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="#1D214E" d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Title</span> 
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="titleData"  aria-labelledby="flush-headingOne" data-bs-parent="#TitleDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#title1New">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <form action="/postBank" method="POST">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($title1 as $title1nya)
                            <tr>
                                <th scope="row">{{$title1nya->id}}</th>
                                <td>{{$title1nya->title1Name}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('title1.Hapus', $title1nya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#title1Edit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </form>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table Title-->
        </div>
    </div>
                </div>
        <!-- End of Table Content 2 --> 

    
    <!-- Start of Table Content 3 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table BRAND -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="brandDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#brandData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 16 16"><path fill="#1D214E" d="M8 8.5c-.08 0-.15-.02-.22-.05L1.28 5.2a.5.5 0 0 1 0-.9l6.5-3.25c.14-.07.31-.07.45 0l6.5 3.25a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05ZM2.62 4.75L8 7.44l5.38-2.69L8 2.06L2.62 4.75Z"/><path fill="#1D214E" d="M8 11.75c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67L2.62 8L8 10.69L13.38 8l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/><path fill="#1D214E" d="M8 15c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67l-2.36 1.18L8 13.94l5.38-2.69l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Brand</span>
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="brandData"  aria-labelledby="flush-headingOne" data-bs-parent="#brandDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#brandNew">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($brand as $brandnya)
                            <tr>
                                <th scope="row">{{$brandnya->id}}</th>
                                <td>{{$brandnya->brandName}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('brand.Hapus', $brandnya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#brandEdit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table Brand -->
        </div>
    </div>
                </div>
        <!-- End of Table Content 3 --> 

    
    <!-- Start of Table Content 4 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table Departemen -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="departemenDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#departemenData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="#1D214E" d="M15 6a3.001 3.001 0 0 1-2 2.83V11h3a3 3 0 0 1 3 3v1.17a3.001 3.001 0 1 1-2 0V14a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v1.17a3.001 3.001 0 1 1-2 0V14a3 3 0 0 1 3-3h3V8.83A3.001 3.001 0 1 1 15 6Zm-3-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2ZM6 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2Zm12 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2Z"/></g></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Department</span> 
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="departemenData"  aria-labelledby="flush-headingOne" data-bs-parent="#departemenDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#departemenNew">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($departemen as $departemennya)
                            <tr>
                                <th scope="row">{{$departemennya->id}}</th>
                                <td>{{$departemennya->departemenName}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('departemen.Hapus', $departemennya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#departemenEdit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table Departemen -->
        </div>
    </div>
                </div>
        <!-- End of Table Content 4 --> 

    
    <!-- Start of Table Content 5 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table lokasinya -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="lokasinyaDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lokasinyaData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M15 9h2v2h-2V9m2-4h-2v2h2V5m-6 10h2v-2h-2v2m2-10h-2v2h2V5m-2 6h2V9h-2v2M9 5H7v2h2V5m0 4H7v2h2V9m5.55 12H13v-3.5h-2V21H5V3h14v8.03c.71.06 1.39.28 2 .6V1H3v22h12.91c-.41-.56-.91-1.24-1.36-2M7 19h2v-2H7v2m2-6H7v2h2v-2m13 3.5c0 2.6-3.5 6.5-3.5 6.5S15 19.1 15 16.5c0-1.9 1.6-3.5 3.5-3.5s3.5 1.6 3.5 3.5m-2.3.1c0-.6-.6-1.2-1.2-1.2s-1.2.5-1.2 1.2c0 .6.5 1.2 1.2 1.2s1.3-.6 1.2-1.2Z"/></svg>
                <span class="ms-2 ps-1 text-start font-bold font-color1">Data Location</span> 
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="lokasinyaData"  aria-labelledby="flush-headingOne" data-bs-parent="#lokasinyaDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#lokasinyaNew">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($lokasi as $lokasinya)
                            <tr>
                                <th scope="row">{{$lokasinya->id}}</th>
                                <td>{{$lokasinya->lokasiName}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('lokasinya.Hapus', $lokasinya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#lokasinyaEdit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table lokasi -->
        </div>
    </div>
                </div>
        <!-- End of Table Content 5 --> 

    <!-- Start of Table Content 6 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table profilhr -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="profilhrDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#profilhrData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="#1D214E" d="M20 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16Zm0 2H4v14h16V5Zm-3 10a1 1 0 0 1 .117 1.993L17 17H7a1 1 0 0 1-.117-1.993L7 15h10Zm-7-8a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2Zm7 4a1 1 0 1 1 0 2h-3a1 1 0 1 1 0-2h3Zm-7-2H8v2h2V9Zm7-2a1 1 0 0 1 .117 1.993L17 9h-3a1 1 0 0 1-.117-1.993L14 7h3Z"/></g></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Profile HR</span> 
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="profilhrData"  aria-labelledby="flush-headingOne" data-bs-parent="#profilhrDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#profilhrNew">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col-8">Email</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($profilhr as $profilhrnya)
                                @if($profilhrnya->type === 3)
                            <tr>
                                <th scope="row">{{$profilhrnya->id}}</th>
                                <td>{{$profilhrnya->name}}</td>
                                <td>{{$profilhrnya->email}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('profilhr.Hapus', $profilhrnya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#profilhrEdit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table profilhr -->
        </div>
    </div>
                </div>
        <!-- End of Table Content 6 --> 
        

    <!-- Start of Table Content 7 -->

    <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


        <!-- Start of Table profiladmin -->
        <div class="col-xl bg-employee g-col-6 accordion-flush" id="profiladminDataParent">
            <div class="accordion-item">
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
            
                                
            <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
                <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#profiladminData" aria-expanded="true" aria-controls="flush-collapseOne">
                <div class="col-xl-3 me-n5 align-self-center ">

                    <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M12 23C6.443 21.765 2 16.522 2 11V5l10-4l10 4v6c0 5.524-4.443 10.765-10 12ZM4 6v5a10.58 10.58 0 0 0 8 10a10.58 10.58 0 0 0 8-10V6l-8-3Z"/><circle cx="12" cy="8.5" r="2.5" fill="#1D214E"/><path fill="#1D214E" d="M7 15a5.782 5.782 0 0 0 5 3a5.782 5.782 0 0 0 5-3c-.025-1.896-3.342-3-5-3c-1.667 0-4.975 1.104-5 3Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Data Admin</span> 
                </div>
            </button>
                                    
    
                <div class="row accordion-collapse collapse close" id="profiladminData"  aria-labelledby="flush-headingOne" data-bs-parent="#profiladminDataParent">
                    <div class="col-xl h-20 accordion-body">
                    <div class="col d-flex justify-content-start" >
                    </div>
    
                    <div class="container-fluid " >
    
                    <div class="row">
                    <div class="col-sm">
                    <div class="table-responsive-xl">
                        <div class="col-auto d-flex justify-content-end font-bold ">
                            <button type="button" class="btnaddData shadow-sm p-2 align-items-center font-color1" data-bs-toggle="modal" data-bs-target="#profiladminNew">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="#1D214E" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Add New
                            </button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col-8">Name</th>
                                <th scope="col-8">Email</th>
                                <th scope="col" text-align="right">action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($profiladmin as $profiladminnya)
                                @if($profiladminnya->id !== Auth::user()->id)
                            <tr>
                                <th scope="row">{{$profiladminnya->id}}</th>
                                <td>{{$profiladminnya->name}}</td>
                                <td>{{$profiladminnya->email}}</td>
                                <td class="pe-3" align="right">
                                    <form action="{{ route('profiladmin.Hapus', $profiladminnya->id) }}" method="post">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#profiladminEdit">Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    @csrf
                                    @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                        </table>
                    
                    </div>
    
                    </div>
    
                    </div>
    
                    </div>
                
                </div>
                </div>
            </div>
        </div>
        <!-- End of Table profiladmin -->
        </div>
    </div>
                </div>
        <!-- End of Table Content 7 --> 
                            

</div>

<!-- Content End -->
</body>



@include('/modal/modalCrudAdminBank')
@include('/modal/modalCrudAdminTitle1')
@include('/modal/modalCrudAdminBrand')
@include('/modal/modalCrudAdminDepartemen')
@include('/modal/modalCrudAdminLokasinya')
@include('/modal/modalCrudAdminProfileHr')
@include('/modal/modalCrudAdminProfileAdmin')
    <!-- Content End -->
</x-admin-layout>