
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
            
            <!-- Start of Table Content -->

        <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">

        <!-- Start of Table -->
        <div class="col-xl bg-employee g-col-6 " >
            <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

                <div class="row ">
                    <div class="col-xl h-20">
                    <div class="col d-flex justify-content-start" >
                    </div>

                    <div class="container-fluid " >

                    <div class="row">
                    <div class="col-sm"><div class="table-responsive-xl">
                        <form action="">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">To Do</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Worked By</th>
                                <th scope="col">Status</th>
                                <th scope="col">Description</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staffModal">Edit</button>
                                </td>
                            </tr>
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
        <!-- End of Table -->
                </div>
        <!-- End of Table Content -->
        
            
            <!-- Start of Table Content -->

            <div class="row d-flex justify-content-center mb-2 mt-5 gap-5">

<!-- Start of Table -->
<div class="col-xl bg-employee g-col-6 " >
    <div class="container row-gap-3" style="margin: 30px 25px 25px 25px;">

        <div class="row ">
            <div class="col-xl h-20">
            <div class="col d-flex justify-content-start" >
            </div>

            <div class="container-fluid " >

            <div class="row">
            <div class="col-sm"><div class="table-responsive-xl">
                <form action="">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">To Do</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Worked By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Description</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                        </td>
                    </tr>
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
<!-- End of Table -->
        </div>
<!-- End of Table Content -->

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


<!-- Modal STAFF-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
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
<!-- End Of Modal STAFF-->
@include('/modal/modalAddActivity00')
</x-layout>