<?php
?>

<div class="modal-header">
    <h5 class="modal-title text-warning" id="exampleModalLabel">CrimeX</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body" id="updatedisplay">

        <h4 class="text-center">ADD NEW UPDATES</h4>
        
        <div class="form-floating mb-3 p-2">
            <textarea class="form-control update" placeholder="Enter New Update" id="floatingTextarea" required></textarea>
            <label for="floatingTextarea">Enter New Update</label>
        </div>

        <div class="mt-3 p-2">
            <label for="formFile" class="form-label fw-bold">Attach Image</label>
            <input class="form-control file" type="file" id="formFile" required>
        </div>

</div>

<div class="modal-footer">
    <button onclick="insertUpdate();" type="button" class="btn btn-success">UPDATE</button>
</div>

<script>
    function insertUpdate(){

        var formData = new FormData();

        formData.append('update', $('.update').val());
        formData.append('file', $('.file')[0].files[0]);

        // Check if 'update' or 'file' is missing
        if (!formData.get('update') || $('.file')[0].files.length === 0) {
        alert('Fill in all fields');
        } 
        
        else {
            // Make AJAX request
            $.ajax({
                url: 'process/InsertUpdate.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#updatedisplay').html(data);
                    $('.modal-footer').addClass('d-none');
                }
            });
        }


    }
</script>