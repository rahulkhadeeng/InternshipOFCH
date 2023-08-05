<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "Youre logged out.";
        header('location:login.php');
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employee Payroll Management System</title>
        <link rel="icon" href="/favicon_payroll.ioc" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>


        <style>
            body {
                    background-image: url('home.png');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
        </style>

        <style type="text/css">
            
            .card
            {
                position: absolute;
                width: 30%;
                left: 80%;
                top: 15%;
                background-color: transparent;
            }

            h5 {text-align: center;}
            a {text-align: center;}
        </style>


        <!-- Navbarr starts... -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <div class="dropdown" style="padding-left: 40px;">
                            <a class="btn text-light secondary" href="#">Home</a>
                        </div>
                    </li>


                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn text-light secondary " href="attendance.php">Attendance</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn text-light secondary " href="department.php">Department</a>
                        </div>
                    </li>

                    

                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn text-light secondary " href="allowance.php">Allowance</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="#"> <b>Employee Payroll Management System</b> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 justify-content-end">
                <ul class="navbar-nav ml-auto">
                    

                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn text-light secondary " href="report.php">Reports</a>
                        </div>
                    </li>


                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn text-light secondary " href="info.php">Info</a>
                        </div>
                    </li>



                    <li class="nav-item" style="padding-right: 40px;">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>


                </ul>
            </div>
        </nav>
        <!-- Navbarr ends... -->



<div class="card" style="width: 10rem; backdrop-filter: blur(100px);">
  <img class="card-img-top" src="usericon.png" alt="Card image cap">
    <div class="card-body">
            <h5>WELCOME<br> MR.<?php echo $_SESSION['username'] ?> </h5>
            <p class="card-text"></p>
            <a href="logout.php" class="btn btn-primary">LOGOUT</a>
            <div class="position-relative">
    </div>
    </div>
</div>
 


<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
    body::-webkit-scrollbar{
    display: none;
  }
</style>



</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
