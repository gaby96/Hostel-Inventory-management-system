<?php 

		
	session_start();

	if (!isset($_SESSION['admin_email'])) {
		echo "<script> window.open('login.php', '_self');</script>";
	}else {
	require 'func/func.php';
	addStudent();
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
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SRC HOSTEL APP</a> <--! line 44 is used for the src hostel app -->
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

<div class="container">
	<div class="row">



<form class="form-horizontal text-primary" action="" method="post" enctype="multipart/form-data">
<div class="panel panel-info ">
  <div class="panel-heading text-center">
    <h2 class="panel-title "></h2>
  </div>
  <div class="panel-body">
  	<!-- <div class="text-center text-info"><h4>Student information</h4></div>	<hr> -->
   
   <div class="col-md-8 fom">

			  <div class="form-group">
			    <label for="student_name" class="col-sm-4 lead control-label">First Name</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="f_name" name="fname" required>
			    </div>
			  </div>

			   <div class="form-group">
			    <label for="student_name" class="col-sm-4 lead control-label">Last Name</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="l_name" name="lname" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="sex" class="col-sm-4 lead control-label">Sex</label>
			    <div class="col-sm-8">
			      <select required="" name="level">
			      	<option>Select Sex</option>
			      	<option>Male</option>
			      	<option>Female</option>
			      	</select>
			    </div>
			  </div>


			   <div class="form-group">
			    <label for="program" class="col-sm-4 lead control-label">Program</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control"  name="program" required>
			    </div>
			  </div>

			   <div class="form-group">
			    <label for="year" class="col-sm-4 lead control-label">Admission Year</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="year" required>
			    </div>
			  </div>
			 

			  	<div class="form-group">
			    <label for="id" class="col-sm-4 lead control-label">Student ID</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="id"  required >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="level" class="col-sm-4 lead control-label">Student Level</label>
			    <div class="col-sm-8">
			      <select required="" name="level">
			      	<option>Select Level</option>
			      	<option>100</option>
			      	<option>200</option>
			      	<option>300</option>
			      	<option>400</option>
			      	<option>500</option>
			      	<option>600</option></select>
			    </div>
			  </div>
			  

			  <div class="form-group">
			    <label for="email" class="col-sm-4 lead control-label">Email</label>
			    <div class="col-sm-8">
			      <input type="email" class="form-control" name="email" required>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="phone" class="col-sm-4 lead control-label">Contact</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="Contact" required>
			    </div>
			  </div>

			 <div class="form-group">
			    <label for="Interest" class="col-sm-4 lead control-label">Interest</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="Interest">
			    </div>
			  </div>

                        <div class="form-group">
			    <label for="Room Number" class="col-sm-4 lead control-label">Room Number</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="Room" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="Guardian Name" class="col-sm-4 lead control-label">Name of Guardian</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="Guardian_Name" required>
			    </div>
			  </div>
                       <div class="form-group">
			    <label for="Guardian Contact" class="col-sm-4 lead control-label">Guardian Contact</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="Guardian_Contact" required>
			    </div>
			  </div>

		</div>

		<div class="col-md-3">

			<div class="form">
				<img src="" class="img img-thumbnail" id="image"><hr>
				
				<label class="file">
					<input type="file" id="file" name="photo" required onchange="showImage.call(this); " width="450px" height="500px;">
					<span class="file-custom"></span>
					<script type="text/javascript">
						function showImage(){
							if (this.files && this.files[0]){
								var obj = new FileReader();
								obj.onload = function(data){
									var image = document.getElementById("image");
									image.src = data.target.result;
									image.style.display="block";
								}
								obj.readAsDataURL(this.files[0]);
							}
						}
					</script>

				</label>
				
			  
			</div>
		</div>
		<div class="col-md-1"></div>
				
	</div><hr>
			  
			  <div class="form-group">
			    <div class="col-sm-offset-1 col-sm-10">
			      <button type="submit" class="btn btn-info btn-lg btn-block" name="add-student" >Add Student</button>
			    </div>
			  </div>
</div>

</form>
   
  </div>

</div>
		
		


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/material.min.js"></script>

</body>
</html>
<?php } ?>


