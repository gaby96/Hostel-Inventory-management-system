<?php 

		
	session_start();

	if (!isset($_SESSION['admin_email'])) {
		header("Location: login.php");
		
	}
	else 
		require 'func/func.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search</title>
 	 <meta name="viewport" content="width=device-width,initial-scale=1"/>

	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<style type="text/css">
		.fom{
			margin-top: 30px;
		}
    .face{
      margin-top: 150px;
      font-style: italic;
      margin-left: 400px;
      font-size: 80px;

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
      <a class="navbar-brand" href="#">SRC HALL APP</a>
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
              <li><a href="porters.php">Porters' Lodge</a></li>
             
           
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <form class="form-horizontal text-primary" action="find.php" method="post" enctype="multipart/form-data">
 		<table>
     <tr>
       <td>
         <div class="face">
           SRC
           <img src="images/rc-logo.png " width="100px;" height="100px;">
           HALL
         </div>
       </td>
     </tr>
      <tr >
        
        <td>
      <input type="Search" name="find" class="form-control" style="width: 600px;margin-right:1px; margin-top: 20px; margin-left: 350px;">
      </td>
      
      <td>
        <button type="submit"name="sumt" style="width: 80px;height: 33px;margin-top: 20px; ">Search</button>
      </td>
    </tr>
    <tr>
      <td>
          <select name="filter" style="margin-right:1px; margin-top: 20px; margin-left: 600px;">
            <option>Select Filter</option>
            <option>Name</option>
            <option>Level</option>
            <option>Index Number</option>
            <option>Program</option>
            <option>Interest</option>
          </select>
        </td>
    </tr>
    
    </table>
 	</form>

      <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
 </body>
 </html>
 