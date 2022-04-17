<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRS Project</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="complainer_page.css">

  <?php
if (isset($_POST['s'])) {
  $con = mysqli_connect('localhost', 'root', '', 'cr_system');
  if (!$con) {
    die('could not connect: ' . mysqli_error());
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_name = $_POST['name'];
    $u_id = $_POST['email'];
    $u_pass = $_POST['password'];
    $u_addr = $_POST['adress'];
    $a_no = $_POST['aadhar_number'];
    $gen = $_POST['gender'];
    $mob = $_POST['mobile_number'];
    $reg = "insert into user values('$u_name','$u_id','$u_pass','$u_addr','$a_no','$gen','$mob')";
    $res = mysqli_query($con, $reg);
    if (!$res) {
      $message1 = "User Already Exist";
      echo "<script type='text/javascript'>alert('$message1');</script>";
    } else {
      $message = "User Registered Successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
<script>
    function f1() {
      var sta = document.getElementById("name1").value;
      var sta1 = document.getElementById("email1").value;
      var sta2 = document.getElementById("pass").value;
      var sta3 = document.getElementById("addr").value;
      var sta4 = document.getElementById("aadh").value;
      var sta5 = document.getElementById("mobno").value;

      var x = sta.trim();
      var x1 = sta1.indexOf(' ');
      var x2 = sta2.indexOf(' ');
      var x3 = sta3.trim();
      var x4 = sta4.indexOf(' ');
      var x5 = sta5.indexOf(' ');
      if (sta != "" && x == "") {
        document.getElementById("name1").value = "";
        document.getElementById("name1").focus();
        alert("Space Not Allowed");
      } else if (sta1 != "" && x1 >= 0) {
        document.getElementById("email1").value = "";
        document.getElementById("email1").focus();
        alert("Space Not Allowed");
      } else if (sta2 != "" && x2 >= 0) {
        document.getElementById("pass").value = "";
        document.getElementById("pass").focus();
        alert("Space Not Allowed");
      } else if (sta3 != "" && x3 == "") {
        document.getElementById("addr").value = "";
        document.getElementById("addr").focus();
        alert("Space Not Allowed");
      } else if (sta4 != "" && x4 >= 0) {
        document.getElementById("aadh").value = "";
        document.getElementById("aadh").focus();
        alert("Space Not Allowed");
      } else if (sta5 != "" && x5 >= 0) {
        document.getElementById("mobno").value = "";
        document.getElementById("mobno").focus();
        alert("Space Not Allowed");
      }
    }
  </script>
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

<body style="color: black;background-image: url(bl.jpg);background-size: 100%;background-repeat: no-repeat;back">

  <nav class="navbar navbar-default"">
    <div class=" navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home.php"><img src="logo.svg" alt="" width="30" height="30"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li class="active nav-items"><a href="registrationform.php" class="nav-items role="button" aria-pressed="true"><b>Register</b></a></li>
      </ul>
      <ul style="padding-right: 15px " id="navb" class="nav navbar-nav navbar-right">
      <li><a href="userlogin.php">Login</a></li>

      </ul>

    </div>
  </nav>

 
        <div class="login-form">

          <h1 style="color:skyblue; text-align:center;">New User</h1>
          <h5 style="text-align:center"><a href="userlogin.php">Already have a account?</a></h5>
          <form action="#" method="post">
            <p style="color:#dfdfdf">Full Name</p><input type="text" name="name" required="" id="name1" onfocusout="f1()" />
            <p style="color:#dfdfdf">Aadhar Number</p><input type="text" name="aadhar_number" minlength="12" maxlength="12" required pattern="[123456789][0-9]{11}" id="aadh" onfocusout="f1()" />

            <p style="color:#dfdfdf">Email</p><input type="email" name="email" required="" id="email1" onfocusout="f1()" />
            <p style="color:#dfdfdf">Password</p><input type="text" name="password" placeholder="6 Character minimum" pattern=".{6,}" id="pass" onfocusout="f1()" />
            <p style="color:#dfdfdf">Residence</p><input type="text" name="adress" required="" id="addr" onfocusout="f1()" />
            <div class="left-w3-agile">
              <p style="color:#dfdfdf">Gender</p><select class="form-control" name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>
            <div class="right-agileits">
              <p style="color:#dfdfdf">Mobile</p><input type="text" name="mobile_number" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" id="mobno" onfocusout="f1()" />
            </div>
            <input type="submit" value="Submit" name="s">


          </form>
        </div>

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

          <h4 style="display: inline-block;"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail: &nbsp;</h4><span>dcp-crime-dl@nic.in</span>
        </div>
        <hr style="margin: 32px 0px;">
        <div style="width: 40vh; text-align:center">
          <h3 style="text-align:center">Feedback</h3>

          <form method="post">
            <div class="cu" class="mb-3">
              <label for="exampleFormControlInput1" class="form-label" aria-required="true"><i class="fa fa-envelope" aria-hidden="true"></i>
                Email address</label>
              <input type="email" class="form-control" id="email" required name="email" placeholder="name@gmail.com">
            </div>
            <div class="cu" class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><i class="fa fa-comment" aria-hidden="true"></i>
                Message</label>
              <textarea class="form-control" aria-required="true" id="message" placeholder="Type Here..." rows="7" id="message" required name="message"></textarea><br>
            </div>
            <button type="submit" class="btn btn-primary" name="b">Submit</button>
          </form>

          <?php
                     if(isset($_POST['b'])){
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

      <div id="fcr">Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2021
      </div>
    </div>
  </footer>
  <ul id="stick">
    <li><a href="chatbot.html" id="chat"><i id="chati" class="fa fa-commenting" aria-hidden="true"></i></a></li>
    <li><a href="#" id="help"><i id="helpi" class="fa fa-info" aria-hidden="true"></i></a></li>
  </ul>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
</body>

</html>