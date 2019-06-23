<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
			body {
		     font-family:Arial, Sans-Serif;
		}

			.clearfix:before, .clearfix:after{
		     content: "";
		     display: table;
		}
		.clearfix:after{
		     clear: both;
		}
		a{
		     color:#0067ab;
		     text-decoration:none;
		     }
		a:hover{
		     text-decoration:underline;
		}
		.form{

		     width: 300px;
		     margin: 120px auto;
		}
		input[type='text'], input[type='email'],
		input[type='password'] {
		     width: 250px;
		     border-radius: 2px;
		     border: 1px solid #CCC;
		     padding: 10px;
		     color: #333;
		     font-size: 14px;
		     margin-top: 10px;
		}
		input[type='submit']{
		     padding: 10px 25px 8px;
		     color: #fff;
		     background-color: #0067ab;
		     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
		     font-size: 16px;
		     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
		     border: 1px solid #0164a5;
		     border-radius: 2px;
		     margin-top: 20px;
		     cursor:pointer;
		}
		input[type='submit']:hover {
		     background-color: #024978;
		}

	</style>

</head>
<body>

		<?php
		require('db.php');
		// server should keep session data for AT LEAST 1 hour
		ini_set('session.gc_maxlifetime', 60);

		// each client should remember their session id for EXACTLY 1 hour
		session_set_cookie_params(60);
		 session_start();//at the very top of the page
		// If form submitted, insert values into the database.
		if (isset($_POST['username'])){
		        // removes backslashes
			$username = stripslashes($_REQUEST['username']);
		        //escapes special characters in a string
			$username = mysqli_real_escape_string($con,$username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			//Checking is user existing in the database or not
		        $query = "SELECT * FROM `users` WHERE username='".$username."'
		and password='".($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
		        if($rows==1){
			    $_SESSION['username'] = $username;
					$_SESSION['authenticated']=true;
		            // Redirect user to index.php
			    header("Location: courses.php");
		         }else{
			echo "<div class='form'>
		<h3>Username/password is incorrect.</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
			}
		    }else{
		?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
