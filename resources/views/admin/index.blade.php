<x-admin-layout>
  <!-- Content Start -->
<div class="container text-center mt-5 pt-5">
  <div class="row justify-content-start">
    <div class="col-auto">
      <h1>Good {{$messageDashboard}},</h1>
    </div>
  </div>
  <div class="row justify-content-start">
    <div class="col-auto font-bold" style="text-align: start;">
      <p class="namaOrang font-color1" style="">{{ Auth::user()->name }} - Admin</p>
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
        


      </div>
    </div>
    </div>
<!-- End of Payroll -->
            </div>
    <!-- End of Summary -->



  <!-- Start of Summary 2 -->
  <div class="row justify-content-between mt-5">

    
      
    <!-- Start of Payroll & BPJS -->

<div class="row d-flex justify-content-center mb-2 gap-5">

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

                          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="black" class="bi bi-bank" viewBox="0 0 16 16">
                          <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                          </svg>
                        </div>
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl text-start font-bold chartText1"  >
                                    Total Banks 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$dataBank2}}</div>
                            </div>

                        </div>
 
                    </div>
                
                </div>

                
                <div class="col">

                  <div class="row gap-0 row-gap-3">
                      <div class="col-xl-auto pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="black" d="M13.07 10.41a5 5 0 0 0 0-5.82A3.39 3.39 0 0 1 15 4a3.5 3.5 0 0 1 0 7a3.39 3.39 0 0 1-1.93-.59M5.5 7.5A3.5 3.5 0 1 1 9 11a3.5 3.5 0 0 1-3.5-3.5m2 0A1.5 1.5 0 1 0 9 6a1.5 1.5 0 0 0-1.5 1.5M16 17v2H2v-2s0-4 7-4s7 4 7 4m-2 0c-.14-.78-1.33-2-5-2s-4.93 1.31-5 2m11.95-4A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4Z"/></svg>
                      </div>
                      <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                          <div class="row pt-2 pb-2">
                              <div class="col-xl text-start font-bold chartText1"  >
                                  Total Titles 
                              </div>
                          </div>
                          <div class="row pt-2 pb-2 ms-3">
                              <div class="col-xl chartText1 text-start ">{{$datatitle12}}</div>
                          </div>

                      </div>

                  </div>
              
                </div>

                <div class="row">
                  <div class="col ">
  
                      <div class="row d-flex justify-content-between gap-0 row-gap-3">
                          <div class="col-xl-auto pt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 16 16"><path fill="black" d="M8 8.5c-.08 0-.15-.02-.22-.05L1.28 5.2a.5.5 0 0 1 0-.9l6.5-3.25c.14-.07.31-.07.45 0l6.5 3.25a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05ZM2.62 4.75L8 7.44l5.38-2.69L8 2.06L2.62 4.75Z"/><path fill="black" d="M8 11.75c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67L2.62 8L8 10.69L13.38 8l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/><path fill="black" d="M8 15c-.08 0-.15-.02-.22-.05l-6.5-3.25a.5.5 0 0 1 0-.9l3.25-1.62c.25-.12.55-.02.67.22c.12.25.02.55-.22.67l-2.36 1.18L8 13.94l5.38-2.69l-2.36-1.18a.488.488 0 0 1-.22-.67c.12-.25.42-.35.67-.22l3.25 1.62a.5.5 0 0 1 0 .9l-6.5 3.25c-.07.04-.15.05-.22.05Z"/></svg>
                          </div>
                          <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">
  
                              <div class="row pt-2 pb-2">
                                  <div class="col-xl text-start font-bold chartText1"  >
                                      Total Brands 
                                  </div>
                              </div>
                              <div class="row pt-2 pb-2 ms-3">
                                  <div class="col-xl chartText1 text-start ">{{$databrand2}}</div>
                              </div>
  
                          </div>
   
                      </div>
                  
                  </div>

                  
                  <div class="col" style="padding-left: 35px;">
  
                    <div class="row gap-0 row-gap-3">
                        <div class="col-xl-auto pt-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="black" d="M15 6a3.001 3.001 0 0 1-2 2.83V11h3a3 3 0 0 1 3 3v1.17a3.001 3.001 0 1 1-2 0V14a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v1.17a3.001 3.001 0 1 1-2 0V14a3 3 0 0 1 3-3h3V8.83A3.001 3.001 0 1 1 15 6Zm-3-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2ZM6 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2Zm12 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2Z"/></g></svg>
                        </div>
                        <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">

                            <div class="row pt-2 pb-2">
                                <div class="col-xl-auto text-start font-bold chartText1"  >
                                    Total Departments 
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 ms-3">
                                <div class="col-xl chartText1 text-start ">{{$datadepartemen2}}</div>
                            </div>

                        </div>
 
                    </div>
                
                  </div>


  
                  </div>



                </div>

                <div class="row">
                  <div class="col ">
  
                      <div class="row d-flex justify-content-between gap-0 row-gap-3">
                          <div class="col-xl-auto pt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24"><path fill="black" d="M15 9h2v2h-2V9m2-4h-2v2h2V5m-6 10h2v-2h-2v2m2-10h-2v2h2V5m-2 6h2V9h-2v2M9 5H7v2h2V5m0 4H7v2h2V9m5.55 12H13v-3.5h-2V21H5V3h14v8.03c.71.06 1.39.28 2 .6V1H3v22h12.91c-.41-.56-.91-1.24-1.36-2M7 19h2v-2H7v2m2-6H7v2h2v-2m13 3.5c0 2.6-3.5 6.5-3.5 6.5S15 19.1 15 16.5c0-1.9 1.6-3.5 3.5-3.5s3.5 1.6 3.5 3.5m-2.3.1c0-.6-.6-1.2-1.2-1.2s-1.2.5-1.2 1.2c0 .6.5 1.2 1.2 1.2s1.3-.6 1.2-1.2Z"/></svg>
                          </div>
                          <div class="col-xl d-flex align-items-center float-start " style="padding: -10px;">
  
                              <div class="row pt-2 pb-2">
                                  <div class="col-xl text-start font-bold chartText1"  >
                                      Total Locations 
                                  </div>
                              </div>
                              <div class="row pt-2 pb-2 ms-3">
                                  <div class="col-xl chartText1 text-start ">{{$datalokasinya2}}</div>
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
            </div>
    <!-- End of Summary 2 -->




