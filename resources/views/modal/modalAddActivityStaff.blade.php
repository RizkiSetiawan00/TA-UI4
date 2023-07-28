
<div class="modal fade" id="editprojectStaff{{$projeknya->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staffModalLabel">Edit </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('staff.editProject', $projeknya->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
    
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Staff incharge :</label>
                        
                        <select value="{{old('user_id')}}" class="form-select formSelect"  name="user_id" aria-label="Default select">
                        <option selected value="{{$projeknya->user_id}}">{{$projeknya->User->name}}</option>
                            @foreach ($staff2 as $ada)
                            <option value="{{$ada->id}}">{{ $ada->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
    
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Status :</label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="status" id="btnradio1{{$projeknya->id}}" autocomplete="off" value="1" {{ old("status") == '1' ? 'checked' : '' }}  >
                            <label class="btn btn-outline-info" for="btnradio1{{$projeknya->id}}">On Progress</label>
        
                            <input type="radio" class="btn-check" name="status" id="btnradio2{{$projeknya->id}}" autocomplete="off"  value="2" {{ old("status") == '2' ? 'checked' : '' }}  >
                            <label class="btn btn-outline-success" for="btnradio2{{$projeknya->id}}">Finished</label>
        
                            <input type="radio" class="btn-check" name="status" id="btnradio3{{$projeknya->id}}" autocomplete="off"  value="3" {{ old("status") == '3' ? 'checked' : '' }}  >
                            <label class="btn btn-outline-warning" for="btnradio3{{$projeknya->id}}">On Hold</label>
        
                            <input type="radio" class="btn-check" name="status" id="btnradio4{{$projeknya->id}}" autocomplete="off"  value="0" {{ old("status") == '0' ? 'checked' : '' }}  >
                            <label class="btn btn-outline-secondary" for="btnradio4{{$projeknya->id}}">Not Assigned</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Description : </label>
                        <textarea type="text" class="form-control" id="recipient-name" name="sta_desc" placeholder="Put some detail here.">
                            {{old('sta_desc', $projeknya->sta_desc)}}
                        </textarea>
                        @error('sta_desc')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>

    <!-- Content End -->

    