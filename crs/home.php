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