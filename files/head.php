<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?= $pagename?> | ADC By Haseeb from GCUF</title>
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3>Accident Data Collection System</h3>
						</div>
						<div class="col-sm-6" style="text-align: right">
							<p>System Made By Haseeb for CTP - Faisalabad</p>
						</div>
					</div>
				</div>
		<!-- /container Header -->

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="accident.php">Add Accident</a>
						</li>
					<?php session_start(); if($_SESSION['role'] == 'Admin'):?>
						<li class="nav-item">
							<a class="nav-link" href="user.php">Settings</a>
						</li>
					<?php endif;?>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						
					</ul>
		</nav>	


<div class="container" style="margin-top: 10px;">
	<div class="row">
		<div class="col-sm-12">
			<h3><?= $pagename;?></h3>
			<hr>
		</div>
	</div>
</div>	

<?php
// Start the session
if(!(isset($_SESSION['login'])))
{
	header('Location:login.php');
}
?>


