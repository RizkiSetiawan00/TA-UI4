     
<!-- Modal title1New - ADD -->
<div class="modal fade" id="title1New" tabindex="-1" aria-labelledby="title1New" aria-hidden="true">
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


    

<!-- Modal title1New - ADD -->
<div class="modal fade" id="title1Edit" tabindex="-1" aria-labelledby="title1Edit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="title1New">Edit Title data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('title1.Edit', $title1nya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="title1Name" class="col-form-label">Edit Title Name : </label>
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
    <!-- End Of Modal STAFF-->