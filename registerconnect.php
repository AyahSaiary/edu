<?php
              $dsn = 'mysql:host=localhost;dbname=signup'; //Data source name
              $user = 'root'; //the user to connect
              $pass = '';
              try {
                $conn = new PDO($dsn, $user, $pass); //Start a new connection with PDO class
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec("SET CHARACTER SET UTF8");
              //  echo "done";
              }
              catch(PDOException $e) {
                echo 'Failed to connect' . $e->getMessage();
              }
							$username = $_POST['username'];
							$email = $_POST['email'];
							$pass = $_POST['password'];
							$phone = $_POST['phone'];

              $conn5= mysqli_connect('localhost','root','','signup');
              $stmt5 = $conn5->prepare("SELECT * FROM users");
              $ssql5="SET CHARACTER SET UTF8";
              mysqli_query($conn5,$ssql5);
              $data=mysqli_query($conn5,"SELECT * FROM users where username = '$username' ");
              $user=mysqli_fetch_array($data);
							$data2=mysqli_query($conn5,"SELECT * FROM users where email = '$email' ");
              $user2=mysqli_fetch_array($data2);
							$data3=mysqli_query($conn5,"SELECT * FROM users where phone = '$phone' ");
              $user3=mysqli_fetch_array($data3);

  if($user['username'] == $username || $user2['email'] == $email || $user3['phone'] == $phone){
                        echo '<script type="text/javascript">';
                        echo 'alert("You have entered already existing data");';
                        echo 'window.location.href = "register.php";';
                        echo '</script>';
                } else {
											$query=$conn->prepare("INSERT INTO users (username,email,password,phone)VALUES(?,?,?,?)");
											$query->execute(array($username, $email, $pass, $phone));

											echo '<script type="text/javascript">';
											echo 'alert("You are Welcome in our Educational Website");';
											echo 'window.location.href = "login.php";';
											echo '</script>';
											}
///////////////////////////////////////////////////////////
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';


?>
