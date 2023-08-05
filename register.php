<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="icon" href="favicon_payroll.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>


    <!-- Navbarr starts... -->
    <!-- Navbarr starts... -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="http://localhost/rahulkhade/">MAIN PAGE</a>
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
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbarr ends... -->
    <!-- Navbarr ends... -->



<!-- Form started -->
<!-- Form started -->
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>
    
    

<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required>
    </div> <!-- form-group// -->


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
           <!-- EMAILLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL -->
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
         <!-- PHONEEEEEEEEEE -->
        <input name="phone" class="form-control" placeholder="Phone number" type="text" required maxlength="10">
    </div> <!-- form-group// -->
    


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
         </div>
        <input name="job" class="form-control" placeholder="Job type" type="text" required>
    </div> <!-- form-group// -->



    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required>
    </div> <!-- form-group// -->


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="cpassword" class="form-control" placeholder="Repeat password" type="password" required>
    </div> <!-- form-group// -->  


    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->
<br> 
</div> 
<!-- Form end -->
<!-- Form end -->


<?php

include 'db_connection.php';

    if (isset($_POST["submit"]))
    {
        $username =mysqli_real_escape_string($connection, $_POST["name"]);
        $email = mysqli_real_escape_string($connection, $_POST["email"]);
        $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
        $job = mysqli_real_escape_string($connection, $_POST["job"]);
        $password = mysqli_real_escape_string($connection, $_POST["password"]);
        $cpassword = mysqli_real_escape_string($connection, $_POST["cpassword"]);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $email_query = " select * from register where email='$email' ";
        $query = mysqli_query($connection, $email_query);


        $emailcount = mysqli_num_rows($query);

        if($emailcount>0)
        {
            ?>
                <script>
                alert("Email already exists!");
                </script>
            <?php
        }
        else
        {
            if($password === $cpassword)
            {
                $insertquery = "insert into register ( username, email, phone, job, password, cpassword) 
                                    values ('$username','$email','$phone','$job','$pass','$cpass') ";

                $iquery = mysqli_query($connection,$insertquery);

                if($iquery)
                {
                    ?>
                        <script>
                        alert("Registered sucessfully.");
                        </script>
                    <?php
                }
                else
                {
                    ?>
                        <script>
                        alert("NOT Registered");
                        </script>
                    <?php
                }
            }
            else
            {
                ?>
                        <script>
                        alert("Password isn't matching.");
                        </script>
                    <?php
            }
        }
    }

?>   


<style type="text/css">
	.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

body::-webkit-scrollbar{
    display: none;
  }
</style>


</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>


