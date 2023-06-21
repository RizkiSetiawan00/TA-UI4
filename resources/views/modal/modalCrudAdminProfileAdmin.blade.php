
<!-- Modal profiladminNew - ADD -->
<div class="modal fade" id="profiladminNew" tabindex="-1" aria-labelledby="profiladminNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profiladminNew">Add New admin Profile data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('profiladmin.save', $profiladminnya->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
            <label for="profiladminName" class="col-form-label">Select User : </label>
            
            <select name="name" class="form-select" aria-label="Default select">
                <option disabled selected>Select Profile</option>
                @foreach($profiladmin as $profiladminnya1)
                @if($profiladminnya1->type !== 3)
                <option value="{{$profiladminnya1->id}}">{{$profiladminnya1->name}}</option>
                @endif
                @endforeach
            </select>

            <label for="profiladminName" class="col-form-label">Will be changed into : </label>
            <select class="form-select" Disabled aria-label="Disabled select example">
                <option disabled selected value="3" name="type">Admin</option>
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


    

<!-- Modal profiladminNew - ADD -->
<div class="modal fade" id="profiladminEdit" tabindex="-1" aria-labelledby="profiladminEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="profiladminNew">Edit profil Admin data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('profiladmin.Edit', $profiladminnya->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")

            <label for="profiladminName" class="col-form-label">Edit Admin Profile Name : </label>
            <input type="text" class="form-control" id="profiladminName" name="name" placeholder="Type Here" required/>
            <label for="profiladminName" class="col-form-label">Edit profile Admin Name : </label>
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