
    

<!-- Modal lokasiNew - ADD -->
<div class="modal fade" id="lokasinyaEdit{{$lokasinya->id}}" tabindex="-1" aria-labelledby="lokasinyaEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="lokasinyaEdit">Edit Location data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('lokasinya.Edit', $lokasinya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="lokasiName" class="col-form-label">Edit Location Name : </label>
            <input type="text" class="form-control" id="lokasiName" name="lokasiName" placeholder="{{old('lokasiName', $lokasinya->lokasiName)}}"  required/>
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