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
        <title>INFORMATION</title>
        <link rel="icon" href="favicon_payroll.ioc" type="image/x-icon">

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
                            <a class="btn text-light secondary " href="#">Info</a>
                        </div>
                    </li>



                    <li class="nav-item" style="padding-right: 40px;">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>


                </ul>
            </div>
        </nav>
        <!-- Navbarr ends... -->


<!-- contact page starts -->
    <div class="container">

      <h2 class="contact-title">CONTACT DETAILS</h2>
      <div class="row">
        <div class="col">
          <div class="contact-details">
            <h5>
              <span class="contact-icon bg-light">
                <i class="fas fa-building"></i>
              </span>Munition India Ltd
            </h5>
            <p>
              <span class="contact-icon bg-light">
                <i class="fas fa-map-marker-alt"></i>
              </span>Ord Factory Chanda, Chandrapur
            </p>
            <p>
              <span class="contact-icon bg-light">
                <i class="fas fa-phone"></i>
              </span>+91 7175-254043
            </p>
            <p>
              <span class="contact-icon bg-light">
                <i class="fas fa-envelope"></i>
              </span>info@munitionfactory.com
            </p>
          </div>
        </div>
        <div class="col">
          <div class="description">
            <h4 class="description-title">Munition Factory Overview</h4>
            <p>A state-of-the-art facility specializing in the production of high-quality and reliable munitions for defense and security purposes.</p>
          </div>
          <div class="description">
            <h4 class="description-title">About Employee Payroll Management System</h4>
            <p>A comprehensive software solution designed to manage employee's Attendance, department, Allowance, ACC and ID </p>
          </div>
        </div>
      </div>


    </div>
<!-- contact page ends -->

<style>
  body {
    background-color: #f8f8f8;
    color: #333;

    background: url(infoback.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  .container {
    max-width: 850px;
    margin: 85px auto;
    padding: 20px;
    border: 5px solid #e9ecef;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.85);
  }

  .contact-title {
    text-align: left;
    font-size: 28px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
    position: relative;
    padding-bottom: 10px;
  }

  .contact-title::after {
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #ccc;
  }

  .contact-details {
    margin-bottom: 20px;
  }

  .contact-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #f0f0f0;
    margin-right: 10px;
  }

  .contact-icon i {
    font-size: 20px;
    color: red;
  }

  .description {
    margin-top: 0;
    margin-bottom: 20px;
  }

  .description-title {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 18px;
  }
</style>


</body>
</html>
