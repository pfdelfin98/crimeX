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
                            