
    <!-- EDIT MODAL -->
    <div class="modal fade" id="EditprojectManager{{$projeknya->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit for Manager or Upper</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('manager.editProject', $projeknya->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">To do :</label>
                        <input type="text" class="form-control" id="recipient-name" name="desc" placeholder="What kind of job would you like to add?" value="{{old('desc', $projeknya->desc)}}">
                        @error('desc')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    <!-- TEMPUS , but failed :(
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Deadline :</label>
                        
                        <div class="input-group" id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest">
                            <input type="text" class="form-control" data-td-target="#kt_td_picker_localization"/>
                            <span class="input-group-text" data-td-target="#kt_td_picker_localization" data-td-toggle="datetimepicker">
                                <i class="ki-duotone ki-calendar-8 bi bi-calendar2-x fs-2"><span class="path1"></span><span class="path2"></span>
                            </i>
                            </span>
                        </div>
        
                    </div>
                    -->
    
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Deadline :</label>
                        <input type="datetime-local" class="form-control" id="deadline" name="deadline" value="{{old('deadline', $projeknya->deadline)}}">
                        @error('deadline')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
        
                    </div>
    
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Staff incharge :</label>
                        
                        <select value="{{old('user_id', $projeknya->user_id)}}" class="form-select formSelect"  name="user_id" aria-label="Default select">
                            <option disabled selected="">Select Staff</option>
                            @foreach ($staff2 as $ada)
                            <option value="{{old('user_id', $ada->id)}}">{{ $ada->name }}</option>
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
    
        <!-- End of Edit MODAL -->

