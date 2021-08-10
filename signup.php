<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css?">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Sign Up PHP</title>
  <style>
    input[type="text"],
    input[type="password"],
    input[type="email"] {
      text-align: center;
      border-radius: 24px;
    }

    .signupForm {
      width: 400px;
      border: 1px solid grey;
      padding: 3.8rem;
      border-radius: 7px;
      box-shadow: -5px 5px 20px 2px grey;
    }
  </style>
</head>
<header class="header">
  <div class="header1">
    <div class="Htext">
      <a href="">
        <p class="email"><span>Email:</span> info@contruc.com</p>
      </a>
      <a href="">
        <p class="hotline"><span>Hotline:</span> +2348012345678</p>
      </a>
    </div>
    <div class="Hbuttons">
      <a href="signup.php"><button class="Hbutton sign">Signup</button></a>
      <a href="login.php"><button class="Hbutton login">Login</button></a>
    </div>
  </div>
  <div class="header2">
    <div class="backgroundLogo">
      <div class="logo">
        <p class="logo1">IT-<span>Alumni</span< /p>
            <p class="logo2">University of Benin</p>
      </div>
    </div>
  </div>
</header>

<body class="text-center">
  <h2>Sign-Up PHP</h2>
  <br><br>

  <div class="d-flex justify-content-center ">
    <form class="signupForm" action="include/signup.inc.php" method="post">

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Enter Email" required class="form-control" name="email">
      </div>

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" placeholder="Username" required class="form-control" name="username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" required class="form-control password" name="password">
      </div>

      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" required class="form-control cpassword" name="cpassword">
      </div>

      <div class=" cpasswordAlert">

      </div>

      <div class="form-group mt-3">
        <input class="btn btn-info signup" type="submit" value="Sign-Up" name="signup">
      </div>
      <p><a href="login.php">Already have an account?</a></p>

    </form>
  </div>

  <all>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        // $(".cpasswordAlert").hide();
        $(".signupForm").submit(function(e) {

          var password = $(".password").val();
          var cpassword = $(".cpassword").val();
          if (password !== cpassword) {
            e.preventDefault();
            $(".cpasswordAlert").addClass("alert");
            $(".cpasswordAlert").addClass("alert-warning");
            // $(".cpasswordAlert").show();
            $(".cpasswordAlert").html("Password Does Not Match!<br><strong> re-type password</strong>");

            $(".password").val("");
            $(".cpassword").val("");

          } else {

          }
        });
      });
    </script>
  </all>
</body>
<footer>
  <div class="footer1">
    <div class="fdiv1">
      <div class="backgroundLogo">
        <div class="logo logoF">
          <p class="logo1">IT-<span class="logo1F">Alumni</span< /p>
              <p class="logo2 logo2F">University of Benin</p>
        </div>
      </div>
      <div class="text">
        <p>We are happy to be united in this way, we are the best of our set; alumni2021. You can contact us via the links below.</p>
      </div>
      <div class="footerLogoLinks">
        <a href="" class="fLogoLink ">Phone: +8745 44 5444</a>
        <a href="" class="fLogoLink ">Fax: +88474 156 362</a>
        <a href="" class="fLogoLink ">Email: demoemail@demo.com</a>
      </div>
    </div>
    <div class="fdiv2">
      <div class="footerheadings">
        <h4>Get In Touch</h4>
      </div>
      <div class="text">
        <p>You can send us your email to get the latest updates about</p>
      </div>
      <div class="sendEmail">
        <input type="email" placeholder="Enter Your Email" class="emailinput">
        <div class="emailogo"></div>
      </div>
      <div class="socialMedia">

      </div>
    </div>
    <div class="fdiv3">
      <div class="footerheadings">
        <h4>Usefull Link</h4>
      </div>
      <div class="usefullinks">
        <div class="usefullink">
          <a href="">
            <p><span class="angle">></span>Pricing Plan</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Popular Deal</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Support</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Categories</p>
          </a>
          <a href="">
            <p><span class="angle">></span>FAQ</p>
          </a>
        </div>
        <div class="usefullink">
          <a href="">
            <p><span class="angle">></span>Categories</p>
          </a>
          <a href="">
            <p><span class="angle">></span>FAQ</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Pricing Plan</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Popular Deal</p>
          </a>
          <a href="">
            <p><span class="angle">></span>Support</p>
          </a>
        </div>
      </div>
    </div>
    <div class="fdiv4">
      <div class="footerheadings">
        <h4>University</h4>
      </div>
      <div class="usefullink">
        <a href="">
          <p><span class="angle">></span>Pricing Plan</p>
        </a>
        <a href="">
          <p><span class="angle">></span>Categories</p>
        </a>
        <a href="">
          <p><span class="angle">></span>Popular Deal</p>
        </a>
        <a href="">
          <p><span class="angle">></span>FAQ</p>
        </a>
        <a href="">
          <p><span class="angle">></span>Support</p>
        </a>
      </div>
    </div>
  </div>

  <div class="footer2">
    <p class="copy">&copy 2021 Alumni, All Rights Reserved.</p>
  </div>

</footer>

</html>