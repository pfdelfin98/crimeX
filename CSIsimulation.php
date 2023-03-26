
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
                            <a href="TeacherIndex.php" id="dashboard"  class="text-decoration-none"> Latest Update</a>
                        </li>

                        <li>
                            <a href="#" id="PendOrders" class="text-decoration-none "> Announcement</a>
                        </li>

                        <li>
                            <a href="CSIsimulation.php" class="text-decoration-none text-warning">CSI Simulation</a>
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

                    <a href="process/logout.php" class="text-decoration-none text-warning">LOG OUT <i class="fa-solid fa-right-from-bracket"></i></a>
                
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
                                <h4 class="p-2">CSI Simulator</h4>
                                
                            </div>
                            <hr class="" style="height:2px;"></hr>

                            <div class="container border text-center">
                                <h5 class="text-center p-4 pt-2">This is the CSI Simulation Page</h5>
                            </div>

                            <div class="d-flex align-items-center p-2">
                                <h5 class="me-auto">LIST OF STUDENTS ENROLLED IN CSI SIMULATION</h5>
                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ENROLL STUDENT</button>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-light text-primary btn-sm me-auto">Pagination</button>
                                <button class="btn btn-light btn-sm border"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                                <button class="btn btn-light btn-sm border"><i class="fa fa-save" aria-hidden="true"></i></button>
                                <button class="btn btn-light btn-sm border"><i class="fa fa-filter" aria-hidden="true"></i> Selections</button>
                                <button class="btn btn-light btn-sm border"><i class="fa fa-list" aria-hidden="true"></i> Detail View</button>
                                <input type="search" id="search" class="form-control w-25" placeholder="Search here">
                            </div>

                            <table class="table table-striped table-hover text-center shadow rounded table-sm my-2">
                                <thead>
                                    <th>ID#</th>
                                    <th>LAST NAME</th>
                                    <th>FIRST NAME</th>
                                    <th>MIDDLE NAME</th>
                                    <th>COURSE</th>
                                    <th>YEAR</th>
                                    <th>SECTION</th>
                                    <th>ACTION</th>
                                </thead>
                                <tbody>
                                    

                            <?php
                                require_once 'process/connection.php';

                                $getstudents = "SELECT * FROM studentsaccount";
                                $getstudents_res = mysqli_query($conn, $getstudents);

                                if (mysqli_num_rows($getstudents_res)>0) {
                                    while ($row = mysqli_fetch_assoc($getstudents_res)) {
                                        $id = $row['Id'];
                                        $idnum = $row['IdNumber'];
                                        $lname = $row['LastName'];
                                        $fname = $row['FirstName'];
                                        $mname = $row['MiddleName'];
                                        $dob = $row['dob'];
                                        $course = $row['Course'];
                                        $year = $row['Year'];
                                        $section = $row['Section'];

                                         ?>
                                        <tr>
                                            <td class="d-none"><?php echo $id;?></td>
                                            <td><?php echo $idnum;?></td>
                                            <td><?php echo $lname;?></td>
                                            <td><?php echo $fname;?></td>
                                            <td><?php echo $mname;?></td>
                                            <td><?php echo $course;?></td>
                                            <td><?php echo $year;?></td>
                                            <td><?php echo $section;?></td>
                                            <td><button class="btn btn-sm btn-light"><i class="fa fa-edit" aria-hidden="true"></i></button></td>
                                        </tr>
                                
                                        <?php
                                     }
                                }
                            ?>

                                </tbody>            
                            </table>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-warning" id="staticBackdropLabel">CrimeX</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="output">
            <div class="d-grid gap-2">
                <div>
                    <label for="" class="fw-bold">ID NUMBER:</label>
                    <input type="text" id="IdNum" class="form-control">
                </div>

                <div>
                    <label for="" class="fw-bold">Last Name:</label>
                    <input type="text" id="Lname" class="form-control">
                </div>

                <div>
                    <label for="" class="fw-bold">First Name:</label>
                    <input type="text" id="Fname" class="form-control">
                </div>

                <div class="d-flex gap-3 justify-content-between">
                    <div>
                        <label for="" class="fw-bold">Middle Name:</label>
                        <input type="text" id="Mname" class="form-control">
                    </div>

                    <div>
                        <label for="" class="fw-bold">Date of Birth:</label>
                        <input type="date" id="dob" class="form-control">
                    </div>
                    
                </div>

                <hr class="text-warning" style="height:5px;"></hr>

                <div class="d-flex gap-1">
                    <div>
                        <label for="" class="fw-bold w-100">Course:</label>
                        <select id="course" class="form-select">
                            <option value="BS Criminology">BS Criminology</option>
                        </select>
                    </div>

                    <div>
                        <label for="" class="fw-bold w-100">Year:</label>
                        <select id="year" class="form-select w-100">
                            <option value="3">3</option>
                        </select>
                    </div>
                    
                </div>

                <div>
                    <label for="" class="fw-bold">Section:</label>
                    <select id="section" class="form-select w-50">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>

                <div>
                    <label for="" class="fw-bold">Default Password:</label>
                    <input type="text" id="password" class="form-control w-50" value="WELCOME1" readonly>
                </div>
            </div>
        </div>

        
        <div class="modal-footer">
            <button onclick="enroll();" id="enroll" type="button" class="btn btn-success">ENROLL</button>
        </div>
        </div>
    </div>
    </div>

    <script>
        function enroll(){
            
            var idnum = $('#IdNum').val();
            var lname = $('#Lname').val();
            var fname = $('#Fname').val();
            var mname = $('#Mname').val();
            var dob = $('#dob').val();
            var course = $('select[id="course"]').val();
            var year = $('select[id="year"]').val();
            var section = $('select[id="section"]').val();
            var pass = $('#password').val();

            // alert(idnum);
            // alert(lname);
            // alert(fname);
            // alert(mname);
            // alert(dob);
            // alert(course);
            // alert(year);
            // alert(section);
            // alert(pass);

            if (idnum == "" || lname == "" || fname == "" || mname == "" || dob == "" || course == "" || year == "" || section == "" || pass == "") {
                alert('Fill in all fields');
            }else{

                $.post("process/enrollStudent.php",
                    {
                        idnum: idnum,
                        lname: lname,
                        fname: fname,
                        mname: mname,
                        dob: dob,
                        course: course,
                        year: year,
                        section: section,
                        pass: pass
                        
                    },

                    function(data){
                        $('#output').html(data);
                        $('.modal-footer').addClass('d-none');
                    }
                    );
            }

        }
    </script>

    
</body>
</html>