<?php 
require "config/mysqli_connect.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href= <?php echo BASEURL."/css/style.css";?>>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="wrapper">
				<div class="container">
					<div class="container-wrap">
						<div class="img-container">
                <img src=<?php echo BASEURL."/images/logo.png"?> class="logo-image">
					</div>
					<div class="nav-container">
							<nav class="navbar">
							      	<ul class="nav navbar-nav">
							        	<li class="active"><a href=<?php echo BASEURL."/index.php"?>>Home</a></li>
							        	<li class="active"><a href=<?php echo BASEURL."/Gallery.php"?>>Collection</a></li>
                                        <li class="active"><a href=<?php echo BASEURL."/aboutus.php"?>>About Us</a></li>
							        	<li class="active"><a href=<?php echo BASEURL."/contact.php"?>>Contact Us</a></li>
												<?php
												session_start();
												 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                        echo '<li class="active"><a href= "'.BASEURL.'/Authentication/Login.php">Login/Register</a></li>';
																			}
																			else{
																				echo '<li class="active"><a href="'.BASEURL.'/Authentication/logout.php">logout</a>'.$_SESSION["username"].'</li>';
																			}
																			?>
							      	</ul>
							</nav>

						</div>


				</div>
			</div><!--header_bottom-->
		</div><!--header-->
