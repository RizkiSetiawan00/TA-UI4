<x-manager-layout>
<!-- Content Start -->
<div class="container text-center mt-5 pt-5">
  <div class="row justify-content-start">
    <div class="col-auto">
      <h1>Good {{$messageDashboard}},</h1>
    </div>
  </div>
  <div class="row justify-content-start">
    <div class="col-auto font-bold">
      <p class="namaOrang font-color1" style="">{{ Auth::user()->name }}</p>
    </div>
  </div>


  

  

  <!-- Start of Summary -->
  <div class="row justify-content-between mt-5">

    
      
    <!-- Start of Payroll & BPJS -->

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5">

    <!-- Start of Payroll -->
    <div class="col-xl bg-employee g-col-6 " >
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

            <div class="row ">
                <div class="col-xl h-20">
                <div class="col d-flex justify-content-start" >
                    <h2 class="font-color1 font-bold">Summary</h2>
                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col ">

                    <div class="row d-flex justify-content-between gap-0 row-gap-3">
                        <div class="col-xl-auto pt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M16 12c2.374 1.183 4 3.65 4 7v4H4v-4c0-3.354 1.631-5.825 4-7m4 1a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm6-6c-1.5 0-3 .36-5-2c-2 2.36-4.5 3-7 2m1 6l5.025 5.257L17 13m-5 5v5"/></svg>
                        </div>
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl text-start font-bold chartText1"  >
                                    Total Manager 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$datamanager}}</div>
                            </div>

                        </div>
 
                    </div>
                
                </div>

                
                <div class="col">

                  <div class="row gap-0 row-gap-3">
                      <div class="col-xl-auto pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="black" d="M20 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16Zm0 2H4v14h16V5Zm-3 10a1 1 0 0 1 .117 1.993L17 17H7a1 1 0 0 1-.117-1.993L7 15h10Zm-7-8a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2Zm7 4a1 1 0 1 1 0 2h-3a1 1 0 1 1 0-2h3Zm-7-2H8v2h2V9Zm7-2a1 1 0 0 1 .117 1.993L17 9h-3a1 1 0 0 1-.117-1.993L14 7h3Z"/></g></svg>
                      </div>
                      <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                          <div class="row pt-2 pb-2">
                              <div class="col-xl text-start font-bold chartText1"  >
                                  Total HR 
                              </div>
                          </div>
                          <div class="row pt-2 pb-2 ms-3">
                              <div class="col-xl chartText1 text-start ">{{$datahr}}</div>
                          </div>

                      </div>

                  </div>
              
                </div>

                <div class="row">
                  <div class="col ">
  
                      <div class="row d-flex justify-content-between gap-0 row-gap-3">
                          <div class="col-xl-auto pt-2">
                              
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="black" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1Z"/></svg>
                          </div>
                          <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">
  
                              <div class="row pt-2 pb-2">
                                  <div class="col-xl text-start font-bold chartText1"  >
                                      Total Staff 
                                  </div>
                              </div>
                              <div class="row pt-2 pb-2 ms-3">
                                  <div class="col-xl chartText1 text-start ">{{$dataStaff}}</div>
                              </div>
  
                          </div>
   
                      </div>
                  
                  </div>

                  
                  <div class="col" style="padding-left: 35px;">
  
                    <div class="row gap-0 row-gap-3">
                        <div class="col-xl-auto pt-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="black" d="M12 23C6.443 21.765 2 16.522 2 11V5l10-4l10 4v6c0 5.524-4.443 10.765-10 12ZM4 6v5a10.58 10.58 0 0 0 8 10a10.58 10.58 0 0 0 8-10V6l-8-3Z"/><circle cx="12" cy="8.5" r="2.5" fill="black"/><path fill="black" d="M7 15a5.782 5.782 0 0 0 5 3a5.782 5.782 0 0 0 5-3c-.025-1.896-3.342-3-5-3c-1.667 0-4.975 1.104-5 3Z"/></svg>
                        </div>
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl-auto text-start font-bold chartText1"  >
                                    Total Admin 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$dataadmin}}</div>
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
            </div>
    <!-- End of Summary -->

    

  <!-- Start of Summary 2 -->
  <div class="row justify-content-center mt-2">

    
      
    <!-- Start of Payroll & BPJS -->

<div class="row d-flex justify-content-center mb-4 mt-5 gap-5">

    <!-- Start of Payroll -->
    <div class="col-xl bg-employee g-col-6 " >
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

                <div class="container-fluid " >

                <div class="row-xl">
                <div class="col ">

                    <div class="row d-flex justify-content-start gap-0 row-gap-3">
                        <div class="col-xl-auto pt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="#1D214E" d="M17 17v2a1 1 0 1 0 2 0V4H5v11H3V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-2h16Z"/></svg>
                        </div>
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl-auto text-start font-bold chartText1"  >
                                    Total Projects Created This Year ({{date('Y')}}) 
                                </div>
                            </div>


                        </div>
                        <canvas id="chartProjectsTotal"></canvas>
 
                    </div>
                    <script>
                        var ctxAktiv = document.getElementById('chartProjectsTotal').getContext('2d');
                        var FinishedChart = new Chart(ctxAktiv,{
                          type: 'bar',
                          data:{
                            labels: {!! json_encode($labelsAktiv) !!},
                            datasets: {!! json_encode($datasetAktivTotal) !!}
                          },
                        });
                    </script>
                
                </div>

              
                </div>

  
                  </div>



                </div>

        </div>
        


    </div>
