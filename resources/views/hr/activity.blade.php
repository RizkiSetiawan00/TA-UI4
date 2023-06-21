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
                                <td>Make a Brochure Design for Sales Marketing Campaign</td>
                                <td>2023/06/17</td>
                                <td>2023/07/05</td>
                                <td>M. Rizki Nada S</td>
                                <td>On Progress	</td>
                                <td>Working on it!</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" >Delete</button>
                                </td>
                            </tr>
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
                                <th scope="row">2</th>
                                <td>Need Microsoft Office to be installed on Mrs. Sandra's laptop</td>
                                <td>2023/06/20</td>
                                <td>2023/06/25</td>
                                <td></td>
                                <td>On Hold	</td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" >Delete</button>
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
@include('/modal/modalAddActivity01')
</x-layout>