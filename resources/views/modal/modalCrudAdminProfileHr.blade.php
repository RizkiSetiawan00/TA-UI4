
    

<!-- Modal profilhrNew - ADD -->
<div class="modal fade" id="profilhrEdit{{$profilhrnya->id}}" tabindex="-1" aria-labelledby="profilhrEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profilhrNew">Edit profilhr data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('profilhr.Edit', $profilhrnya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="profilhrName" class="col-form-label">Edit HR Profile Name : </label>
            <input type="text" class="form-control" id="profilhrName" name="name" placeholder="Type Here" required/>
            <label for="profilhrName" class="col-form-label">Edit profilhr Name : </label>
            <input value="{{ old('email') }}"  type="email"  name="email" class="form-control" id="inputEmail3">
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