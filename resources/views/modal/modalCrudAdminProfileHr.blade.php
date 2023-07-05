
<!-- Modal profilhrNew - ADD -->
<div class="modal fade" id="profilhrNew" tabindex="-1" aria-labelledby="profilhrNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profilhrNew">Add New HR Profile data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('profilhr.save', $profilhrnya->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="profilhrName" class="col-form-label">Select User : </label>
            
            <select name="name" class="form-select" aria-label="Default select">
                <option disabled selected>Select Profile</option>
                @foreach($profilhr2 as $pHR)
                <option value="{{$pHR->id}}">{{$pHR->name}}</option>
                @endforeach
            </select>

            <label for="profilhrName" class="col-form-label">Will be changed into : </label>
            <select class="form-select"  aria-label="Disabled select example">
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


    

<!-- Modal profilhrNew - ADD -->
<div class="modal fade" id="profilhrEdit" tabindex="-1" aria-labelledby="profilhrEdit" aria-hidden="true">
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