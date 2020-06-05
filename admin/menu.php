<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1 align="left">Welcome Administrator</h1>
			<div id="top-navigation">
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php" style="display: block; background-color: #056e05; padding-left: 10px"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span><u>VehicleManagement</u></span></a></li>
			    <li><a href="client_requests.php"><span><u>Hire-Requests</u></span></a></li>
                <li><a href="index.php"><span><u>Messages</u></span></a></li>
			</ul>
		</div>