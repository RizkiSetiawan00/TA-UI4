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
    <div class="col-xl bg-employee g-col-6 " id="">
        <div class="">
        <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">
        
                            
        <div class="row d-flex justify-content-between mb-2" >
            <div class="ms-2 ps-1 text-start font-bold font-color1 accordion-button" >
            <div class="col-xl-3 me-n5 align-self-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24"><path fill="#1D214E" d="M17 17v2a1 1 0 1 0 2 0V4H5v11H3V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3v-2h16Z"/></svg>
                    <span class="ms-2 ps-1 text-start font-bold font-color1">All Projects</span> 
            </div>
        </div>
                                

            <div class="row" id="bankData"  aria-labelledby="flush-headingOne" data-bs-parent="#bankDataParent">
                <div class="col-xl h-20 accordion-body">
                <div class="col d-flex justify-content-start" >
                </div>

                <div class="container-fluid " >

                <div class="row">
                <div class="col-sm">
                <div class="table-responsive-xl">
                    <div class="col-auto d-flex justify-content-end font-bold pb-2">

                        <a type="button" class="btnaddData shadow-sm p-2 ms-2 align-items-center font-color1 text-decoration-none" href="{{route('staff.project')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24"><g transform="rotate(-90 12 12)"><path fill="none" stroke="#1D214E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20V4m-7 7l7-7l7 7"/></g></svg>

                        Back
                        </a>
                    </div>
                    <form action="/postBank" method="POST">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 350px">To Do</th>
                            <th scope="col" style="width: 125px">Created At</th>
                            <th scope="col" style="width: 125px">Deadline</th>
                            <th scope="col" style="width: 150px">Worked By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 150px">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        @foreach ($project as $projeknya)
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
                                <form action="{{ route('manager.deleteProject', $projeknya->id) }}" method="post">
                                    @csrf
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editprojectStaff{{$projeknya->id}}">Edit</button>
                                <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                @method('delete')
                            </form>
                            </td>
                        </tr>
                        @include('/modal/modalAddActivityStaff')
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

    
    <div class="p-3 mt-3 d-flex justify-content-center">
        <div class="row  ">{{ $project->links() }} </div>
      </div>


    <!-- End of Table WIP -->
    </div>
</div>
            </div>
    <!-- End of Table Content 1 --> 




</div>

<!-- Content End -->
@include('/modal/modalAddActivityManager')


        <!-- End of Edit MODAL -->
</x-layout>