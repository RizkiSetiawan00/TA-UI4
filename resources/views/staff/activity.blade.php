
<x-layout>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" viewBox="0 0 32 32"><path fill="#1D214E" d="M16 22a6 6 0 1 1 6-6a6.007 6.007 0 0 1-6 6Zm0-10a4 4 0 1 0 4 4a4.005 4.005 0 0 0-4-4Z"/><path fill="#1D214E" d="M16 26a10.016 10.016 0 0 1-7.453-3.333l1.49-1.334A8 8 0 1 0 16 8V6a10 10 0 0 1 0 20Z"/><path fill="#1D214E" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14Zm0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4Z"/></svg>
                                </div>
                                <div class="col-xl float-start " style="padding: -10px;">

                                    <div class="row align-items-center">
                                        <div class="col-xl-auto text-start font-bold font-color1  text5"  >
                                            Work Progress
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


    <!-- Start of Table WIP -->
    <div class="col-xl bg-employee g-col-6 accordion-flush" id="wipParent">
        <div class="accordion-item">
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
        
                            
        <div class="row d-flex justify-content-between mb-2 accordion-header" id="wipHeadOne" >
            <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#wip" aria-expanded="true" aria-controls="flush-collapseOne">
            <div class="col-xl-3 me-n5 align-self-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="m18.13 12l1.26-1.26c.44-.44 1-.68 1.61-.74V9l-6-6H5c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h6v-1.87l.13-.13H5V5h7v7h6.13M14 4.5l5.5 5.5H14V4.5m5.13 9.33l2.04 2.04L15.04 22H13v-2.04l6.13-6.13m3.72.36l-.98.98l-2.04-2.04l.98-.98c.19-.2.52-.2.72 0l1.32 1.32c.2.2.2.53 0 .72Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Your Work In Progress</span> 
            </div>
        </button>
                                

            <div class="row accordion-collapse show" id="wip"  aria-labelledby="flush-headingOne" data-bs-parent="#wipParent">
                <div class="col-xl h-20 accordion-body">
                <div class="col d-flex justify-content-start" >
                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col-sm">
                <div class="table-responsive-xl">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 350px">To Do</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Deadline</th>
                            <th scope="col" style="width: 150px">Worked By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 150px">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($project as $projeknya)
                            @if($projeknya->user_id == auth()->user()->id)
                            <tr>
                                <th scope="row">{{$projeknya->id}}</th>
                                <td>{{$projeknya->desc}}</td>
                                <td>{{  date('d F Y\ H:i:s', strtotime($projeknya->created_at))  }}</td>
                                <td>
                                    {{  date('d F Y\ H:i:s', strtotime($projeknya->deadline))  }}
                                    <br>
                                        <?php 
                                        $deadlinenya = $projeknya->deadline;
                                        $convertToDateTimeDeadline = new DateTime($deadlinenya);
                                        $convertToDateTimeTodaynya = new DateTime($todayDatenya);
                                        $itung = $convertToDateTimeDeadline->diff($convertToDateTimeTodaynya);
                                        $hari = $itung->format('%a');
                                        /*
                                        if ($hari == 1) {
                                            echo $hari, " day left";
                                        }
                                        else {
                                            echo $hari, " days left";
                                        }
                                        */
                                        ?>
                                    @if($convertToDateTimeDeadline <= $convertToDateTimeTodaynya)
                                    <span class="badge bg-danger rounded-pill">
                                        OVERDUE!!
                                    @elseif($hari <= 3)
                                        @if($hari < 1)
                                        <span class="badge bg-danger rounded-pill">
                                            Today!!
                                        @elseif($hari <2 )
                                        <span class="badge bg-danger rounded-pill">
                                            {{$hari}} day left!!
                                        @else()
                                            <span class="badge bg-danger rounded-pill">
                                                {{$hari}} days left!!
                                        @endif

                                    @elseif($hari != 1)
                                    <span class="badge bg-primary rounded-pill">
                                        {{$hari}} days left
                                    @endif
                                </span>
                                </td>
                                <td>{{$projeknya->User->name}}</td>
    
                                @if($projeknya->status == "2")
                                    <td class="font-bold text-success">
                                        Finished
                                @elseif($projeknya->status == "1")
                                    <td class="font-bold text-info">
                                        On Progress
                                @elseif($projeknya->status == "3")
                                    <td class="font-bold text-warning">
                                        On Hold
                                @else
                                    <td class="font-bold text-secondary">
                                        Not Assigned
                                @endif
                                </td>
                                <td>{{$projeknya->sta_desc}} </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editprojectStaff{{$projeknya->id}}">Edit</button>
                                    @include('/modal/modalAddActivityStaff')
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                    </table>
                        <div class="p-3 mt-3 d-flex justify-content-center">
                            <div class="row  ">{{ $project->links() }} </div>
                        </div>
                
                </div>

                </div>

                </div>

                </div>
            
            </div>
            </div>
        </div>
    </div>
    <!-- End of Table WIP -->
    </div>
