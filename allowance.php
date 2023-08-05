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
        <link rel="icon" href="favicon_payroll.ico" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
              

        <!-- Navbarr starts... -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                   

                   <li class="nav-item">
                        <div class="dropdown" style="padding-left: 40px;">
                            <a class="btn text-light secondary" href="home.php">HOME</a>
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

        <!-- Modal -->
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD ALLOWANCE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">



                <div class="mb-3">
                  <label class="form-label">Employee ID</label>
                  <input type="text" class="form-control" name="empID" placeholder="Enter Employee ID">
                </div>

                <div class="mb-3">
                  <label  class="form-label">Employee Name</label>
                  <input type="text" class="form-control" name="allowID" placeholder="Enter Name">
                </div>

                <div class="mb-3">
                  <label class="form-label">Type</label>
                  <input type="text" class="form-control" name="typ" placeholder="Enter Type">
                </div>

                <div class="mb-3">
                  <label  class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amt" placeholder="Enter Amount">
                </div>

                <div class="mb-3">
                  <label class="form-label">Date</label>
                  <input type="text" class="form-control" name="date" placeholder="Enter Date">
                </div>

                
              </div>

              <div class="modal-footer">
                <button type="submit" name="save" class="btn btn-dark">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        </form>

        <!-- Modal Endss-->
        <!-- Modal Endss-->


        <div class="container my-3">
            <H1 class="text-center" style="margin-top: 70px;">ALLOWANCE</H1>
            <h6>WELCOME... <br> Mr. <?php echo $_SESSION['username'] ?> </h6>

            <button type="button" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
                ADD 
            </button>
            
        </div>




<!-- Table Starts -->
<!-- Table Starts -->
    <div class="container">
        <div class=col-lg-12>
        <table class="table table-hover table-bordered text-center table-striped border-tertiary">
            <tr class="table-dark">
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

    <?php

    include 'db_connection.php';

        if(isset(($_POST['attendance'])))
        {
            $empID = $_POST['empID'];
            $allowID = $_POST['empName'];
            $typ = $_POST['typ'];
            $amnt = $_POST['amnt'];
            $date = $_POST['date'];

            try {
            // Your database code that may throw a mysqli_sql_exception
            // for insertingg
            $insertquery = " INSERT INTO allowance ( emp_id, emp_name, typ, emp_amt, date ) VALUES ('$empID','$empName','$typ','$amnt','$date') ";

            $query = mysqli_query($connection,$insertquery);
           
            } catch (mysqli_sql_exception $e) {
                ?>
                            <script>
                            alert("Employee-ID already exists!");
                            </script>
                    <?php
                }
        }


        // for displayingg
        $displayquery = " SELECT * FROM `allowance` ";

        $query2 = mysqli_query($connection,$displayquery);

        while ($res = mysqli_fetch_array($query2)) {
            ?>
            <tr>
                <td> <?php echo $res['emp_id'] ?> </td>
                <td> <?php echo $res['emp_name'] ?> </td>
                <td> <?php echo $res['typ'] ?> </td>
                <td> <?php echo $res['emp_amt'] ?> </td>
                <td> <?php echo $res['date'] ?> </td>
                <td> 

                    <button class="btn btn-danger"> 
                        <a href="inv_delete.php?id=<?php echo $res['emp_id'] ?>" class="text-light" style="text-decoration: none;">DELETE</a> 
                    </button> 

                    <button class="btn btn-dark"> 
                        <a href="m_invupdate.php?id=<?php echo $res['emp_id'] ?>" class="text-light" style="text-decoration: none;">UPDATE</a> 
                    </button> 

                </td>
            </tr>
            <?php
        }
    ?>

            </table>
        </div>
    </div>

<!-- Table ends -->
<!-- Table ends -->





<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');

    body::-webkit-scrollbar{
    display: none;
  }
</style>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    
    // To avoid ReSubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
