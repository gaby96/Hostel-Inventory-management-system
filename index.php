<?php 

		
	session_start();

	if (!isset($_SESSION['admin_email'])) {
		echo "<script> window.open('login.php', '_self');</script>";
	}else {
		
	


	require 'func/func.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SRC Hostel</title>
	 <meta name="viewport" content="width=device-width,initial-scale=1"/>

	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<style type="text/css">
		.fom{
			margin-top: 30px;
		}
		/* .logo{
			height: 300px;
			width: 300px;
		} */
	</style>

	
</head>
<body class="" >

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">E-DISTRIBUTION APP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">

      

        <li><a href="#">&nbsp;</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['admin_email']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="verify.php">Items for Distributions</a></li>
             <li><a href="filter.php">Search</a></li>
             <li><a href="addStudent.php">Add Student</a></li>
             <li><a href="porters.php">Porters' Lodge</a></li>
           
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">


		<div class="col-md-4"></div>
		<div class="col-md-4 text-center">

			<h1>Dashboard</h1>
			<div >
				<img src="images/rc-logo.png" class="logo img-responsive">
			</div>
			
			<h3>E-DISTRIBUTION APP</h3>
			
		</div>
		<div class="col-md-4"></div>

   
  </div>

</div>
		
		


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/material.min.js"></script>
</body>
</html>

<?php } ?>