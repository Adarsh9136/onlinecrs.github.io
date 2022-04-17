<!DOCTYPE html>
<html>


<?php


if (isset($_POST['s'])) {
  session_start();
  $_SESSION['x'] = 1;
  $conn = mysqli_connect("localhost", "root", "", "cr_system");
  if (!$conn) {
    die("could not connect" . mysqli_error());
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['email'];
    $pass = $_POST['password'];
    $u_id = $_POST['email'];
    $_SESSION['u_id'] = $u_id;
    $result = mysqli_query($conn, "SELECT u_id,u_pass FROM user where u_id='$name' and u_pass='$pass' ");




    if (!$result || mysqli_num_rows($result) == 0) {
      $message = "Id or Password not Matched.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
      header("location:userhome.php");
    }
  }
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRS Project</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="complainer_page.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <style>
    body {
      color: white;
      background-color: black;
      /*background-image: url(back.jpg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;*/
    }

    body::-webkit-scrollbar {
      display: none;
    }

    body,
    html {
      /* width: 100%;*/

      font-family: "Lato";

      scroll-behavior: smooth;
    }

    h1 {
      font-weight: 700;
      font-size: 4em;
      word-spacing: 10px;
      text-transform: uppercase;
    }

    p {
      word-spacing: 2px;
    }

    #cback {
      background-size: cover;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(b.jpg);
      background-position: center;
      background-repeat: no-repeat;
      height: 100%;
    }

    #container {
      /*background-color: white;
      color: black;*/
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0% 8%;
      padding: 6%;
      height: 100vh;

    }

    hr {
      display: none;
    }

    @media only screen and (max-width: 768px) {
      #container {
        flex-direction: column;
        text-align: center;
        height: 100%;
      }

      #ctag {
        justify-content: center;
      }

      #fc {
        flex-direction: column-reverse;
        align-items: center;
      }

      hr {
        display: block;
        width: 60%;
        border-bottom: 2px solid black;
      }

      #ctag {
        flex-direction: column;
      }

      #cup {
        margin: 20vh 0vh 20vh;
      }
    }

    #go {
      display: none;

    }

    #cta:hover #go {
      display: inline;
    }

    #cta {
      margin: 23px;
      font-size: 20px;
      text-decoration: none;
      color: white;
      font-weight: bolder;
    }

    .content {
      padding-top: 25%;
      /*text-align: center;*/
      text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4),
        0px 8px 13px rgba(0, 0, 0, 0.1),
        0px 18px 23px rgba(0, 0, 0, 0.1);
    }

    #navb li a:hover {
      background-color: rgb(230, 230, 230);
      color: black;
    }

    #navbar {
      font-weight: bold;
    }



    #loginf {
      padding: 30px;
      /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  box-shadow: 0px 0px 5px #fff;*/
      color: white;
      background-color: rgba(0, 0, 0, 0.4);
    }

    #foot {
      /* background-color: rgb(230, 230, 230);*/
      color: black;
      background-image: url(Footerback.jpg);
      background-position: center;
      background-size: cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-top: 23px;
      opacity: .9;

    }

    .navbar {
      padding-left: 15px;
      padding-right: 15px;
      margin: 0;
    }

    #ficon {
      padding: 12px;
    }

    #ficon a {
      font-size: 30px;
      padding: 0px 4px;
      opacity: .6;
      transition: opacity .2s;
    }

    #ficon a:hover {
      opacity: 1;
      border-bottom: 3px solid black;
    }

    #fcr {
      font-size: 19px;
      background-color: black;
      font-weight: bolder;
      color: white;
      width: 100%;
      text-align: center;
      opacity: .8;
      padding: 6px;
      margin-top: 6px;
    }

    #fc {
      display: flex;
      justify-content: space-evenly;
      width: 100%;
      padding: 23px 0px 23px;
    }

    .nav-items {
      font-size: 16px;
    }

    #stick {
      list-style: none;
      font-size: 22px;
      position: fixed;
      bottom: 5%;
      right: 0px;
      text-align: right;

      margin: 0px;
      padding: 0px;
    }

    #stick li {
      margin: 8px 0px;
      text-align: center;
      background-color: rgb(230, 230, 230);
      padding: 6px 10px;
      transition: font-size .3s;
      border-radius: 5px 0px 0px 5px;
      color: black;
    }

    #stick li:hover {
      font-size: 30px;
      background-color: white;
    }

    #helpi {
      animation-name: wobble;
      animation-duration: .5s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }

    h3 {
      font-weight: bolder;
      text-transform: uppercase;
      padding-bottom: 20px;
      margin: 0px;
    }

    h4 {
      font-weight: bold;
    }

    address {
      margin: 0px;
    }

    label.form-label {
      margin: 10px 0px;
      font-size: 18px;
      font-weight: normal;
    }

    #card {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 4% 2%;
      align-items: center;
    }

    .cu {
      text-align: left;
    }

    #exampleFormControlTextarea1 {
      resize: none;
    }

    #exampleFormControlTextarea1::-webkit-scrollbar {
      display: none;
    }

    @keyframes wobble {
      0% {
        transform: rotate(10deg);
      }

      25% {
        transform: rotate(-10deg);
      }

      50% {
        transform: rotate(10deg);
      }

      75% {
        transform: rotate(-10deg);
      }

      100% {
        transform: rotate(10deg);
      }
    }
  </style>
</head>

