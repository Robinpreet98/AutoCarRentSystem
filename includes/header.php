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
<!--    <style>-->
<!--        h1 {-->
<!--            color: black;-->
<!--        }-->
<!--       ul li a:hover{-->
<!--            display: block;-->
<!--            color: blue;-->
<!--            text-decoration: underline;-->
<!--            background-color: #056e05;-->
<!--            height: auto;-->
<!--            text-align: center;-->
<!--            padding-left: 20px;-->
<!--        }-->
<!---->
<!--    </style>-->
    <style>
        #clsp1 a{
            float: left;
            position: relative;
            padding-right: 25px;

        }
        #clsp1 a:hover{
            background-color: #056e05;
            color: white;
        }
        #alsp2   a{
            float: right;
            position: fixed;
        }
        #alsp2 a:hover{
            background-color: #056e05;
            color: white;
        }
    </style>
</head>
<body>

	<section class="">
        <?php
        session_start();
        error_reporting("E-NOTICE");
        ?>
        <header>
            <div class="wrapper">
                <h1 class="logo"> Car Company</h1>
                <nav>
                    <?php
                    session_start();
                    if(!$_SESSION['email'] && (!$_SESSION['pass'])){
                        ?>
                        <ul>
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="index.php">Rent Cars</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
<span id="clsp1">
                        <a href="account.php">Client Login</a></span>
<span id="alsp2">
                        <a href="login.php" >Admin Login</a></span>
                        <?php
                    } else{
                        ?>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="status.php">View Status</a></li>
                            <li><a href="message_admin.php">Message Admin</a></li>
                        </ul>
                        <a href="admin/logout.php">Logout</a>
                        <?php
                    }
                    ?>
                </nav>
            </div>
        </header>
			<section class="caption">
				<h2 class="caption" style="text-align: center">We are here for your service.</h2>
				 <?php include_once "includes/javascript1.html"; ?>
			</section>
	</section><!--  end hero section  -->
<hr/>