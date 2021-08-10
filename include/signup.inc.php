<?php 
  include 'db.inc.php';
  if (isset($_POST['username'])) {
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password = $_POST['password'];

    $email=stripslashes($email);
    $email=mysqli_real_escape_string($connection, $email);

    $username = stripslashes($username);
    $username = mysqli_real_escape_string($connection, $username);

    $password = stripslashes($password);
    $password = mysqli_real_escape_string($connection, $password);
    // This is for hashing Passwords
    $password = md5($password);

    $query = "INSERT INTO itapp(email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die ("Error in Written Query".mysqli_connect_error());
    } else {
      header("location:../signuptologin.php");
    }

  }

?>