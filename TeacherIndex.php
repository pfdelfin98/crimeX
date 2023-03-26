<?php
    include 'process/TeacherHeader.php';
?>

<div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper" class="text-white bg-dark">
    <div class="text-center p-3">
        <img src="Images/user.png" class="rounded-circle" height="80" alt=""><br>
        <span>ADMIN TEACHER</span>
    </div>

    <div class="pt-0 p-3">
        <hr class="m-1">
        <h6>DASHBOARD</h6>

            <ul class="ms-4">

                <li>
                    <a href="TeacherIndex.php" id="dashboard"  class="text-decoration-none text-warning"> Latest Update</a>
                </li>

                <li>
                    <a href="#" id="PendOrders" class="text-decoration-none "> Announcement</a>
                </li>

                <li>
                    <a href="CSIsimulation.php" class="text-decoration-none ">CSI Simulation</a>
                </li>
            </ul>
        
    </div>

    <div class="pt-0 p-3">
        <hr class="m-1">
        <h6>PERFORMANCE EVALUATION</h6>

            <ul class="ms-4">

                <li>
                    <a href="#" id="PendOrders" class="text-decoration-none "> Statistics</a>
                </li>

                <li>
                    <a href="#" id="FinOrders" class="text-decoration-none ">Role Analyzer</a>
                </li>
            </ul>
        
    </div>

    <div class="pt-0 p-3">
        <h6>REPORT GENERATION</h6>

            <ul class="ms-4">

                <li>
                    <a href="#" id="PendOrders" class="text-decoration-none "> Data Query</a>
                </li>
            </ul>
        
    </div>

    <div class="pt-0 p-3">
        <hr class="m-1">
        <h6>USER MANAGEMENT</h6>

            <ul class="ms-4">

                <li>
                    <a href="#" id="FinOrders" class="text-decoration-none ">Edit User Profile</a>
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

                                                <div class="d-flex">
                                                    <p class="me-auto"><?php echo $date;?></p>
                                                </div>
                                                

                                                <div class="row align-items-center justify-content-center p-2">
                                                    <div class="col-4 p-1">
                                                        <img src="updateImg/<?php echo $img;?>" height="300" class="w-100 rounded shadow" alt="">
                                                    </div>

                                                    <div class="col-8 text-start">
                                                        
                                                        <p align="justify">
                                                            <?php echo $message;?>
                                                        </p>
                                                        
                                                    </div>
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

    

   

    
</body>
</html>