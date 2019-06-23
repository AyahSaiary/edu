<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 60);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(60);
 session_start();//at the very top of the page
  //connect to Database
  $username = $_POST['user'];
  $password = $_POST['password-field'];

    if (isset($_POST['btn'] ) && $username != "" && $password!=""){
      $username = $_POST['user'];
      $password = $_POST['password-field'];

  $conn= mysqli_connect('localhost','root','','webapplication');
  $stmt = $conn->prepare("SELECT*FROM users");
  $ssql="SET CHARACTER SET UTF8";
   mysqli_query($conn,$ssql);

    $result = mysqli_query ($conn,"SELECT * FROM users WHERE username = '$username'");
    $row=mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
      echo '<script type="text/javascript">';
          echo '</script>';
          $_SESSION['authenticated']=true;

      if($row['username'] =="user"&& $row['password'] =="12345")
      {

        echo '<script type="text/javascript">';
        echo 'window.location.href = "home.php";';
        echo '</script>';
      }
      else{

        echo '<script type="text/javascript">';
        echo 'window.location.href = "hind.php";';
        echo '</script>';

      }
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("Failed to Login !");';
      echo 'window.location.href = "../index.php";';
      echo '</script>';
    }
  }  else {
      echo '<script type="text/javascript">';
      echo 'alert("User Name And Password Cannot be left empty");';
      echo 'window.location.href = "../index.php";';
      echo '</script>';

}
?>
