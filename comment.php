<?php
session_start();
              $dsn = 'mysql:host=localhost;dbname=signup'; //Data source name
              $user = 'root'; //the user to connect
              $pass = '';
              try {
                $conn = new PDO($dsn, $user, $pass); //Start a new connection with PDO class
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "done";
              }
              catch(PDOException $e) {
                echo 'Failed to connect' . $e->getMessage();
              }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//$mno = $_POST['fname'];

/*Instructions if $_POST['value'] exist

$conn2= mysqli_connect('localhost','root','','signup');
$stmt2 = $conn2->prepare("SELECT*FROM comments");
$ssql2="SET CHARACTER SET UTF8";
mysqli_query($conn2,$ssql2);
$data2=mysqli_query($conn2,"SELECT * FROM comments ");
*/
$n = $_POST['name'];
$m= $_POST['message'];
$d=date("Y/m/d");
$t=date("h:i:sa");
  $query=$conn->prepare("INSERT INTO comments (name,comment,date,time)VALUES(?,?,?,?)" );
  $query->execute(array($n, $m,$d,$t));

$_SESSION['authenticated']=true;
                    echo '<script type="text/javascript">';
                    echo 'alert("Thank you For using Our Website");';
                    echo 'window.location.href = "pdata.php";';
                    echo '</script>';

?>
