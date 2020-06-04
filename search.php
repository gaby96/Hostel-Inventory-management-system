<?php 

		
	session_start();

	if (!isset($_SESSION['admin_email'])) {
		echo "<script> window.open('login.php', '_self');</script>";
	}else {
		
	


	require 'func/config.php';
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
	</style>
 </head>
 <body>
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
      <a class="navbar-brand" href="#">SRC HOSTEL APP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">

      

        <li><a href="#">&nbsp;</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['admin_email']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="verify.php">Items for Distributions</a></li>
            <li><a href="addStudent.php">Add Student</a></li>
             <li><a href="filter.php">Search</a></li>
             <li><a href="porters.php">Porters' Lodge</a></li>
             
           
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
global $link;
if (isset($_POST['sub'])) {
	$room_search=mysqli_escape_string($link, trim($_POST['room_number']));
	if (empty($room_search)) {
		header("Refresh: 0; url=porters.php");
		echo '<script type=""> alert("PLEASE ENTER ROOM NUMBER");</script>';
	}
	else{
		
		$query= "SELECT * FROM add_student WHERE room='$room_search';";
		$result=mysqli_query($link,$query);
		$true = mysqli_num_rows($result);
		if ($true >= 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				$fname=$row['f_name'];
				$lname=$row['l_name'];
				$level=$row['level'];
				$prog=$row['program'];
				$pic=$row['student_photo'];
				$guardian=$row['g_phone'];
				echo '
				<table border="1" style="margin-top:50px;margin-left:500px;">
				<tr>
				<td rowspan="50" colspan="10" ><img width="150px;" height="150px;" src="images/Profile/'.$pic.'"</td>
				</tr>
				<tr>
				<td>FULL NAME: '.$fname.' &nbsp;'.$lname.'</td>
				</tr>
				<tr>
				<td >LEVEL: '.$level.'</td>
				</tr>
				<tr>
				<td >PROGRAMME: '.$prog.'</td>
				</tr>
				<tr>
				<td >GUARDIAN: '.$guardian.'</td>
				</tr>
				</table>
				';
				
		}
	}
	else{
		header("Refresh: 0; url=porters.php");
		echo '<script type=""> alert("ROOM ENTERED DOES NOT EXIST");</script>';
	}
  }
}
?>













<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/material.min.js"></script>
 
 </body>
 </html>
 <?php } ?>
