
<?php
    
    require_once 'connection.php';

    if (isset($_POST['update'])) {
        
        $update = $_POST['update'];
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 10000000) {
                    $fileNameNew = uniqid('', true)."." . $fileActualExt;
                    $fileDestination = '../updateImg/' . $fileNameNew;

                    $photo = move_uploaded_file($fileTmpName, $fileDestination);

                    $insert = "INSERT INTO updates (message, img) VALUES('".$update."', '".$fileNameNew."');";
                    $insert_res = mysqli_query($conn, $insert);

                    if ($insert_res) {
                        echo '
                            <div class="d-grid text-center p-3">
                                <h1 class="pb-3 text-success pt-3"><i class="fa fa-check-circle fa-2xl" aria-hidden="true"></i></h1>
                                <h3 class="text-success">INFORMATION UPDATED</h3>
                                
                                <button onclick="location.reload();" type="button" class="btn btn-success w-25 ms-auto mt-5" data-bs-dismiss="modal" aria-label="Close">Continue</button>
                            </div>
                        ';
                    }
                    else {
                        
                    }
                    
                }
                else {
                    echo 'file is too big';
                }
            }
            else {
                echo 'Error uploading';
            }
        }
        else {
            echo 'invalid type of file';
        }
 
       
    }