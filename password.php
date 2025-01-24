<?php
    session_start();
    require 'db.php';

?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
       <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
    </head>

    <body class="subpage">

        <?php
            require 'menu.php';
        ?>

            <div class="container">
                <br>
                <br>
                <br><br>
                
            <h3><b>Change Password</b></h3>
							<form method="post" action="">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="password" name="currPass" id="currPass" value="" placeholder="Current Password" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="newPass" id="newPass" value="" placeholder="New Password" style="width:80%" required/>
									</div>
                                    <div class="7u$">
										<input type="password" name="conNewPass" id="conNewPass" value="" placeholder="Retype Password" style="width:80%" required/>
									</div>
								</div>
									
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Submit" />
										</div>
									</div>
									
                                </form>
								</div>
					
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
