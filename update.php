<?php 
	session_start();
	$conn = mysqli_connect("localhost", "root", "password","appointment") or die(mysqli_connect_error());
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$patient_id=mysqli_real_escape_string($conn,$_POST['patient_id']);
		$name_patient=mysqli_real_escape_string($conn,$_POST['name_patient']);
		$address=mysqli_real_escape_string($conn,$_POST['address']);
		
		$appointment_time=mysqli_real_escape_string($conn,$_POST['appointment_time']);
		$appointment_date=mysqli_real_escape_string($conn,$_POST['appointment_date']);
		$age=mysqli_real_escape_string($conn,$_POST['age']);
		$sex=mysqli_real_escape_string($conn,$_POST['sex']);
		
		
		mysqli_query($conn,"UPDATE `person_appoint` SET `patient_id`='$patient_id',`name_patient`='$name_patient',`address`='$address',`appointment_time`='$appointment_time',`appointment_date`='$appointment_date',`age`='$age',`sex`='$sex' WHERE patient_id=$patient_id ;");
		Print '<script>alert("Successful Updation Made.");window.location.assign("index.php");</script>';
	
	}
	else
	{
		header("location:index.php");
	}


 ?>
