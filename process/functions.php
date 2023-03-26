<?php

function adminUidExist($conn, $username){
    $sql = "SELECT * FROM adminuser WHERE IdNumber = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'stmt failed';
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function adminLogin($conn, $username, $pwd){
    $adminUidExist = adminUidExist($conn, $username);

    if ($adminUidExist === false) {
        echo 'invalid';
    }

    $pwdHashed = $adminUidExist["Password"];
    // $checkPwd = password_verify($pwd, $pwdHashed);

    if ($pwdHashed != $pwd) {
    }
    elseif ($pwdHashed = $pwd) {
        session_start();
        $_SESSION["id"] = $adminUidExist["Id"];
        $_SESSION["idNum"] = $adminUidExist["IdNumber"];
        $_SESSION["pass"] = $adminUidExist["Password"];
        $_SESSION["user"] = $adminUidExist["Username"];
        $_SESSION["type"] = $adminUidExist["Type"];

        if ($_SESSION["type"] == "Admin") {
            echo 'admin';
        }
        if ($_SESSION["type"] == "Teacher") {
            echo 'teacher';
        }
        // if ($_SESSION["usertype"] == "Kitchen") {
        //     header("location: ../Kitchen.php");
        //     exit();
        // }
        
    }
}

//enroll student

function enrollStudent($conn, $idnum, $lname, $fname, $mname, $dob, $course, $year, $section, $pass){
    $sql = "INSERT INTO studentsaccount (IdNumber, LastName, FirstName, MiddleName, dob, Course, Year, Section, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        echo 'stmtfailed';
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssss", $idnum, $lname, $fname, $mname, $dob, $course, $year, $section, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo '<div class="d-grid text-center p-3">
    <h1 class="pb-3 text-success pt-3"><i class="fa fa-check-circle fa-2xl" aria-hidden="true"></i></h1>
    <h3 class="text-success">STUDENT ENROLLED</h3>
    
    <button onclick="location.reload();" type="button" class="btn btn-success w-25 ms-auto mt-5" data-bs-dismiss="modal" aria-label="Close">Continue</button>
</div>';
}