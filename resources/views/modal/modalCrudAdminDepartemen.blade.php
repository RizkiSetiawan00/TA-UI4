
<!-- Modal departemenNew - ADD -->
<div class="modal fade" id="departemenNew" tabindex="-1" aria-labelledby="departemenNew" aria-hidden="true">
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


    

<!-- Modal departemenNew - ADD -->
<div class="modal fade" id="departemenEdit" tabindex="-1" aria-labelledby="departemenEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="departemenNew">Edit departemen data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('departemen.Edit', $departemennya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="departemenName" class="col-form-label">Edit departemen Name : </label>
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
    <!-- End Of Modal STAFF-->