<?php 

    global $link;
  session_start();

  if (!isset($_SESSION['admin_email'])) {
    echo "<script> window.open('login.php', '_self');</script>";
  }
  elseif (!isset($_SESSION['student_index'])) {
     echo "<script> window.open('verify.php', '_self');</script>";
  }
  else {
    require 'func/func.php';
    item_dist();
  

    
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
<body class="">

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SRC HALL APP</a>
      <div class="navbar-brand" style="margin-left: 300px;"><?php echo $_SESSION['student_index']; ?></div>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">

      

        <li><a href="#">&nbsp;</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['admin_email']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="verify.php">Verify Student</a></li>
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




<div class="panel panel-info ">
  <div class="panel-heading text-center">
    <h2 class="panel-title "></h2>
  </div>
  <div class="panel-body">
   
  

   <div class="col-md-4 fom">
   		<div class="list-group lead">
		  <span href="#" class="list-group-item active">
		    Items For Distribution
		  </span>
      <?php   items(); ?>
		 <!--  <a href="#" class="list-group-item">10 Exercise Books <span class="badge text-right">42</span></a>
		  <a href="#" class="list-group-item">2 Sets of T-Roll<span class="badge text-right">42</span></a>
		  <a href="#" class="list-group-item">SRC T-Shirt<span class="badge text-right">42</span></a>
		  <a href="#" class="list-group-item">SRC Magazine<span class="badge text-right">42</span></a> -->
		</div>
   </div>
   <div class="col-md-2">
     
   </div>

   <div class="col-md-4 fom">
   	<div class="well lead text-center">
   		<div class="text-primary">
   			Add An Item for Distributions <hr>
   		</div>

   		<div class="">
   			<form method="post" action="" class="form-group">
   				
   				<select class="form-control input-lg" name="it">
            <option>Select Item</option> 
            <option>Books</option> 
            <option>Lacoste</option> 
            <option>Toiletries</option>
            <option>Pen</option>    
          </select>
   				<br>
          <input type="text"  name="tot" class="form-control input-lg" placeholder="Number of items">
          <br>
   				<button class="btn btn-info btn-lg btn-block" type="submit" name="addItem">Add An Item</button>
          
   			</form>
        
   		</div>
   		
   	</div>
   </div>


  
</div>

   
  </div>
</div>
		
		


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/material.min.js"></script>
</body>
</html>
<?php } ?>