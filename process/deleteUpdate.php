<?php
    require_once 'connection.php';

    if (isset($_POST['id'])) {
        
        $id = $_POST['id'];

        $deleteUpdate = "DELETE FROM updates WHERE Id = $id";
        $deleteUpdate_res = mysqli_query($conn,$deleteUpdate);

        if ($deleteUpdate_res) {
            echo 'deleted';
        }else {
            echo 'error';
        }
    }