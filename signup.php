<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<?php include_once "includes/header.php"; ?>


	<section class="listings">
		<div class="wrapper" align="center">
			
				<h3>Signup Here</h3>
				<form method="post">
					<table>
						<tr style="padding-bottom: 20px">
							<td>Full Name:</td>
							<td><input type="text" name="fname" placeholder="required(no more than 20 letters)"required><br></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="number" name="phone" placeholder="required(only 10 numbers)" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" placeholder="required(email format must)" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" placeholder="required" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit "></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_REQUEST['save'])){
                            include 'includes/config.php';
							$fname = $_REQUEST['fname'];
							$email = $_REQUEST['email'];
                            $password = $_REQUEST['password'];
							$phone = $_REQUEST['phone'];

							
							$qry = "INSERT INTO client (fname,email,password,phone,status) VALUES('$fname','$email','$password','$phone','Approved')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	<?php include_once "includes/footer.php" ?>