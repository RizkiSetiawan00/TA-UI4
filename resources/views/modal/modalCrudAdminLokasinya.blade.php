
<!-- Modal lokasiNew - ADD -->
<div class="modal fade" id="lokasinyaNew" tabindex="-1" aria-labelledby="lokasinyaNew" aria-hidden="true">
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


    

<!-- Modal lokasiNew - ADD -->
<div class="modal fade" id="lokasinyaEdit" tabindex="-1" aria-labelledby="lokasinyaEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="lokasinyaNew">Edit Location data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('lokasinya.Edit', $lokasinya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="lokasiName" class="col-form-label">Edit Location Name : </label>
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
    <!-- End Of Modal STAFF-->