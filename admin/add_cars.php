<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add Cars
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Cars</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>

									<label>Car Name</label>
									<input type="text" class="field size1" name="car_name" placeholder="required(max 100words)"required />
								</p>	
								<p>

									<label> Car Type</label>
									<input type="text" class="field size1" name="car_type" placeholder="required(no more than 20 letters)" required />
								</p>
								<p>
									<label>Price</label>
									<input type="text" class="field size1" name="hire_cost" placeholder="required(no more than 20 number)" required />
								</p>
								<p>

									<label>Car Image</label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<label>Seating Capacity</label>
									<input type="text" class="field size1" name="capacity"placeholder="required(only numbers)" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
                            <font style="float: left;"> <a href="add_vehicles.php" class="add-button"><span>View cars</span></a></font>>
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
		</div>
	</div>
</div>

<div id="footer" align="center">
	<div class="shell">
        Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by
        <i onmouseover="this.innerHTML='Robinpreet,Abhinav'"  onmouseleave="this.innerHTML='Group2'">Group2.</i>
	</div>
</div>
	
</body>
</html>