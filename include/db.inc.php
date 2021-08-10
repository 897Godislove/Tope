<?php
  $servername="localhost";
  $serverusername="root";
  $serverpassword="";
  $dbname="tope";
  $connection=mysqli_connect($servername, $serverusername, $serverpassword, $dbname);
  if (!$connection) {
    die ("Error in Connection" .mysqli_connect_error());
  }

?>