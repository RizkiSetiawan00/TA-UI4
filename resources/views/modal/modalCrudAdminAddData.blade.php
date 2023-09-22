
    
<!-- Modal bankNew - ADD -->
<div class="modal fade" id="bankNew" tabindex="-1" aria-labelledby="bankNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="bankNew">Add New Bank data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('bank.save') }}" method="POST">
            @csrf

            <table id="bankNameInput" class="table table-borderless">
                <thead>
                    <tr>
                        <td>
                            <label for="bankName" class="col-form-label">New Bank Name : </label>
                        </td>
                    </tr>
                </thead>
                <tr> 
                    <td id="col0">
                            <input type="text" class="form-control" id="bankName" name="bankName[]" placeholder="Type Here" required/>
                        </div>
                    </td>
                </tr>
        </table> 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal BankNew-->



<!-- Modal brandNew - ADD -->
<div class="modal fade" id="brandNew1" tabindex="-1" aria-labelledby="brandNew1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="brandNew">Add New Brand data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('brand.save') }}" method="POST">
            @csrf
            <label for="brandName" class="col-form-label">New Brand Name : </label>
            <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Type Here" required/>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal brandNew-->


         
<!-- Modal title1New - ADD -->
<div class="modal fade" id="title1New1" tabindex="-1" aria-labelledby="title1New" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="title1New">Add New Title data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('title1.save') }}" method="POST">
            @csrf
            <label for="title1Name" class="col-form-label">New Title Name : </label>
            <input type="text" class="form-control" id="title1Name" name="title1Name" placeholder="Type Here" required/>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal title1New-->


    <!-- Modal departemenNew - ADD -->
<div class="modal fade" id="departemenNew1" tabindex="-1" aria-labelledby="departemenNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="departemenNew">Add New departemen data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('departemen.save') }}" method="POST">
            @csrf
            <label for="departemenName" class="col-form-label">New departemen Name : </label>
            <input type="text" class="form-control" id="departemenName" name="departemenName" placeholder="Type Here" required/>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal departemenNew-->



<!-- Modal lokasiNew - ADD -->
<div class="modal fade" id="lokasinyaNew1" tabindex="-1" aria-labelledby="lokasinyaNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="lokasinyaNew">Add New Location data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('lokasinya.save') }}" method="POST">
            @csrf
            <label for="lokasiName" class="col-form-label">New Location Name : </label>
            <input type="text" class="form-control" id="lokasiName" name="lokasiName" placeholder="Type Here" required/>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal lokasiNew-->



<!-- Modal profilhrNew - ADD -->
<div class="modal fade" id="profilhrNew" tabindex="-1" aria-labelledby="profilhrNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profilhrNew">Add New HR Profile data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <label for="profilhrName" class="col-form-label">Select User : </label>
            
            <select name="name" class="form-select" aria-label="Default select">
                <option disabled selected>Select Profile</option>
                @foreach($profilhr2 as $pHR)
                <form action="{{ route('profilhr.save', $pHR->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <option value="{{$pHR->id}}">{{$pHR->name}}</option>
                @endforeach
            </select>

            <label for="profilhrName" class="col-form-label">Will be changed into : </label>
            <select class="form-select" name="type" aria-label="Disabled select example">
                <option selected value="3" name="type">Human Resources</option>
              </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal profilhrNew-->

    
<!-- Modal profiladminNew - ADD -->
<div class="modal fade" id="profiladminNew" tabindex="-1" aria-labelledby="profiladminNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profiladminNew">Add New Admin Profile data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <label for="profiladminName" class="col-form-label">Select User : </label>
            
            <select name="name" class="form-select" aria-label="Default select">
                <option disabled selected>Select Profile</option>
                @foreach($profiladmin2 as $padmin)
                <form action="{{ route('profiladmin.save', $padmin->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <option value="{{$padmin->id}}">{{$padmin->name}}</option>
                @endforeach
            </select>

            <label for="profiladminName" class="col-form-label">Will be changed into : </label>
            <select class="form-select" name="type" aria-label="Disabled select example">
                <option selected value="3" name="type">Human Resources</option>
              </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Of Modal profiladminNew-->


