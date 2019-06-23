<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
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
    input[type='file']{
      padding: 5px;
      margin-top: 5px;
      width: 20px;
      border-radius: 5px;
    }
</style>
</head>
<body>
  <div class="form">
  <h1>Registration</h1>
  <form name="registration" action="registerconnect.php" method="post" enctype="multipart/form-data">
  <input type="text" id="d1" name="username" placeholder="Username" required />
  <input type="email" id="d2" name="email" placeholder="Email" required />
  <input type="password" id="d3" name="password" placeholder="Password" required />
  <input type="text" id="d4" name="phone" placeholder="phone" required />
	
  <input type="submit" name="submit" value="Register" />
  </form>
  </div>
</body>
</html>
<?php
// Include the database configuration file
include 'dbConfig.php';


 ?>
