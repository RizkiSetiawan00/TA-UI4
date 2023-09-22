<x-layout>
<!-- Content Start -->
<div class="container text-center mt-5 pt-5 ">
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

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5 ">

    <!-- Start of Payroll -->
    <div class="col-xl bg-employee g-col-6 p-5" >
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

            <div class="row ">
                <div class="col-xl h-20">
                <div class="col d-flex justify-content-start" >
                    <h2 class="font-color1 font-bold">Summary of Projects You are Working on</h2>
                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col ">

                    <div class="row d-flex justify-content-between gap-0 row-gap-3">
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl text-start font-bold chartText1"  >
                                    Total Finished 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$statusProjectsFinishedUser}}</div>
                            </div>

                        </div>
 
                    </div>
                
                </div>

                
                <div class="col">

                  <div class="row gap-0 row-gap-3">
                      <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                          <div class="row pt-2 pb-2">
                              <div class="col-xl text-start font-bold chartText1"  >
                                  Total On Progress 
                              </div>
                          </div>
                          <div class="row pt-2 pb-2 ms-3">
                              <div class="col-xl chartText1 text-start ">{{$statusProjectsOnProgUser}}</div>
                          </div>

                      </div>

                  </div>
              
                </div>

                <div class="row">
                  <div class="col ">
  
                      <div class="row d-flex justify-content-between gap-0 row-gap-3">
                          <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">
                              <div class="row pt-2 pb-2">
                                  <div class="col-xl text-start font-bold chartText1"  >
                                      Total On Hold 
                                  </div>
                              </div>
                              <div class="row pt-2 pb-2 ms-3">
                                  <div class="col-xl chartText1 text-start ">{{$statusProjectsOnHoldUser}}</div>
                              </div>
  
                          </div>
   
                      </div>
                  
                  </div>

                  
                  <div class="col" style="padding-left: 35px;">
  
                    <div class="row gap-0 row-gap-3">
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl-auto text-start font-bold chartText1"  >
                                    Total Not Assigned 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$statusProjectsNoAssUser}}</div>
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
    
  <!-- Start of Summary 3 -->
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
                                    Total Projects You've Worked based on each status 
                                </div>
                            </div>


                        </div>
                        <canvas id="chartProjectsTotal2"></canvas>
 
                    </div>
                    <script>
                        var ctxAktiv = document.getElementById('chartProjectsTotal2').getContext('2d');
                        var FinishedChart = new Chart(ctxAktiv,{
                          type: 'bar',
                          data:{
                            labels: {!! json_encode($labelAktivitasIsi) !!},
                            datasets: {!! json_encode($datasetUserProjectsArr) !!}
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
    <!-- End of Summary 3 -->

    
<!-- Start Of Chart 2 -->

<div class="row justify-content-center my-5">

  <!-- Start Of Chart Title1 1 -->
    <div class="col-xl-6 font-bold">
      <div class="row d-flex justify-content-center">
        <div class="col-xl-auto mx-0 pe-n1">
          <p class="chartText1 font-color1" style="">Projects You've Worked On</p>
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
          datasets: {!! json_encode($datasetUserProjectsArr) !!}
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
</x-layout>