</div>
            </div>
    <!-- End of Table Content 1 --> 
    

    <!-- Start of Table Content 2 -->

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


    <!-- Start of Table All Projects -->
    <div class="col-xl bg-employee g-col-6 accordion-flush" id="allProjectParent">
        <div class="accordion-item">
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
        
                            
        <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
            <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#allProject" aria-expanded="true" aria-controls="flush-collapseOne">
            <div class="col-xl-3 me-n5 align-self-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M17 17v2a1 1 0 1 0 2 0V4H5v11H3V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-2h16Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">All Projects</span> 
            </div>
        </button>
                                

            <div class="row accordion-collapse collapse close" id="allProject"  aria-labelledby="flush-headingOne" data-bs-parent="#allProjectParent">
                <div class="col-xl h-20 accordion-body">
                <div class="col d-flex justify-content-end pe-2 me-2" >
                        
                    <form type="GET" action="{{route('staff.search.allproject')}}">
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

                <div class="container-fluid " >

                <div class="row">
                <div class="col-sm">
                <div class="table-responsive-xl">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 350px">To Do</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Deadline</th>
                            <th scope="col" style="width: 150px">Worked By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 150px">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($project as $projeknya2)
                            @if($projeknya2->status != 2)
                            <tr>
                                <th scope="row">{{$projeknya2->id}}</th>
                                <td>{{$projeknya2->desc}}</td>
                                <td>{{  date('d F Y\ H:i:s', strtotime($projeknya2->created_at))  }}</td>
                                <td>
                                    {{  date('d F Y\ H:i:s', strtotime($projeknya2->deadline))  }}
                                    <br>
                                        <?php 
                                        $deadlinenya = $projeknya2->deadline;
                                        $convertToDateTimeDeadline = new DateTime($deadlinenya);
                                        $convertToDateTimeTodaynya = new DateTime($todayDatenya);
                                        $itung = $convertToDateTimeDeadline->diff($convertToDateTimeTodaynya);
                                        $hari = $itung->format('%a');
                                        /*
                                        if ($hari == 1) {
                                            echo $hari, " day left";
                                        }
                                        else {
                                            echo $hari, " days left";
                                        }
                                        */
                                    ?>
                                    @if($convertToDateTimeDeadline <= $convertToDateTimeTodaynya)
                                    <span class="badge bg-danger rounded-pill">
                                        OVERDUE!!
                                    @elseif($hari <= 3)
                                        @if($hari < 1)
                                        <span class="badge bg-danger rounded-pill">
                                            Today!!
                                        @elseif($hari <2 )
                                        <span class="badge bg-danger rounded-pill">
                                            {{$hari}} day left!!
                                        @else()
                                            <span class="badge bg-danger rounded-pill">
                                                {{$hari}} days left!!
                                        @endif

                                    @elseif($hari != 1)
                                    <span class="badge bg-primary rounded-pill">
                                        {{$hari}} days left
                                    @endif
                                </span>
                                </td>
                                <td>{{$projeknya2->User->name}}</td>
    
                                @if($projeknya2->status == "2")
                                    <td class="font-bold text-success">
                                        Finished
                                @elseif($projeknya2->status == "1")
                                    <td class="font-bold text-info">
                                        On Progress
                                @elseif($projeknya2->status == "3")
                                    <td class="font-bold text-warning">
                                        On Hold
                                @else
                                    <td class="font-bold text-secondary">
                                        Not Assigned
                                @endif
                                </td>
                                <td>{{$projeknya2->sta_desc}} </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editprojectStaff2{{$projeknya2->id}}">Edit</button>
                                    @include('/modal/modalAddActivityStaff2')
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                    </table>
                    <div class="p-3 mt-3 d-flex justify-content-center">
                        <div class="row  ">{{ $project->links() }} </div>
                      </div>
                
                </div>

                </div>

                </div>

                </div>
            
            </div>
            </div>
        </div>
    </div>
    <!-- End of Table All Projects -->
    

    </div>
