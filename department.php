<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Employee Payroll Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

   <br> <!-- FORM Panel -->
   <div class="navbar navbar-expand-md navbar-dark bg-dark"> 
            <div class="col-md-4">
            <form action="" id="manage-department">
                <div class="card">
                    <div class="card-header">
                          Department Form
                    </div>
                    <!-- <div class="navbar navbar-expand-md navbar-dark bg-dark"> -->
                    <div class="card-body">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <textarea name="name" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                            
                            
                            
                    </div>
                            
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                                <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <!-- FORM Panel --> </br>

            <!-- Table Panel -->


            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Department</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                                $department = $connection->query("SELECT * FROM department order by id asc");
                                while($row=$department->fetch_assoc()):
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    
                                    <td class="">
                                         <p> <b><?php echo $row['name'] ?></b></p>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary edit_department" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>"  >Edit</button>
                                        <button class="btn btn-sm btn-danger delete_department" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table Panel -->
</body>

</html>
<style>
    
    td{
        vertical-align: middle !important;
    }
    td p{
        margin: unset
    }
    img{
        max-width:100px;
        max-height: :150px;
    }
</style>