<!-- End of Payroll -->
            </div>
    <!-- End of Summary 2 -->

    


<!-- Start Of Chart 1 -->

  <div class="row justify-content-between mt-5" style="min-height: 300px">

    <!-- Start Of Chart New Joiners 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style=""><strong>Finished</strong> Projects of Each Users</p> 
        </div>

        <!--
        <div class="col-xl-auto ms-1">
          <select class="form-select formSelect"  id="idUntukTahun" name="tahunArray" aria-label="Default select">
            <option disabled selected="2">Finished</option>
            @foreach ($statusProgNum as $statusProg)
            <option value="{{$statusProg}}" >{{ $statusProg }}
              @if($statusProg == "2")
                      Finished
              @elseif($statusProg == "1")
                      On Progress
              @elseif($statusProg == "3")
                      On Hold
              @else
                      Not Assigned
              @endif
            </option>
            @endforeach
          </select>
        </div>
      -->

      </div>

      <canvas id="chartProjectsFinished"></canvas>
    </div>
    
    <script>
        var ctxProjectsFinished = document.getElementById('chartProjectsFinished').getContext('2d');
        var FinishedChart = new Chart(ctxProjectsFinished,{
          type: 'bar',
          data:{
            labels: {!! json_encode($labelsUserNya) !!},
            datasets: {!! json_encode($datasetFinished) !!}
          },
        });
    </script>
    
    <!-- End of Chart New Joiners 1-->

    
    <!-- Start Of Chart New Joiners 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style=""><strong>On Progress</strong> Projects of Each Users</p> 
        </div>
      </div>

      <canvas id="chartProjectsOnProg"></canvas>
    </div>
    
    <script>
        var ctxProjectsOnProg = document.getElementById('chartProjectsOnProg').getContext('2d');
        var OnProgChart = new Chart(ctxProjectsOnProg,{
          type: 'bar',
          data:{
            labels: {!! json_encode($labelsUserNya) !!},
            datasets: {!! json_encode($datasetOnProg) !!}
          },
        });
    </script>
    
    <!-- End of Chart On Progress-->

  </div>
<!-- End of Chart 1 -->


<!-- Start Of Chart 2 -->

  <div class="row justify-content-between mt-5" style="min-height: 300px">

    <!-- Start Of Chart New Joiners 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style=""><strong>On Hold</strong> Projects of Each Users</p> 
        </div>
      </div>

      <canvas id="chartProjectsOnHold"></canvas>
    </div>
    
    <script>
        var ctxProjectsOnHold = document.getElementById('chartProjectsOnHold').getContext('2d');
        var OnHoldChart = new Chart(ctxProjectsOnHold,{
          type: 'bar',
          data:{
            labels: {!! json_encode($labelsUserNya) !!},
            datasets: {!! json_encode($datasetOnHold) !!}
          },
        });
    </script>
    
    <!-- End of Chart New Joiners 1-->

    
    <!-- Start Of Chart New Joiners 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style=""><strong>Not Assigned</strong> Projects of Each Users</p> 
        </div>
      </div>

      <canvas id="chartProjectsNoAss"></canvas>
    </div>
    
    <script>
        var ctxProjectsNoAss = document.getElementById('chartProjectsNoAss').getContext('2d');
        var NoAssChart = new Chart(ctxProjectsNoAss,{
          type: 'bar',
          data:{
            labels: {!! json_encode($labelsUserNya) !!},
            datasets: {!! json_encode($datasetNoAss) !!}
          },
        });
    </script>
    
    <!-- End of Chart On Progress-->

  </div>
<!-- End of Chart 2 -->




    
<!-- Start Of Chart 2 -->

<div class="row justify-content-center my-5">

  <!-- Start Of Chart Title1 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style="">All Projects Diagram</p>
        </div>

      </div>
      <canvas id="chartAktivitas"></canvas>
    </div>
  

  <script>
    
      var ctxAktivitas = document.getElementById('chartAktivitas').getContext('2d');
      
      var aktivitasChart = new Chart(ctxAktivitas,{
        type: 'doughnut',
        data:{
          labels: {!! json_encode($labelAktivitasIsi) !!},
          datasets: {!! json_encode($datasetAktivitas) !!}
        },
        options: {
          layout :{
            padding: {
              top: 20
            }
          },
          plugins: {
            legend: {
                display: true,
              position: 'bottom'
            },
              labels: [
                {
                  render: 'label',
                  textMargin: 7,
                  position: 'outside'
                },
                {
                  render: 'percentage',
                  textShadow: true,
                  shadowOffsetY: 1,
                  shadowOffsetX: 1,
                  shadowBlur: 1,
                  shadowColor: 'rgba(255,255,255,0.75)',
                }
              ]
          }
        
        }
      });
    
    </script>
  
  <!-- End of Chart Title1 1-->

</div>
<!-- End of Chart 2 -->




</div>

<!-- Content End -->
</x-manager-layout>