<?php
    require_once 'connection.php';
    require_once 'functions.php';

    if (isset($_POST['idnum'])) {

        $idnum = $_POST['idnum'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $dob = $_POST['dob'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $section = $_POST['section'];
        $pass = $_POST['pass'];

        //echo $idnum.$lname.$fname.$mname.$dob.$course.$year.$section.$pass;

        enrollStudent($conn, $idnum, $lname, $fname, $mname, $dob, $course, $year, $section, $pass);
    }
?>