<x-layout>
    <!-- Content Start -->

<div class="container text-center" style="margin-top: 20px;">
    <div class="row d-flex justify-content-center mb-2 gap-5">
  
      <div class="col-xl bg-employee g-col-6">
          <div class="row d-flex justify-content-center ">
  
          <div class="col" style="margin-top: 50px; margin-bottom:55px;">
              <div class="row d-flex justify-content-center" >
                  <div class="col">
                      <img src="{{('/img/man2.png')}}" width="260px" class="pfp img-fluid" alt="">
                  </div>
              </div>
  
              <div class="row d-flex justify-content-center">
                  <div class="col-auto">
                      <h2 class="font-bold font-color1" style="margin-top: 15px;" >{{ Auth::user()->name }}</h2>
                  </div>
              </div>
  
              <div class="row d-flex justify-content-center ">
                  <div class="col-auto ">
                      <p class="text-lowercase text2" >{{ $title1->title1name }}</p>
                  </div>
  
              </div>
  
              <div class="container-fluid " style="padding-left:40px;">
                  <div class="row marg0">
                      <div class="col-4 text-start">
                          <p class="font-bold text1" >NIP</p>
                      </div>
                      <div class="col text-start">
                          <p class=" text1" >5002</p>
                      </div>
                  </div>
                  <div class="row marg0">
                      <div class="col-4 text-start">
                          <p class="font-bold text1" >Birth</p>
                      </div>
                      <div class="col text-start">
                          <p class=" text1" >26 August 2002</p>
                      </div>
                  </div>
                  <div class="row marg0">
                      <div class="col-4 text-start">
                          <p class="font-bold text1" >Phone</p>
                      </div>
                      <div class="col text-start">
                          <p class=" text1" >0812 1944 094</p>
                      </div>
                  </div>
                  <div class="row marg0">
                      <div class="col-4 text-start">
                          <p class="font-bold text1" >Email</p>
                      </div>
                      <div class="col text-start text-truncate" style="max-width: 150px">
                          <p class=" text1"  >rizki23.446@gmail.com</p>
                      </div>
                  </div>
  
              </div>
  
  
          </div>
  
  
          </div>
      </div>
  
  
      <div class="col-8 bg-employee g-col-6" >
          <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
  
              <div class="row ">
  
                  <div class="col d-flex justify-content-start" >
                      <h2 class="font-color1 font-bold">Employee Profile</h2>
                  </div>
  
                  <div class="container-fluid " >
  
                      <div class="row">
                          <!-- start of an item -->
                          <div class="row marg0">
                          <div class="col-xl-auto" style="padding: -10px;">
                              <div class="row">
                                  <div class="col-xl">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1Z"/></svg>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-xl">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="currentColor" d="M22 3H2c-1.09.04-1.96.91-2 2v14c.04 1.09.91 1.96 2 2h20c1.09-.04 1.96-.91 2-2V5a2.074 2.074 0 0 0-2-2m0 16H2V5h20v14m-8-2v-1.25c0-1.66-3.34-2.5-5-2.5c-1.66 0-5 .84-5 2.5V17h10M9 7a2.5 2.5 0 0 0-2.5 2.5A2.5 2.5 0 0 0 9 12a2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 9 7m5 0v1h6V7h-6m0 2v1h6V9h-6m0 2v1h4v-1h-4"/></svg>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-xl">
  
                          <!-- Item 1 -->
                              <div class="row">
                                  <div class="col-xl-4 text-start" >
                                      <p class="font-bold text3 pt-1" >Legal Entity</p>
                                  </div>
                                  <div class="col-xl text3 text-start pt-1">MULTITREND INDO - MTI</div>
                              </div>
                          <!-- End Of Item 1 -->
                              
                          <!-- Item 2 -->
                              <div class="row">
                                  <div class="col-xl-4 text-start"  >
                                      <p class="font-bold text3" >ID Number</p>
                                  </div>
                                  <div class="col-xl text3 text-start">1111111111111</div>
                              </div>
                          <!-- End Of Item 2 -->
  
                          </div>
                          <div class="col-xl-auto" style="padding: -10px;">
                              <div class="row">
                                  <div class="col-xl">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="currentColor" d="M12.5 11.95q.725-.8 1.113-1.825T14 8q0-1.1-.388-2.125T12.5 4.05q1.5.2 2.5 1.325T16 8q0 1.5-1 2.625t-2.5 1.325ZM18 20v-3q0-.9-.4-1.713t-1.05-1.437q1.275.45 2.363 1.163T20 17v3h-2Zm2-7v-2h-2V9h2V7h2v2h2v2h-2v2h-2ZM8 12q-1.65 0-2.825-1.175T4 8q0-1.65 1.175-2.825T8 4q1.65 0 2.825 1.175T12 8q0 1.65-1.175 2.825T8 12Zm-8 8v-2.8q0-.85.438-1.563T1.6 14.55q1.55-.775 3.15-1.163T8 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T16 17.2V20H0Zm8-10q.825 0 1.413-.588T10 8q0-.825-.588-1.413T8 6q-.825 0-1.413.588T6 8q0 .825.588 1.413T8 10Zm-6 8h12v-.8q0-.275-.138-.5t-.362-.35q-1.35-.675-2.725-1.012T8 15q-1.4 0-2.775.338T2.5 16.35q-.225.125-.363.35T2 17.2v.8ZM8 8Zm0 10Z"/></svg>
                                  </div>
                                  </div>
                              <div class="row">
                                  <div class="col-xl">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="35px" viewBox="0 0 24 24"><path fill="currentColor" d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z"/></svg>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-xl">
  
                          <!-- Item 1 -->
                              <div class="row">
                                  <div class="col-xl-4 text-start" >
                                      <p class="font-bold text3 pt-1" >Join Date</p>
                                  </div>
                                  <div class="col-xl text3 text-start pt-1">30 January 2023</div>
                              </div>
                          <!-- End Of Item 1 -->
                              
                          <!-- Item 2 -->
                              <div class="row">
                                  <div class="col-xl-4 text-start"  >
                                      <p class="font-bold text3" >Brand</p>
                                  </div>
                                  <div class="col-xl text3 text-start">Group</div>
                              </div>
                          <!-- End Of Item 2 -->
                      </div>
  
                      <!-- Start of Address -->
                      <div class="row mb-5 mt-3">
                          <div class="col p-10 g-col-6">
                              <div class="row g-0">
                                  <div class="col-xl-2 align-self-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="45" viewBox="0 0 256 256"><path fill="currentColor" d="M128 64a40 40 0 1 0 40 40a40 40 0 0 0-40-40Zm0 64a24 24 0 1 1 24-24a24 24 0 0 1-24 24Zm0-112a88.1 88.1 0 0 0-88 88c0 31.4 14.51 64.68 42 96.25a254.19 254.19 0 0 0 41.45 38.3a8 8 0 0 0 9.18 0a254.19 254.19 0 0 0 41.37-38.3c27.45-31.57 42-64.85 42-96.25a88.1 88.1 0 0 0-88-88Zm0 206c-16.53-13-72-60.75-72-118a72 72 0 0 1 144 0c0 57.23-55.47 105-72 118Z"/></svg>
                                      <div class="row">
                                          <div class="col-xl">
                                              <p class="font-bold text3 pt-1" >Address</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl">
                                  <div class="text-start bg-opacity-0 border1 mx-auto p-2" style="min-height: 130px;">
                                      <p class="card-text">
                                          Jl. Johar Baru Utara III No. 20, RT 002/RW 003, Johar Baru, Jakarta Pusat, 10560
                                      </p>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End of Address -->
                      
                      <!-- Start of JobDesc -->
                      <div class="row">
                          <div class="col p-10">
                              <div class="row g-0">
                                  <div class="col-xl-2 align-self-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="45" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21q-.825 0-1.413-.588T2 19V8q0-.825.588-1.413T4 6h4V4q0-.825.588-1.413T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.588 1.413T20 21H4Zm0-2h16V8H4v11Zm6-13h4V4h-4v2ZM4 19V8v11Z"/></svg>
                                      <div class="row">
                                          <div class="col-xl">
                                              <p class="font-bold text3 pt-1" >Job Description</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl">
                                  <div class="text-start bg-opacity-0 border1 mx-auto p-2" style="min-height: 130px;">
                                      <p class="card-text">
                                      1. IT Infrastructure - Back-up <br>
                                      2. IT Infrastructure - Ransomware or Virus attack <br>
                                      3. IT HO - HD SLA <br>
                                      4. IT Overall - Numbers of Training executed per Year
                                      </p>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End of JobDesc -->
  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
  
                  <!-- Start of Job Purposes -->
      <div class="row d-flex justify-content-center mb-2 mt-5">
          <div class="container-fluid bg-employee g-col-6" >
              <div class="" style="margin: 30px 25px 25px 25px;">
  
                  <div class="row">
  
                  <div class="col d-flex justify-content-start" >
  
                      <div class="container-fluid " >
                          
                      <div class="row">
  
                          <div class="row marg0">
                              
                      <!-- Start of JobDesc -->
                      <div class="row mb-3">
                          <div class="col">
                              <div class="row g-0">
                                  <div class="col-xl-2 align-self-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="45" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21q-.825 0-1.413-.588T2 19V8q0-.825.588-1.413T4 6h4V4q0-.825.588-1.413T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.588 1.413T20 21H4Zm0-2h16V8H4v11Zm6-13h4V4h-4v2ZM4 19V8v11Z"/></svg>
                                      <div class="row">
                                          <div class="col-xl">
                                              <p class="font-bold text3 pt-1" >Job Purposes</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl">
                                  <div class="text-start bg-opacity-0 border1 mx-auto p-2" style="min-height: 130px;">
                                      <p class="card-text">
                                      1. Perform, organize, and streamline HO IT Help desk tasks which includes day-to-day tasks, configuration changes based on business stakeholder’s requirement to reduce the potential for errors. <br>
                                      2. Monitor and resolve HO IT End Users devices problems, take immediate action where possible and provide support and guidance to users, escalate to vendors support when required. <br>
                                      3. Manage configurations and upgrades HO IT End Users devices. <br>
                                      4. Monitor and analyst HO IT Help Desk tickets incidents report and maintain the acceptable KPI and SLA. <br>
                                      5. Work closely with the business stakeholders to fully understand the business process and requirements. 6.Work closely with the business stakeholders on issues related to IT infrastructure. <br>
                                      6. Work closely and develop relationship with Services Providers and Vendors. <br>
                                      7. Work closely and develop relationship with Services Providers and Vendors. <br>
                                      8. Build and promote a positive working environment for the team within your areas as well as other business areas you will engage with. <br>
                                      9. Ensure that projects are accurately estimated and delivered to schedule. <br>
                                      10. Show flexibility to respond to the changing needs of the business. <br>
                                      </p>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End of JobDesc -->
  
  
                          </div>
  
                      </div>
  
                      </div>
  
                  </div>
  
                  </div>
  
              </div>
  
          </div>
                      
                      
      </div>
      <!-- end of job purposes -->
      
      <!-- Start of Payroll & BPJS -->
  
  <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">
  
      <!-- Start of Payroll -->
      <div class="col-xl bg-employee g-col-6 " >
          <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
  
              <div class="row ">
                  <div class="col-xl h-20">
                  <div class="col d-flex justify-content-start" >
                      <h2 class="font-color1 font-bold">Payroll</h2>
                  </div>
  
                  <div class="container-fluid " >
  
                  <div class="row">
                  <div class="col">
  
                      <div class="row gap-0 row-gap-3">
                          <div class="col-xl-1 pt-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>
                          </div>
                          <div class="col-xl float-start " style="padding: -10px;">
  
                              <div class="row align-items-center pt-2 pb-2">
                                  <div class="col-xl-4 text-start font-bold text3"  >
                                      Bank Name
                                  </div>
                                  <div class="col-xl text3 text-start ">PT. Bank Central ASIA</div>
                              </div>
  
                              <div class="row align-items-center">
                                  <div class="col-xl-4 text-start font-bold text3 pt-2 pb-2"  >
                                      Account Name
                                  </div>
                                  <div class="col-xl text3 text-start pt-2 pb-2">Muh. Rizki Nada S</div>
                              </div>
  
                              <div class="row align-items-center">
                                  <div class="col-xl-4 text-start font-bold text3 pt-2 pb-2"  >
                                      Account Number
                                  </div>
                                  <div class="col-xl  text3 text-start pt-2 pb-2">7000 2302 3430</div>
                              </div>
  
                          </div>
   
                      </div>
                  
                  </div>
                  <div class="col">
  
  
                  <div class="row gap-0 row-gap-3">
                          <div class="col-xl-1 pt-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m9 14l6-6"/><circle cx="9.5" cy="8.5" r=".5" fill="currentColor"/><circle cx="14.5" cy="13.5" r=".5" fill="currentColor"/><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16l-3-2l-2 2l-2-2l-2 2l-2-2l-3 2"/></g></svg>
                          </div>
                          <div class="col-xl float-start " style="padding: -10px;">
  
                              <div class="row align-items-center pt-2 pb-2">
                                  <div class="col-xl-4 text-start font-bold text3"  >
                                      Tax Status
                                  </div>
                                  <div class="col-xl text3 text-start ">S0</div>
                              </div>
  
                              <div class="row align-items-center">
                                  <div class="col-xl-4 text-start font-bold text3 pt-2 pb-2"  >
                                      NPWP
                                  </div>
                                  <div class="col-xl text3 text-start pt-2 pb-2">23234277345</div>
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
  <!-- End of Payroll -->
  <!-- Start of BPJS -->
  <div class="row mb-2 mt-5">
  <div class="col-xl bg-employee g-col-6" >
      <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
  
          <div class="row ">
  
              <div class="col d-flex justify-content-start" >
                  <h2 class="font-color1 font-bold">BPJS</h2>
              </div>
  
                  <div class="container-fluid " >
  
                      <div class="row gap-0 row-gap-3">
                          <div class="col-xl float-start " style="padding: -10px;">
  
                              <div class="row align-items-center pt-2">
                                  <div class="col-xl-1"> 
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="35px" viewBox="0 0 2000.000000 2000.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,2000.000000) scale(0.100000,-0.100000)"
                                    fill="black" stroke="none">
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
                                  </div>
                                  <div class="col-xl-4 text-start font-bold text3"  >
                                  BPJS Ketenagakerjaan Membership No.
                                  </div>
                                  <div class="col-xl text3 text-start ">12436756523</div>
                              </div>
  
                              <div class="row align-items-center text-wrap">
                                  <div class="col-xl-5 text-start font-bold text3 pt-2 pb-2"  >
                                       
                                  </div>
                                  <div class="col-xl-6 text-wrap text4 text-start">
                                      To get more information regarding balances, membership, personal data, etc, please contact the BPJS Employment Call Center at 175, register single sign on the website at www.bpjsketenagakerjaan.go.id or install application BPJSTKU at https://play.google.com/store/apps/details?id=com.bpjstku.
                                  </div>
                              </div>
  
                              <div class="row align-items-center pt-2">
                                  <div class="col-xl-1 align-items-center">    
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="35px" viewBox="0 0 308.000000 320.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,320.000000) scale(0.100000,-0.100000)"
                                    fill="black" stroke="none">
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
                                  </div>
                                  <div class="col-xl-4 text-start font-bold text3"  >
                                  BPJS Kesehatan Membership No.
                                  </div>
                                  <div class="col-xl-6 text3 text-start ">12436756523</div>
                              </div>
  
                              <div class="row align-items-center text-wrap">
                                  <div class="col-xl-5 text-start font-bold text3 pt-2 pb-2"  >
                                       
                                  </div>
                                  <div class="col-xl-6 text-wrap text4 text-start">
                                      Changes in the First Level Health Facilities (Faskes Tingkat Pertama) can only be made by participants / employees directly through the application Mobile JKN and download at https://play.google.com/store/apps/details?id=app.bpjs.mobile. Care Center 24 Hours : 1500400.
                                  </div>
                              </div>
  
                              <div class="row align-items-center pt-2">
                                  <div class="col-xl-1 align-items-center">
                                      <img src="assets/img/a.png" width="35px" alt="">
                                  </div>
                                  <div class="col-xl-4 text-start font-bold text3"  >
                                  Health Insurance Member No.
                                  </div>
                                  <div class="col-xl-6 text3 text-start ">12341356436756523</div>
                              </div>
  
                          </div>
  
                          <div class="row align-self-center">
                                  <div class="col-xl text-start font-bold text3"  > 
                                  </div>
                              </div>
                      </div>
  
  
                      
  
                  </div>
              
              </div>
          </div>
      </div>
  </div>
          <!-- End of BPJS -->
              </div>
      <!-- End of Payroll & BPJS -->
  
                          </div>
  
                      </div>
                  </div>
  
  
  
                  </div>
  
              </div>
  
          </div>
      </div>
  
    </div>
  </div>
  

<!-- Content End -->
</x-layout>