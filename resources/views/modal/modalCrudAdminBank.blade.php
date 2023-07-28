

<!-- Modal bankNew - ADD -->
<div class="modal fade" id="bankEdit{{$banknya->id}}" tabindex="-1" aria-labelledby="bankEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="bankEdit">Edit Bank data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('bank.Edit', $banknya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="bankName" class="col-form-label">Edit Bank Name : </label>
            <input type="text" class="form-control" id="bankName" name="bankName" placeholder="{{old('bankName', $banknya->bankName)}}"/>
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