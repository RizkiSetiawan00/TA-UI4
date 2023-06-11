
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Staff incharge :</label>
                        <select class="form-select formSelect" aria-label="Default select">
                            <option disabled selected="">Select Staff</option>
                            <option value="1">Staff 1</option>
                            <option value="2">Staff 2</option>
                        </select>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Status :</label><br>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-info" for="btnradio1">On Progress</label>
    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-success" for="btnradio2">Finished</label>
    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio3">On Hold</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Description : </label>
                    <textarea type="text" class="form-control" id="recipient-name" name="sta_desc" placeholder="Put some detail here."></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
    </div>
    </div>
                    <script>
                        new tempusDominus.TempusDominus(document.getElementById("kt_td_picker_localization"), {
                            localization: {
                                locale: "id",
                                startOfTheWeek: 1
                            }
                        });
                    </script>

    <!-- Content End -->