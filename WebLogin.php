<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrimeX Login</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Icons/fontawesome-free-6.1.1-web/css/all.min.css">
	<script rel="stylesheet" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.js"> </script>

    <style>
        .hovereffect {
        width: 150px;
        height: 150px;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
        }

        .hovereffect .overlay {
        position: absolute;
        overflow: hidden;
        width: 80%;
        height: 80%;
        left: 10%;
        top: 10%;
        border-bottom: 1px solid #FFF;
        border-top: 1px solid #FFF;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: scale(0,1);
        -ms-transform: scale(0,1);
        transform: scale(0,1);
        }

        .hovereffect:hover .overlay {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        }

        .hovereffect img {
        display: block;
        position: relative;
        -webkit-transition: all 0.35s;
        transition: all 0.35s;
        }

        .hovereffect:hover img {
        filter: brightness(0.6);
        -webkit-filter: brightness(0.6);
        }

        .hovereffect h2 {
        text-align: center;
        position: relative;
        font-size: 17px;
        background-color: transparent;
        color: #FFF;
        padding: 1em 0;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0);
        }

        .hovereffect a, .hovereffect p {
        color: #FFF;
        padding: 1em 0;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        }

        .hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }

        #navbar {
            -webkit-transition: background-color 0.3s ease-in-out;
            -moz-transition: background-color 0.3s ease-in-out;
            -ms-transition: background-color 0.3s ease-in-out;
            -o-transition: background-color 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        .sep {
            background-size: 200% 200%;
            background-image: 
            linear-gradient(to top, #5bc0de 50%, transparent 50%);
            -webkit-transition: background-position 300ms, color 300ms ease,
            -moz-transition: background-position 300ms, color 300ms ease,
            -ms-transition: background-position 300ms, color 300ms ease,
            -o-transition: background-position 300ms, color 300ms ease,
            transition: background-position 300ms, color 300ms ease,

            }

            .sep:hover {
            background-image: 
            linear-gradient(to top, #5bc0de 51%, transparent 50%);
            background-position: 0 50%;
            -webkit-transition: background-position 300ms, color 300ms ease, border-color 300ms ease;
            -moz-transition: background-position 300ms, color 300ms ease, border-color 300ms ease;
            -ms-transition: background-position 300ms, color 300ms ease, border-color 300ms ease;
            -o-transition: background-position 300ms, color 300ms ease, border-color 300ms ease;
            transition: background-position 300ms, color 300ms ease, border-color 300ms ease;
            }
    </style>

    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if (scroll > 90) {
                    $("#navbar").css("background" , "black");
                }

                else{
                    $("#navbar").css("background" , ""); 
                }
            })

            $('#submit').click(function(){

                var idNum = $('#idNum').val();
                var pass = $('#pass').val();
                
                if (idNum != '' && pass != '') {

                    $.post("process/AdminLogin.php",
                    {
                        idNum: idNum,
                        pass: pass
                    },

                    function(data){
                        if (data == 'admin') {
                            window.location.assign("AdminIndex.php")
                        }
                        if (data == 'teacher') {
                            window.location.assign("TeacherIndex.php")
                        }
                        if (data == 'invalid') {
                            $("#loginAlert").html('Invalid Username or Password');
                        }
                    }


                );

                }else{
                    $("#loginAlert").html('Fill in all fields');
                }
                
            })
        })
    </script>

