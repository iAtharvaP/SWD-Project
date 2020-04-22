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

	<?php


 SELECT count(*) AS Total_duplicate_count
FROM
(SELECT username FROM logindb2
GROUP BY username HAVING COUNT(username) > 1
)AS x
echo "The number of times the student has visited the mess";
echo x;
			
		?>

   </div>
 </body>
</html>