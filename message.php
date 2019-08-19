
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Messages</title>
	<link rel="icon" href="images/hungry.jpg" type="image/jpg">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body >

	<div class="container">
		<div class="msg">
				<?php 
				$conn = new mysqli('localhost','root','','hungry');

				$data = $conn -> query("SELECT * FROM nahid");


				while($go = $data-> fetch_assoc()){



					if(empty($go['food5']) && empty($go['food4']) && empty($go['food3']) && empty($go['food2']) ){

						echo $go['r_time']."<br>";
						echo $go['rider']."<br>";
						echo "<br>";	
						echo $go['restaurant']."<br>";
						echo $go['food1']."<br>";
						echo $go['location']."<br>";
						echo $go['phone']."<br>";

						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<hr>";


					}elseif(empty($go['food5']) && empty($go['food4']) && empty($go['food3']) ){

						echo $go['r_time']."<br>";
						echo $go['rider']."<br>";
						echo "<br>";
						echo $go['restaurant']."<br>";
						echo $go['food1']."<br>";
						echo $go['food2']."<br>";
						echo $go['location']."<br>";
						echo $go['phone']."<br>";

						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<hr>";


					}
					elseif(empty($go['food5']) && empty($go['food4'])  ){

						echo $go['r_time']."<br>";
						echo $go['rider']."<br>";
						echo "<br>";
						echo $go['restaurant']."<br>";
						echo $go['food1']."<br>";
						echo $go['food2']."<br>";
						echo $go['food3']."<br>";
						echo $go['location']."<br>";
						echo $go['phone']."<br>";

						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<hr>";


					}elseif(empty($go['food5'])  ){

						echo $go['r_time']."<br>";
						echo $go['rider']."<br>";
						echo "<br>";
						echo $go['restaurant']."<br>";
						echo $go['food1']."<br>";
						echo $go['food2']."<br>";
						echo $go['food3']."<br>";
						echo $go['food4']."<br>";
						echo $go['location']."<br>";
						echo $go['phone']."<br>";

						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<hr>";


					}
					else{

						echo $go['r_time']."<br>";
						echo $go['rider']."<br>";
						echo "<br>";
						echo $go['restaurant']."<br>";
						echo $go['food1']."<br>";
						echo $go['food2']."<br>";
						echo $go['food3']."<br>";
						echo $go['food4']."<br>";
						echo $go['food5']."<br>";
						echo $go['location']."<br>";
						echo $go['phone']."<br>";

						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<hr>";


					}

						

					
					}
				



				?>
			</div>
	</div>
	







	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>