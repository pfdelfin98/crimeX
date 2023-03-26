<?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        ?>

        <div class="modal-body">

            <div class="d-grid text-center p-2 deleted d-none">
                <h1 class="mb-3 text-success pt-3"><i class="fa fa-check-circle fa-2xl" aria-hidden="true"></i></h1>
                <h1 class="text-success">Removed</h1>

                <button onclick="location.reload();" type="button" class="btn btn-success w-25 ms-auto mt-5" data-bs-dismiss="modal" aria-label="Close">Continue</button>
            </div>

            <div class="content">
                <h4 class="text-center text-warning"><i class="fa fa-warning" aria-hidden="true"></i> ALERT <i class="fa fa-warning" aria-hidden="true"></i></h4>
                
                <h6 class="text-center mt-4">YOU ARE ABOUT TO REMOVE THIS UPDATE INFORMATION</h6>

                <h6 class="text-center p-4 mt-4">ARE YOU SURE YOU WANT TO CONTINUE?</h6>
            </div>
            

        </div>

        <div class="modal-footer">
            <button onclick="location.reload();" type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button id="<?php echo $id;?>" onclick="deleteUpdate(this.id);" type="button" class="btn btn-success">Continue</button>
        </div>

        <script>
            function deleteUpdate(id){
                
                $.post("process/deleteUpdate.php",
                    {
                        id: id,
                    },
                    
                    function(data){

                        if (data == "deleted") {

                            $('.modal-footer').addClass('d-none');
                            $('.content').addClass('d-none');
                            $('.deleted').removeClass('d-none');
                        }
                    }
                );
            }
        </script>

        <?php
    }