</head>
<body class="" style="background-color:black">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="#">CrimeX</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white ms-5" href="#about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white ms-5" href="#developers">Developers</a>
                </li>
            </ul>
            <button class="btn btn-sm btn-outline-warning p-1 fw-bold ms-5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">LOG IN</button>

            </div>
        </div>
    </nav>

    <div class="text-center" style="height:700px; background-image: url('Images/Background.jpg'); background-size:cover;">

        <div class="container pt-5">
            <div class="row align-tems-center justify-content-center">
                <div class="col-8 mt-5">
                    <img src="Images/CrimeX Logo.png" height="250" alt="" class="mt-5">
                    <h2 class="text-warning">2D CRIME SCENE INVESTIGATION SIMULATOR</h2>
                    <p class="text-light">It is by doubting that we come to investigate, and by investigating that we recognize the truth</p>
                    <p class="text-center text-light">-Peter Abelard</p>
                </div>
            </div>
        </div>
    
    </div>

    <div class="container-fluid p-5" style="background-color:black;">
        <div class="row align-items-center justify-content-center p-4">

            <div class="col-4 m-5">
                <img src="Images/inv2.jpg" alt="" class="img-fluid shadow-lg shadow-end shadow-bottom rounded shadow-lg">
            </div>

            <div class="col-6">
                <h5 class="text-warning">CRIME SCENE INVESTIGATION</h5>
                <span class="text-white">Crime scene investigation is, by its most basic definition, the method of protecting, processing and reconstruction of a crime. It doesn't matter where the crime took place or if there are more than one crime scenes involved. A crime scene can envelop more than one location, as in the case where a victim has been killed in one location and found in another. A crime scene can be on land or in water, in a tree or buried six feet under.</span>  

                <h5 class="text-warning mt-3">SCENE OF THE CRIME OPERATIONS</h5>
                <span class="text-white">Scene of the Crime Operation (SOCO) – A forensic procedure performed by the trained personnel of the PNP Crime Laboratory SOCO Team through scientific methods of investigation for the purpose of preserving the crime scene, gathering information, documentation, collection, and examination of all physical evidences.</span>

            </div>

        </div>
    </div>

    <h4 class="text-center text-warning py-4">WHAT'S NEW?</h4>

    <div class="container-fluid p-5" style="background-image: url('Images/foot.png'); background-repeat:no-repeat;">
        <div class="row align-items-center justify-content-center p-4 text-center">
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
                            <div class="col-3 rounded">
                                <div class="card" style="width: 18rem;">
                                    <img src="updateImg/<?php echo $img;?>" height="200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title text-muted"><?php echo $date;?></h6>
                                        <p class="card-text"><?php echo $message;?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
            
        </div>
    </div>

    <div class="container p-5" style="background-image: url('Images/finger.png'); background-repeat:no-repeat;">

        <h4 class="text-center text-warning">ANNOUNCEMENT</h4>

    </div>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <h5 class="text-warning text-center">Fresh Crime X</h5>
            <div class="col-5 text-center">
                <p class="text-center text-white">
                    2D Crime Scene Investigation Simulation will be having
                    an update in terms of characters, scenarios, events and procedures
                    this 10/10/2023.
                    During this update, expect that there will be a few bugs that could
                    interrupt the game and the whole function itself.
                    We look forward for your patience and trust.
                </p>
            </div>
        </div>
    </div>

    <div class="my-5" style="height:250px; background-image: url('Images/cross.png'); background-size:cover;" id="about">

    </div>

    <h4 class="text-center text-warning">ABOUT CrimeX</h4>

    <p class="p-4 text-white">CrimeX is a 2D Crime Scene Investigation Simulator game that simulates digital crime scene investigation.
        CrimeX aids to help Criminology Students to better understand the procedure of the Crime Scene Investigation.
        Crime scene investigators identify the physical evidence to help determine what happened and who was involved
        by conducting a methodical examination of these regions. 
        <br><br>
        To guarantee that vital evidence is  gathered that delicate evidence is not lost in the process, this process must
        be carried out meticulously.
    </p>

    <div class="text-center" id="developers">
        <button class="btn btn-warning rounded my-auto">DOWNLOAD GUIDE BOOK</button>
    </div>

    <hr class="p-1 bg-warning" style="margin-top:200px;"></hr>

    <h4 class="mt-2 text-center text-warning">THE DEVELOPERS</h4>

    <p class="text-white p-5">
        The team is composed of five (5) small and humble individuals who specialize in different areas and are committed to bringing forth innovative systems that will aid the needs of the community. The team was formed in 2019 and has since been working on different projects together. The team possesses exceptional qualities and skills, which are considered the edge of the group among other groups. Dminions aims to break stereotypes through unprecedented innovations.
    </p>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-2 text-center">
                <img src="Images/user.png" class="rounded-circle" height="100" alt="">
                <h6 class="text-warning mt-1">PROJECT MANAGER</h6>
            </div>
            
            <div class="col-2 text-center">
                <img src="Images/user.png" class="rounded-circle" height="100" alt="">
                <h6 class="text-warning mt-1">SYSTEM ANALYST</h6>
            </div>

            <div class="col-2 text-center">
                <img src="Images/user.png" class="rounded-circle" height="100" alt="">
                <h6 class="text-warning mt-1">ASST. SYSTEM ANALYST</h6>
            </div>

            <div class="col-2 text-center">
                <img src="Images/user.png" class="rounded-circle" height="100" alt="">
                <h6 class="text-warning mt-1">PROGRAMMER</h6>
            </div>

            <div class="col-2 text-center">
                <img src="Images/user.png" class="rounded-circle" height="100" alt="">
                <h6 class="text-warning mt-1">ASST. PROGRAMMER</h6>
            </div>
        </div>
    </div>

    <footer class="bg-warning p-5">
        <h5 class="text-center p-5 pb-0">2DCSIS MADE WITH <i class="fa fa-heart" aria-hidden="true"></i> BY BSCS4A DMINIONS</h4>
        <p class="fs-5 text-center pb-3">alrights reserved 2023</p>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-warning border-1" style="background-image:url('Images/login.jpg'); background-size:cover">
        <div class="modal-header">
            <h5 class="modal-title text-warning" id="exampleModalLabel">CrimeX</h5>
            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h3 class="text-white text-center">LOG IN</h3>
            <form>
                <div class="mb-3 w-75 mx-auto">
                    <label for="exampleFormControlInput1" class="form-label text-white">ID Number:</label>
                    <input type="text" name="idNum" class="form-control text-muted fw-bold p-2" id="idNum">
                </div>

                <div class="mb-3 w-75 mx-auto">
                    <label for="exampleFormControlInput1" class="form-label text-white">Password:</label>
                    <input type="password" class="form-control text-muted fw-bold p-2" id="pass">
                </div>

                <div class="mb-3 w-100 text-center">
                    <button type="button" class="btn btn-warning text-white mx-auto" id="submit">SUBMIT</button>
                    <p id="loginAlert" class="text-warning mt-2"></p>
                </div>
            </form>
            

        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
    </div>

</body>
</html>