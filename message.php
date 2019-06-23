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
$stmt2 = $conn2->prepare("SELECT*FROM contacts");
$ssql2="SET CHARACTER SET UTF8";
mysqli_query($conn2,$ssql2);
$data2=mysqli_query($conn2,"SELECT * FROM contacts ");
*/
$f = $_POST['fname'];
$l = $_POST['lname'];
$email = $_POST['email'];
$su = $_POST['subject'];
$m= $_POST['message'];

  $query=$conn->prepare("INSERT INTO contacts (fname,lname,email,subject,message)VALUES(?,?,?,?,?)" );
  $query->execute(array($f,$l,$email,$su,$m));

$_SESSION['authenticated']=true;
                    echo '<script type="text/javascript">';
                    echo 'alert("Thank you the Message has sent");';
                    echo 'window.location.href = "contact.php";';
                    echo '</script>';

?>
