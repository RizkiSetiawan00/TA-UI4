
    
<div class="modal fade" id="AddprojectManager" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New for Manager or Upper</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('manager.saveProject') }}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">To do :</label>
                    <input type="text" class="form-control" id="recipient-name" name="desc" placeholder="What kind of job would you like to add?" value="{{ old('desc') }}">
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
                    <input type="datetime-local" class="form-control" id="deadline" name="deadline" value="{{ old('deadline') }}"/>
                    @error('deadline')
                    <div class="mb-3 small m-0 alert alert-danger mt-1">
                        {{ $message }}
                    </div>
                    @enderror
    
                </div>

                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Staff incharge :</label>
                    
                    <select value="{{ old('user_id') }}" class="form-select formSelect"  name="user_id" aria-label="Default select">
                        <option disabled selected="">Select Staff</option>
                        @foreach ($showStaff as $staffnya)
                        <option value="{{$staffnya->id}}">{{ $staffnya->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <div class="mb-3 small m-0 alert alert-danger mt-1">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Description : </label>
                    <textarea type="text" class="form-control" id="recipient-name" name="sta_desc" placeholder="Put some detail here." value="{{ old('sta_desc') }}"></textarea>
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


    <!-- EDIT MODAL -->
    <div class="modal fade" id="EditprojectManager" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit for Manager or Upper</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('manager.saveProject') }}" method="POST">
                        @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">To do :</label>
                        <input type="text" class="form-control" id="recipient-name" name="desc" placeholder="What kind of job would you like to add?" value="{{ old('desc') }}">
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
                        <input type="datetime-local" class="form-control" id="deadline" name="deadline" value="{{ old('desc') }}">
                        @error('deadline')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
        
                    </div>
    
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Staff incharge :</label>
                        
                        <select value="{{ old('user_id') }}" class="form-select formSelect"  name="user_id" aria-label="Default select">
                            <option disabled selected="">Select Staff</option>
                            @foreach ($showStaff as $staffnya)
                            <option value="{{$staffnya->id}}">{{ $staffnya->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="mb-3 small m-0 alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                        @enderror
    
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Description : </label>
                        <textarea type="text" class="form-control" id="recipient-name" name="sta_desc" placeholder="Put some detail here."value="{{ old('sta_desc') }}"></textarea>
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