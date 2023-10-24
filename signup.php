<?php
    include("connection.php");
    ?>
<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz Master|Login & Signup Form</title>
    <link rel="stylesheet" href="singup.css" />
    <script src="valid.js"></script>
  </head>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Login & Signup Form</title>-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form onsubmit="return validate()" 
        action="logs.php" method="POST">
          <input id="username" type="text" placeholder="Full name" name="username"  />
          <input id="email" type="text" placeholder="Email address" name="email" />
          <input id="password" type="password" placeholder="Password" name="password" />
          <label id="inval" style="color: rgba(211, 40, 40, 0.852); font-family:poppins;font-size: 15px; visibility: hidden;"><b>Invalid</b></label>
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <p id="error" hidden></p>

          <input type="submit" value="Signup" />
        </form>
      </div>

      <div class="form login" >
        <header>Login</header>
        <form action="login.php" method="POST" >
          <input id="email" type="text" placeholder="Email address" name="username" required />
          <input id="password" type="password" placeholder="Password" name="password" required />
          <!-- <a href="#">Forgot password?</a> -->
          <p id="error" hidden></p>
          <input type="submit" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>

