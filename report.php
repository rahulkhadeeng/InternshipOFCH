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
        <title>REPORTS</title>
        <link rel="icon" href="favicon_payroll.ico" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    	      

         <!-- Navbarr starts... -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <div class="dropdown" style="padding-left: 40px;">
                            <a class="btn text-light secondary" href="home.php">Home</a>
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


<!-- report page starts -->
<!-- report page starts -->

<div class="container">
  <h1 class="text-center page-heading">DOWNLOAD REPORTS</h1>
  <hr>

  <div class="row mt-4">

    <div class="col text-center">
      <div class="icon-container">
        <i class="fas fa-file-excel fa-5x"></i>
        <div class="btn-container">
          <button class="btn btn-danger mt-2" onclick="location.href='export_product.php'">Attendance</button>
        </div>
      </div>
    </div>

    <div class="col text-center">
      <div class="icon-container">
        <i class="fas fa-file-excel fa-5x"></i>
        <div class="btn-container">
          <button class="btn btn-danger mt-2" onclick="location.href='export_supplier.php'">Department</button>
        </div>
      </div>
    </div>

    <div class="col text-center">
      <div class="icon-container">
        <i class="fas fa-file-excel fa-5x"></i>
        <div class="btn-container">
          <button class="btn btn-danger mt-2" onclick="location.href='export_inventory.php'">Allowance</button>
        </div>
      </div>
    </div>

  </div>
</div>


<style>
    body {
    background-color: #f8f9fa;
    }

    .icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
    }

    .page-heading {
    margin-top: 40px;
    margin-bottom: 20px;
    }

    .btn-container {
    display: flex;
    justify-content: center;
    }

    .btn-container .btn {
    width: 100%;
    }
</style>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
