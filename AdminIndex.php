<?php
  session_start();

  if (!isset($_SESSION['idNum'])) {

    echo '<script>
        
        alert("Please Login First");
        window.location.assign("WebLogin.php");
    
        </script>';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Admin</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Icons/fontawesome-free-6.1.1-web/css/all.min.css">
	<script rel="stylesheet" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.js"> </script>

    <style>
        /*!
        * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/)
        * Copyright 2013-2016 Start Bootstrap
        * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
        */

        body {
            overflow-x: hidden;
        }

        /* Toggle Styles */

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            background: #000;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            width: 100%;
            position: absolute;
            padding: 0;
        }

        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right: -250px;
        }

        /* Sidebar Styles */

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li {
            text-indent: 20px;
            line-height: 40px;
        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #999999;
        }

        .sidebar-nav li a:hover {
            text-decoration: none;
            color: #fff;
            background: rgba(255,255,255,0.2);
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav > .sidebar-brand {
            height: 65px;
            font-size: 18px;
            line-height: 60px;
        }

        .sidebar-nav > .sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav > .sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        @media(min-width:768px) {
            #wrapper {
                padding-left: 220px;
            }

            #wrapper.toggled {
                padding-left: 0;
            }

            #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 0;
            }

            #page-content-wrapper {
                padding: 20px;
                position: relative;
            }

            #wrapper.toggled #page-content-wrapper {
                position: relative;
                margin-right: 0;
            }
        }

    </style>

    <script>
        $('document').ready(function(){

            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });

            // $("#sidebar-wrapper ul li a").click( function() {
      
            //     var file = $(this).attr("id");
            //     var url = file+".php";

            //     $("#content").fadeOut(10);
            //     $("#content").fadeIn(300);

            //     $("#sidebar-wrapper ul li a").removeClass("bg-light text-info");
            //     $("#sidebar-wrapper ul li a").removeClass("border-start border-warning border-5");

            //     $(this).addClass("bg-bg-light text-info");
            //     $(this).addClass("border-start border-warning border-5");
                        
            //     $.post(url,function(response) {

            //         $("#content").html(response);
                    
            //     });
            // });

            $('#NewUpdate').click(function(){
                $.post("process/NewUpdateModal.php",
                    
                    function(data){
                        $('#contentdisplay').html(data);
                    }
                );
            })

            $('.delete').click(function(){
                var id = $(this).attr('id');
                
                $.post("process/deleteUpdateModal.php",
                    {
                        id: id,
                    },

                    function(data){
                        $('#contentdisplay').html(data);
                    }
                );
            })

        })

    </script>

</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="text-white bg-dark">
            <div class="text-center p-3">
                <img src="Images/user.png" class="rounded-circle" height="80" alt=""><br>
                <span>MAIN ADMIN</span>
            </div>

            <div class="pt-0 p-3">
                <hr class="m-1">
                <h6>DASHBOARD</h6>

                    <ul class="ms-4">

                        <li>
                            <a href="TeacherIndex.php" class="text-decoration-none text-warning"> Latest Update</a>
                        </li>

                        <li>
                            <a href="#" id="PendOrders" class="text-decoration-none text-white"> Announcement</a>
                        </li>

                        <li>
                            <a href="#" id="FinOrders" class="text-decoration-none text-white">CSI Simulation</a>
                        </li>
                    </ul>
                
            </div>

            <div class="pt-0 p-3">
                <hr class="m-1">
                <h6>PERFORMANCE EVALUATION</h6>

                    <ul class="ms-4">

                        <li>
                            <a href="#" id="PendOrders" class="text-decoration-none text-white"> Statistics</a>
                        </li>

                        <li>
                            <a href="#" id="FinOrders" class="text-decoration-none text-white">Role Analyzer</a>
                        </li>
                    </ul>
                
            </div>

            <div class="pt-0 p-3">
                <h6>REPORT GENERATION</h6>

                    <ul class="ms-4">

                        <li>
                            <a href="#" id="PendOrders" class="text-decoration-none text-white"> Data Query</a>
                        </li>
                    </ul>
                
            </div>

            <div class="pt-0 p-3">
                <hr class="m-1">
                <h6>USER MANAGEMENT</h6>

                    <ul class="ms-4">

                        <li>
                            <a href="#" id="PendOrders" class="text-decoration-none text-white"> View Users</a>
                        </li>

                        <li>
                            <a href="#" id="FinOrders" class="text-decoration-none text-white">Edit USer Profile</a>
                        </li>
                    </ul>

                    <a href="process/logout.php" class="text-decoration-none text-warning fw-bold">LOG OUT <i class="fa-solid fa-right-from-bracket"></i></a>
                
            </div>

            


            
            
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        

                        <div class="container-fluid" id="content">

                            <div class="d-flex align-items-center">
                                <a href="#menu-toggle" class="btn btn-dark p-2 pt-1 pb-1" id="menu-toggle"><i class="fa-solid fa-bars"></i></a>
                                <h4 class="p-2">Dashboard</h4>
                                
                            </div>
                            <hr class="" style="height:2px;"></hr>

                            <div class="d-flex align-items-center">

                                <h5 class="text-start">Latest Update</h5>

                                <button id="NewUpdate" class="btn btn-sm btn-success ms-auto m-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">NEW UPDATE</button>

                            </div>

                            <?php
                                require_once 'process/connection.php';

                                $getUpdates = "SELECT * FROM updates LIMIT 3";
                                $getUpdates_res = mysqli_query($conn, $getUpdates);

                                if (mysqli_num_rows($getUpdates_res)>0) {
                                    while ($row = mysqli_fetch_assoc($getUpdates_res)) {
                                        $id = $row['Id'];
                                        $date = $row['dateCreated'];
                                        $message = $row['message'];
                                        $img = $row['img'];

                                        $date = date('F d, Y g:i A', strtotime($date));

                                        ?>
                                            <div class="container-fluid bg-light my-2 shadow text-end border rounded">

                                                <div class="d-flex p-2">
                                                    <button id="<?php echo $id;?>" class="ms-auto btn-close delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
                                                </div>
                                                

                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-4 p-1">
                                                        <img src="updateImg/<?php echo $img;?>" height="300" class="w-100 rounded shadow" alt="">
                                                    </div>

                                                    <div class="col-8 text-start">
                                                        
                                                        <p align="justify">
                                                            <?php echo $message;?>
                                                        </p>
                                                        
                                                    </div>
                                                </div>

                                                <div class="d-flex p-2">
                                                    <p class="me-auto"><?php echo $date;?></p>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                            ?>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" id="contentdisplay">
            
        </div>
    </div>
    </div>
    
    
    
</body>
</html>