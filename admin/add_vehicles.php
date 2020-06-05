<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Manage
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Cars Information</h2>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Car Type</th>
								<th>Car Name</th>
								<th>Hire Price</th>
								<th width="110" class="ac">Content</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td style="text-align: center;"><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" style="height:25px; text-align:center;" />
                        <a href="add_cars.php" class="add-button"><span><u>Add new collection</u></span></a>
                    </h2>

				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->

			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer" align="center">
    <div class="shell">
        Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by
        <i onmouseover="this.innerHTML='Robinpreet,Abhinav'"  onmouseleave="this.innerHTML='Group2'">Group2.</i>
    </div>
</div>
<!-- End Footer -->
	
</body>
</html>