</div>
            </div>
    <!-- End of Table Content 2 --> 

    

    <!-- Start of Table Content 2 -->

<div class="row d-flex justify-content-center mb-2 mt-5 gap-5">


    <!-- Start of Table All Projects -->
    <div class="col-xl bg-employee g-col-6 accordion-flush" id="allProjectParent2">
        <div class="accordion-item">
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
        
                            
        <div class="row d-flex justify-content-between mb-2 accordion-header" id="flush-headingOne" >
            <button class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#finishProject" aria-expanded="true" aria-controls="flush-collapseOne">
            <div class="col-xl-3 me-n5 align-self-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M17 17v2a1 1 0 1 0 2 0V4H5v11H3V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-2h16Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">Finished Projects</span> 
            </div>
        </button>
                                

            <div class="row accordion-collapse collapse close" id="finishProject"  aria-labelledby="flush-headingOne" data-bs-parent="#allProjectParent2">
                <div class="col-xl h-20 accordion-body">
                <div class="col d-flex justify-content-end pe-2 me-2" >

                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col-sm">
                <div class="table-responsive-xl">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 350px">To Do</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Deadline</th>
                            <th scope="col" style="width: 150px">Worked By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 150px">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        @foreach ($projectFinished as $projeknya5)
                        @if($projeknya5->status == 2) 
                        <tr>
                            <th scope="row">{{$projeknya5->id}}</th>
                            <td>{{$projeknya5->desc}}</td>
                            <td>{{  date('d F Y\ H:i:s', strtotime($projeknya5->created_at))  }}</td>
                            <td>
                                {{  date('d F Y\ H:i:s', strtotime($projeknya5->deadline))  }}
                                <br>
                                    <span class="badge bg-success rounded-pill">
                                        FINISHED
                                    </span>
                            </td>
                            <td>{{$projeknya5->User->name}}</td>

                            @if($projeknya5->status == "2")
                                <td class="font-bold text-success">
                                    Finished
                            @elseif($projeknya5->status == "1")
                                <td class="font-bold text-info">
                                    On Progress
                            @elseif($projeknya5->status == "3")
                                <td class="font-bold text-warning">
                                    On Hold
                            @else
                                <td class="font-bold text-secondary">
                                    Not Assigned
                            @endif
                            </td>
                            <td>{{$projeknya5->sta_desc}} </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editprojectStaff3{{$projeknya5->id}}">Edit</button>
                            </td>
                        </tr>
                        @include('/modal/modalAddActivityStaff3')
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                
                </div>

                </div>

                </div>

                </div>
            
            </div>
            <div class="p-3 mt-3 d-flex justify-content-center">
                <div class="row  ">{{ $project->links() }} </div>
              </div>
            </div>
        </div>
    </div>

    


    <!-- End of Table WIP -->
    </div>
</div>
            </div>
    <!-- End of Table Content 3 --> 






</div>

<!-- Content End -->
</body>

<!-- Modal Manager --
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit for Manager or Upper</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">To do :</label>
                <input type="text" class="form-control" id="recipient-name" name="desc" placeholder="What kind of job would you like to change into?">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Deadline :</label>
                
                <div class="input-group" id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest">
                    <input type="text" class="form-control" data-td-target="#kt_td_picker_localization"/>
                    <span class="input-group-text" data-td-target="#kt_td_picker_localization" data-td-toggle="datetimepicker">
                        <i class="ki-duotone ki-calendar-8 bi bi-calendar2-x fs-2"><span class="path1"></span><span class="path2"></span>
                    </i>
                    </span>
                </div>

            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Staff incharge :</label>
                    <select class="form-select formSelect" aria-label="Default select">
                        <option disabled selected="">Select Staff</option>
                        <option value="1">Staff 1</option>
                        <option value="2">Staff 2</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Status :</label><br>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-info" for="btnradio1">On Progress</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-success" for="btnradio2">Finished</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio3">On Hold</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                    <label class="btn btn-outline-danger" for="btnradio4">Delete</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Description : </label>
                <textarea type="text" class="form-control" id="recipient-name" name="sta_desc" placeholder="Put some detail here."></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
        </div>
    </div>
</div>
</div>
</div>
                <script>
                    new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization"), {
                        localization: {
                            locale: "id",
                            startOfTheWeek: 1
                        }
                    });
                </script>
<!-- End Of Modal Manager-->


</x-layout>