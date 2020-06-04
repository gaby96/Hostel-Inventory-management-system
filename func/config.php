<?php 
    $servername='localhost';
    $username='root';
    $pwd='';
    $dbname='src';
	$link = mysqli_connect($servername ,$username,$pwd, $dbname) OR die('Could not connect to database');
 ?>