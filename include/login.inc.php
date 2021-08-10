<?php
  require 'db.inc.php';
  session_start();
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripslashes($username);
    $username = mysqli_real_escape_string($connection, $username);

    $password = stripslashes($password);
    $password = mysqli_real_escape_string($connection, $password);
    $password = md5($password);

    $query="SELECT * FROM itapp WHERE username='$username' AND password='$password'";
    $result=mysqli_query($connection, $query);
    if (!$result) {
      die ("Error in Query!" .mysqli_error());
    }
    $verification=mysqli_num_rows($result);


    if ($verification == 1) {
      $_SESSION['username'] = $username;
      header("location: ../dashboard.php");
    } else {
      header("location:../logininvalid.php");
    }

  }


?>