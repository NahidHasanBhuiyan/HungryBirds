<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hungry Birds Order</title>
	<link rel="icon" href="images/hungry.jpg" type="image/jpg">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body >


	<div style="background-image: url('images/nana.jpg');">

	<?php 


	$conn = new mysqli('localhost','root','','hungry');


	
			
			date_default_timezone_set('Asia/Dhaka');
			$tym = date('d M Y , h:i:s A');
			
			

	if(isset($_POST['sub'])){
		$rname = $_POST['rname'];
		$food1 = $_POST['food1'];
		$food2 = $_POST['food2'];
		$food3 = $_POST['food3'];
		$food4 = $_POST['food4'];
		$food5 = $_POST['food5'];
		$loc = $_POST['loc'];
		$phone = $_POST['phone'];
		$sel = $_POST['sel'];

		if(empty($rname) || empty($food1) || empty($loc) || empty($phone) ){
				echo "<h1 style='color:red; text-align:center; font-family: jokerman; border: 1px solid black;'>Fill all info first</h1>";
			}else{

		$data = $conn -> query("INSERT INTO nahid(restaurant,food1,food2,food3,food4,food5,location,phone,rider,r_time) VALUES('$rname','$food1','$food2','$food3','$food4','$food5','$loc','$phone','$sel','$tym')");
		}
	}






	?>
	<h1 style="font-family: jokerman; color: #176BEF; text-align: center;">HUNGRY BIRDS</h1>
		<h3 style="color: tomato; text-align: center;">Food To Your Door</h3>
		<hr style="border: 3px solid black; border-radius: 50%;">


	<div class="full" style=" width:100%;">
		<div class="left" style="text-align: left; width: 50%; display:inline-block; color: orange; ">
			<?php 
			echo "<h3>Time </h3>";
			date_default_timezone_set('Asia/Dhaka');
			echo date('h:i:s A');
			
			?>
		</div>	
		<img style="width: 100px; height: 100%; border-radius: 50%; border: 3px solid black;" src="images/hungry.jpg" alt="">
		<div class="right" style="text-align: right; width:50%;  display:inline-block; margin: auto; width:100%; color: orange; ">
			<?php 
			echo "<h3>Date </h3>";
			date_default_timezone_set('Asia/Dhaka');
			
			echo date('d M Y');

			?>
		</div>
	</div>
	
	
		

	
	
	
	
	<hr style="border: 3px solid black; border-radius: 50%;">
	
			

	
	<div class="order alert alert-primary w-50" style="display:block;margin:80px  auto;  " >
		
	<form action="" method="POST">
		<div class="form-group" >
			<label style="color: red; font-weight: bold;">Restaurant Name</label>
			<input type="text" name="rname" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: red; font-weight: bold;">Food-1</label>
			<input type="text" name="food1" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: green; font-weight: bold;">Food-2</label>
			<input type="text" name="food2" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: green; font-weight: bold;">Food-3</label>
			<input type="text" name="food3" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: green; font-weight: bold;">Food-4</label>
			<input type="text" name="food4" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: green; font-weight: bold;">Food-5</label>
			<input type="text" name="food5" class="form-control">
		</div>
		

		<div class="form-group" >
			<label style="color: red; font-weight: bold;">Location</label>
			<input type="text" name="loc" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: red; font-weight: bold;">Phone</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: red; font-weight: bold;">Rider</label>
			<select name="sel" id="">
				<option value="">-select-</option>
				<option value="REYAD">REYAD</option>
				<option value="PIASH">PIASH</option>
				<option value="SOHAG">SOHAG</option>
				<option value="TANVIR">TANVIR</option>
			</select>
		</div>
		
		<div class="form-group" >
			<input type="submit" name="sub" value="Order Now" >
		</div>
		<hr>
		<hr>
			
			<div class="msg">
				<?php 

				if(isset($_POST['sub'])){

					if(empty($food2) && empty($food3) && empty($food4) && empty($food5)){
						echo "$rname <br>";
						echo "$food1 <br>";
						echo "$loc <br>";
						echo "$phone <br>";
					}elseif(empty($food3) && empty($food4) && empty($food5)){
						echo "$rname <br>";
						echo "$food1 <br>";
						echo "$food2 <br>";
						echo "$loc <br>";
						echo "$phone <br>";
					}elseif(empty($food4) && empty($food5)){
						echo "$rname <br>";
						echo "$food1 <br>";
						echo "$food2 <br>";
						echo "$food3 <br>";
						echo "$loc <br>";
						echo "$phone <br>";
					}
					elseif(empty($food5)){
						echo "$rname <br>";
						echo "$food1 <br>";
						echo "$food2 <br>";
						echo "$food3 <br>";
						echo "$food4 <br>";
						echo "$loc <br>";
						echo "$phone <br>";
					}else{
						echo "$rname <br>";
				echo "$food1 <br>";
				echo "$food2 <br>";
				echo "$food3 <br>";
				echo "$food4 <br>";
				echo "$food5 <br>";
				echo "$loc <br>";
				echo "$phone <br>";
					}
				
			}





				?>
			</div>
			
			

	</form>
	<hr>
	<hr>
	<hr>
	<a href="order1.php" target="_blank">Take Another Order Here</a>
	<hr>
	<hr>
	<a href="message.php" target="_blank">See Previous Message</a>
	</div>

	</div>
	<hr style="border: 3px solid black; border-radius: 50%;">
	<h5>Powered By N@hid</h5>
	<hr style="border: 3px solid black; border-radius: 50%;">
	







	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>