<!-- Start Of Chart 2 -->

<div class="row justify-content-between my-5">

  <!-- Start Of Chart Title1 1 -->
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Used Titles</p>

    <canvas id="chartTitle1"></canvas>
  </div>
  

  <script>
      var ctxTitle1 = document.getElementById('chartTitle1').getContext('2d');
      
      var title1Chart = new Chart(ctxTitle1,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelstitle1) !!},
          datasets: {!! json_encode($datasettitle1) !!}
        },
        options: {
          plugins: {
            legend: {
                display: true,
              position: 'left'
            },
              subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
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
        /*
        options:{
          scales:{
          },
          plugins:{
            datalabels:{
              align: 'center',
              formatter: (value, context)=>{
                const datapoints = context.chart.data.datasets[0].data;
                function totalSum(total, datapoint) {
                  return total+datapoint;
                }
                const totalValue = datapoints.reduce(totalSum, 0);
                const percentageValue = (value / totalValue * 100).toFixed(1);
                const display = [`$${value}`, `${percentageValue}%`, '']
                return display;
              }
            }
          }

        },
        plugins: [ChartDataLabels]
        */
      });

    
    
    </script>
  
  <!-- End of Chart Title1 1-->



  <!-- Start Of Chart Bank 2 -->
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Used Banks</p>

    <canvas id="chartBank"></canvas>
  </div>
  

  <script>
      var ctxBank = document.getElementById('chartBank').getContext('2d');
      
      var BankChart = new Chart(ctxBank,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelsBank) !!},
          datasets: {!! json_encode($datasetBank) !!}
        },
        options: {
          plugins: {
            legend: {
                display: true,
              position: 'left'
            },
              subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
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
  
  <!-- End of Chart Bank 2-->

</div>
<!-- End of Chart 2 -->


<!-- Start Of Chart 3 -->

<div class="row justify-content-between my-5">

  <!-- Start Of Chart departemen 1 -->
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Used Departments</p>

    <canvas id="chartdepartemen"></canvas>
  </div>
  

  <script>
      var ctxdepartemen = document.getElementById('chartdepartemen').getContext('2d');
      
      var departemenChart = new Chart(ctxdepartemen,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelsdepartemen) !!},
          datasets: {!! json_encode($datasetdepartemen) !!}
        },
        options: {
          plugins: {
            legend: {
                display: true,
              position: 'left'
            },
              subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
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
  
  <!-- End of Chart departemen 1-->



  <!-- Start Of Chart lokasinya 2 -->
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Crowded Workplace Locations</p>

    <canvas id="chartlokasinya"></canvas>
  </div>
  

  <script>
      var ctxlokasinya = document.getElementById('chartlokasinya').getContext('2d');
      
      var lokasinyaChart = new Chart(ctxlokasinya,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelslokasinya) !!},
          datasets: {!! json_encode($datasetlokasinya) !!}
        },
        options: {
          plugins: {
            legend: {
                display: true,
              position: 'left'
            },
              subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
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
          },
          layout: {
              padding: 20
          }
        
        }
      });

    
    
    </script>
  
  <!-- End of Chart lokasinya 2-->

</div>
<!-- End of Chart 3 -->


<!-- Start Of Chart 4 -->

<div class="row justify-content-between my-5">

  <!-- Start Of Chart brand 1 -->
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Used Brands</p>

    <canvas id="chartbrand"></canvas>
  </div>
  

  <script>
    /* THINGS THAT I WILL NEED. DO NOT DELETE!!!!
    <select name="chartnya" onchange="myfunction()" class="" id="chartnya"
    </select>

    --- Inside the script ---

    function myfunction() {
    var chartTipe = document.getElementById("chartnya").value;

    type : chartTipe, <==== Cara panggil
    }
    */
      var ctxbrand = document.getElementById('chartbrand').getContext('2d');
      
      var brandChart = new Chart(ctxbrand,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelsbrand) !!},
          datasets: {!! json_encode($datasetbrand) !!}
        },
        options: {
          plugins: {
            legend: {
                display: true,
              position: 'left'
            },
              subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
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
          },
          interaction: {
              mode: 'point'
          },
        
        }
      });

    
    
    </script>
  
  <!-- End of Chart brand 1-->



  <!-- Start Of Chart lokasinya 2 --
  <div class="col-xl-6 font-bold">
    
    <p class="chartText1 font-color1" style="">Most Crowded Workplace Locations</p>

    <canvas id="chartlokasinya"></canvas>
  </div>
  

  <script>
      var ctxlokasinya = document.getElementById('chartlokasinya').getContext('2d');
      
      var lokasinyaChart = new Chart(ctxlokasinya,{
        type: "doughnut",
        data:{
          labels: {!! json_encode($labelslokasinya) !!},
          datasets: {!! json_encode($datasetlokasinya) !!}
        },
      });

    
    
    </script>
  
  <!-- End of Chart lokasinya 2-->

</div>
<!-- End of Chart 4 -->






</div>

<!-- Content End -->
</x-admin-layout>