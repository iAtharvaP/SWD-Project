<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Home Page</title>
<link rel="stylesheet" href="css/style2.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
  <body>

    <nav class="navbar sticky-top navbar-dark bg-dark " >
      <div  class="navbar-header">
| MESS |                                                          
    </div>
</nav>
    <div class="jumbotron" align=center>
    
   
<nav class="navbar  navbar-right sticky-bottom " style="background-color: #e3f2fd;">
    <ul id="lol" class="nav navbar-nav navbar-right" align=right>



     Bits Pilani Hyderbad Campus

     <h3>
     	Welcome <?php echo $_SESSION['username'];?>
     </h3>

 </ul>
  </nav>

  <?php

 $sql = "SELECT flag, username, password from logindb2";
 $result = $con-> query($sql);

 if($result-> num_rows > 0)
 {
 	while($row = $result-> fetch_assoc())
 	{
 		echo "<tr><td>".$row["flag"]. "</td><td>". $row["username"]. "</td><td>". $row["password"]. "</td></tr>";
 	}
 	echo "</table>";
 }
 else
 {
 	echo "Database not found";
 }

?>

<form class="myform" action="homepage.php" method="post">
	<a href="Billing.php">
	<input type="submit" name="Bill" id="bill_btn" value="Generate Dues"/><br>
</a>
</form>




<form class="myform" action="homepage.php" method="post">
	<input type="submit" name="Logout" id="logout_btn" value="Log Out"/><br>
</form>



<?php
if (isset($_POST['logout']))
 {
session_destroy();
header('location:index.php')
?>

</div>

  <script src="myscript.js">

  </script>
  </body>
</html>
