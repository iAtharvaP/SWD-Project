<?php 
  session_start();
  require_once('dbconfig/config.php');
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet"  href="css/style.css">
</head>

<body>
	<div class="imgcontainer">
				<img src="imgs/bg.jpg" alt="Avatar" class="center"  width="500">
			</div>
<div class="box">
	<h2>LOGIN</h2>
	
	<form class="myform" action="Index.php" method="post">
		<div class="inputBox">
	          <input type="text" name="username" required="">
	          <label>User ID</label>
	      </div>

<div class="inputBox">
	          <input type="password" name="password" required="">
	          <label>Password</label>
	      </div>

 <input type="submit" name="login" required="">	  


	 </form>

	<?php


			if(isset($_POST['login']))
			{

				
				@$username=$_POST['username'];
				@$password=$_POST['password'];

				
				$query ="select * from user WHERE username='$username' and password='$password' ";
				
				$query_run = mysqli_query($con,$query);
				

                


				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
						
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					$_SESSION['flag'] = $flag;
					++$flag;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("You are not Registered for this Mess!")</script>';
				}
			}
			else
			{
			}
		?>

   </div>
 </body>
</html>