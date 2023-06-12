
<!-- Modal brandNew - ADD -->
<div class="modal fade" id="brandNew" tabindex="-1" aria-labelledby="brandNew" aria-hidden="true">
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


    

<!-- Modal brandNew - ADD -->
<div class="modal fade" id="brandEdit" tabindex="-1" aria-labelledby="brandEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="brandNew">Edit Brand data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('brand.Edit', $brandnya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="brandName" class="col-form-label">Edit brand Name : </label>
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
    <!-- End Of Modal STAFF-->