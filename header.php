<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php
if (stripos($_SERVER['REQUEST_URI'], '3.php')){
}
else{
     echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="http://code.highcharts.com/modules/data.js"></script>

	<title>Demo IITO groep 7</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />
</head>

<body>

		<div class="header">
			<div class="container">
			
			<a href="index.php"><img src="assets/images/logo.png" alt="Ga naar home" /></a>

			<div class="custom-links">
				<ul>
					<li class="active"><a href="index.php">Webapplicaties</a></li>
					<li class="active"><a href="">Mu Utwente</a></li>
					<li class="active"><a href="1.php">Lecture rooms</a></li>
					<li class="active"><a href="2.php">Analytics</a></li>
					<li class="active"><a href="3.php">Calamites</a></li>
					<li class="active"><a href="4.php">WRB Extension</a></li>


					
					
				</ul>
				<div class="clear">
					<span>&nbsp;</span>
				</div>			
			</div>

			<div class="righttop">

				<ul>

					<span>Dashboard IITOrooster</span>

	                <li>» U heeft <a href="#" title="ga naar webmail"><span class="label label-warning"><?php echo rand(5, 50); ?></span></a> nieuwe berichten</li>
	                   
	                <li>» U heeft <a href="#" title="ga naar blackboard"><span class="label label-primary"><?php echo rand(5, 50); ?></span></a> notificaties</li>
	                
	                <li>» <a href="#"><i class="fa fa-sign-out"></i>Uitloggen</a></li>   

           		</ul>
			</div>

		</div>
	</div>	

<div class="container">

	
	<div class="mainarea row">
