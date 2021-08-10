<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    input[type='text'],
    input[type='password'],
    input {
      border-radius: 12px;

    }

    .signuplink {
      text-decoration: none;
    }
  </style>
</head>

<body class="text-center">
  <h2>Login Form</h2>
  <div class="d-flex justify-content-center">
    <form action="include/login.inc.php" method="post" class="w-50">
      <div class="alert alert-warning text-info">
        Invalid Username/Password
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control username" placeholder="Enter Your Username" name="username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control password" placeholder="Enter Your Password" name="password">
      </div>

      <div class="form-group">
        <input type="submit" name="login" value="Login" class="btn btn-primary login">
        <p>Don't have an <a href="signup.php" class="signuplink">Account?</a></p>
      </div>
    </form>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>