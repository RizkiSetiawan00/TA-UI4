
    <!-- library js validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    
    <script>
        function addRows()
        { 
            var table = document.getElementById('bankNameInput');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length; 
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++)
            {
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 2)
                { 
                    var radioinput = document.getElementById('col2').getElementsByTagName('input'); 
                    for(var j = 0; j <= radioinput.length; j++)
                    { 
                        if(radioinput[j].type == 'radio')
                        { 
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }

        function deleteRows()
        {
            var table = document.getElementById('bankNameInput');
            var rowCount = table.rows.length;
            if(rowCount > '2')
            {
                var row = table.deleteRow(rowCount-1);
                rowCount--;
            }else{
                alert('There should be atleast one row');
            }
        }
    </script>
    <!-- alert blink text -->
    <script>
        function blink_text()
        {
            $('#message_error').fadeOut(700);
            $('#message_error').fadeIn(700);
        }
        setInterval(blink_text,1000);
    </script>



        


<!-- Modal bankNew - ADD -->
<div class="modal fade" id="bankNew" tabindex="-1" aria-labelledby="bankNew" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="bankNew">Add New Bank data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('bank.save') }}" method="POST">
            @csrf

            <table id="bankNameInput" class="table table-borderless">
                <thead>
                    <tr>
                        <td>
                            <label for="bankName" class="col-form-label">New Bank Name : </label>
                        </td>
                    </tr>
                </thead>
                <tr> 
                    <td id="col0">
                            <input type="text" class="form-control" id="bankName" name="bankName[]" placeholder="Type Here" required/>
                        </div>
                    </td>
                </tr>
        </table> 
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
    <!-- End Of Modal BankNew-->


    

<!-- Modal bankNew - ADD -->
<div class="modal fade" id="bankEdit" tabindex="-1" aria-labelledby="bankEdit" aria-hidden="true">
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
            <input type="text" class="form-control" id="bankName" name="bankName" placeholder="Type Here" required/>
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