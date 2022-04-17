<!DOCTYPE html>
<html>

<?php
session_start();

if (!isset($_SESSION['x']))
    header("location:home.php");
$conn = mysqli_connect("localhost", "root", "", "cr_system");

if (!$conn) {
    die("could not connect" . mysqli_error());
}

$u_id = $_SESSION['u_id'];

$result1 = mysqli_query($conn, "SELECT u_name FROM user where u_id='$u_id' ");
$q2 = mysqli_fetch_assoc($result1);
$u_name = $q2['u_name'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRS Project</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="userhome.css">
</head>

<body>


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
                <li class="active nav-items"><a href="userhome.php">Home</a></li>
            </ul>
            <ul style="padding-right: 15px " id="navb" class="nav navbar-nav navbar-right">
                <li><a href="complainer_page.php" class="nav-items role=" button" aria-pressed="true"><b>New Complain</b></a></li>
                <li><a href="complainer_complain_history.php" class="nav-items" role="button" aria-pressed="true"><b>Complaint History</b></a></li>
                <li><a style="text-transform: capitalize;" class="nav-items" href="user_profile.php"><i class="glyphicon glyphicon-user"></i> <?php echo "$u_name" ?></a></li>
                <li><a href="logout.php" class="nav-items">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR_end -->


    <!-- MAIN BODY_start -->
    <div id="cback">
        <div id="container">
            <div id="cup">
                <h2>Hello,&nbsp; <a style="text-transform: capitalize; letter-spacing:2px" href="user_profile.php">
                        <strong><?php echo "$u_name" ?></strong></a>
                </h2>
                <h1>Raise Your Voice</h1>
                <p style="text-transform: capitalize;">
                    The portal to file complaint for a crime by the government.
                </p>
                <br>
                <div id="ctag" style="display: flex; align-items:center">
                    <button type="button" style=" font-weight:bolder" class="btn btn-danger btn-lg">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                        Alert
                    </button>
                    <a id="cta" href="complainer_page.php">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;
                        New Complain &nbsp;&nbsp;
                        <i id="go" class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </a>

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
                            <input aria-required="true" type="email" class="form-control" id="email" name="email" value=<?php echo "$u_id" ?>>
                        </div>
                        <div class="cu" class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><i class="fa fa-comment" aria-hidden="true"></i>Message</label>
                            <textarea aria-required="true" class="form-control" id="message" placeholder="Type Here..." rows="7" id="message" required name="message"></textarea><br>
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


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
</body>

</html>