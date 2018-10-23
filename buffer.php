<?php
	$conn=new mysqli("localhost","root","","task");
	$name = $_GET['name'];
	$age = $_GET['age'];
	$dob = $_GET['date'];
	$sql = "INSERT INTO first(name,age,dob) VALUES('$name','$age','$dob')";
	if($conn->query($sql)===TRUE){
		echo "Success";
	}
	else{
		echo "Error";
	}
?>