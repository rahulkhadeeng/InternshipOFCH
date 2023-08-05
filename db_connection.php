<?php
    
  $server = "localhost";
  $user = "root";
  $password = "";
  $database = "payroll_db";


  $connection = mysqli_connect($server,$user,$password, $database);

  // for no connection it will alert..
  if(!$connection)
  {
      ?>
       <script>
      alert("No Connection");
       </script>
      <?php
  }
?>