<body style="color: white;background-image: url(blue.jpg);background-size: 100%;background-repeat: no-repeat;back">


  <!-- NAVBAR_start -->
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="userhome.php"><img src="logo.svg" alt="" width="30" height="30"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="nav-items"><a href="index.html">Home</a></li>
        <li class="active nav-items"><a href="#">Login</a></li>
      </ul>
      <ul style="padding-right: 15px " id="navb" class="nav navbar-nav navbar-right">
        <li><a href="registrationform.php" class="nav-items" role="button" aria-pressed="true"><b>Register</b></a></li>
      </ul>
    </div>
  </nav>
  <!-- NAVBAR_end -->


  <!-- MAIN BODY_start -->
  <div class="video">
    <div class="center-container">
      <div class="bg-agile">
        <div class="login-form">

          <h2 style="margin-bottom: 6px;">Login</h2>
          <form id="loginf" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><i class="fa fa-envelope" aria-hidden="true"></i>
                Email</label>
              <input aria-required="true" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" size="5" placeholder="Enter Email id" required name="email" onfocusout="f1()">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div><br>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"><i class="fa fa-key" aria-hidden="true"></i>
                Password</label>
              <input aria-required="true" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password" onfocusout="f1()">
            </div>
            <div class="mb-3 form-check">
              <br><input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remeber me</label>
            </div><br>
            <button type="submit" class="btn btn-primary" name="s" onclick="f1()"><i class="fa fa-lock" aria-hidden="true"></i>
              Login</button><a href="registrationform.php">Don't have an account?</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- MAIN BODY_end -->


  <!-- FOOTER_start -->
  <footer>

    <div id="foot">
      <div id="ficon">
        <a href="https://www.facebook.com/DelhiPoliceOfficial"><i style="color: darkblue;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/delhi.police_official"><i style="color: red;" class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/delhi-police"><i style="color: black;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="https://twitter.com/DelhiPolice"><i style="color: darkblue;" class="fa fa-twitter-square" aria-hidden="true"></i>
        </a>
        <hr>
      </div>

      <div id="fc">
        <div>
          <h3 style="text-align: center;">Post At</h3>
          <h4><i class="fa fa-building" aria-hidden="true"></i>
            Headoffice 1</h4>
          <h5><i class="fa fa-map-marker" aria-hidden="true"></i>
            Address:</h5>
          <Address>
            MSO Building, Indraprashta Marg, IP Estate, New Delhi, Delhi 110095
          </Address>
          <h5><i class="fa fa-phone" aria-hidden="true"></i>
            Phone:</h5>
          <p style="margin-bottom:22px">+91-9818 099 087</p>
          <h4><i class="fa fa-building" aria-hidden="true"></i>
            Headoffice 2</h4>
          <h5><i class="fa fa-map-marker" aria-hidden="true"></i>
            Address:</h5>
          <Address>
            174, Ahir Mohalla, Nangloi, New Delhi - 110041
          </Address>
          <h5><i class="fa fa-phone" aria-hidden="true"></i>
            Phone:</h5>
          <p>+91-8287 XXX 848</p>
          <h4 style="display: inline-block;"><i class="fa fa-envelope" aria-hidden="true"></i>
            E-mail: &nbsp;</h4><span>dcp-crime-dl@nic.in</span>
        </div>
        <hr style="margin: 32px 0px;">
        <div style="width: 40vh; text-align:center">
          <h3 style="text-align:center">Feedback</h3>
          <form method="post">
            <div class="cu" class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><i class="fa fa-envelope" aria-hidden="true"></i>Email address</label>
              <input aria-required="true" type="email" class="form-control" id="email" name="email" placeholder="Your Email">
            </div>
            <div class="cu" class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><i class="fa fa-comment" aria-hidden="true"></i>Message</label>
              <textarea aria-required="true" class="form-control" id="message" placeholder="Type Here..." rows="7" id="message" required name="message"></textarea><br>
            </div>
            <button type="submit" class="btn btn-primary" name="b">Submit</button>
          </form>

          <?php
          if (isset($_POST['b'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $email = $_POST['email'];
              $message = $_POST['message'];

              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "cr_system";

              $conn = mysqli_connect($servername, $username, $password, $database);

              $sql = "INSERT INTO `feedback` (`email`,`message`) VALUES ('$email','$message')";
              mysqli_query($conn, $sql);
            }
          }

          ?>
        </div>
      </div>

      <div id="fcr">
        Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2021
      </div>
    </div>

  </footer>
  <!-- FOOTER_end -->


  <!-- STICKY LIST_start -->
  <ul id="stick">
    <li><a href="chatbot.html" id="chat"><i id="chati" class="fa fa-commenting" aria-hidden="true"></i></a></li>
    <li><a href="#" id="help"><i id="helpi" class="fa fa-info" aria-hidden="true"></i></a></li>
  </ul>
  <!-- STICKY LIST_end -->

  <script>
    function f1() {
      var sta2 = document.getElementById("exampleInputEmail1").value;
      var sta3 = document.getElementById("exampleInputPassword1").value;
      var x2 = sta2.indexOf(' ');
      var x3 = sta3.indexOf(' ');
      if (sta2 != "" && x2 >= 0) {
        document.getElementById("exampleInputEmail1").value = "";
        document.getElementById("exampleInputEmail1").focus();
        alert("Space Not Allowed");
      } else if (sta3 != "" && x3 >= 0) {
        document.getElementById("exampleInputPassword1").value = "";
        document.getElementById("exampleInputPassword1").focus();
        alert("Space Not Allowed");
      }

    }
  </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
</body>

</html>