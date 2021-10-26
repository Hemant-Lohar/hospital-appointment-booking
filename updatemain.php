<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	<title>Update</title>
	<!-- <style>
 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	border-radius: 120px;
	font-size: large;
}

form{
	
	align-content: right;
}
input{
	align-content: right;
	margin:5px;
	border-radius: 12px;
}
q
h3{
	color:green;
	font-family: helvetica;
	font-size: xx-large;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #008cff;
	text-align: center;
	color:white;
	border-radius: 12px;
	font-size: x-large;
	box-shadow:10px 10px 5px #00ccff;
}



.button:hover {
  background: green;;
}

body{
	background-color: skyblue;
}
   
    </style> -->
	</head>
	<?php
		 $conn = mysqli_connect("localhost", "root", "password","appointment") or die(mysqli_connect_error());
	
		?>
	<body>

	<div class="container reg-container">
			<div class="back">
				<a href="index.php" ><i class="fas fa-chevron-circle-left"></i></a>
			</div>
		<div class="part1">
		<img class="booking-img" src="./update.svg" alt="image">
			<h1>Update Appointment Details</h1>
			
		</div>
		

		<div class="part2">
			<form action="update.php" method="POST">
			<div>
					<label for="patient-id">Patient ID:</label><br/><input type="number" name="patient_id" required="required"/>
				</div>
				<div>
					<label for="name_patient">Enter Name of the Patient:</label><br/>
					<input type="text" name="name_patient" required="required"/>
				</div>

				<div>
					<label for="name_patient">Address:</label><br/>
					<input type="text" name="address" required="required"/>
				</div>
				
				 <div><label for="name_patient">Time of Appoinment:</label><br/>
				 <input type="time" name="appointment_time" required="required"/></div>
				
				<div><label for="name_patient">Date of Appointment:</label><br/>
				 <input type="date" name="appointment_date" required="required"></div>
				
				<div>
					<label for="name_patient">Age:</label><br/>
					<input type="number" name="age" required="required">
				</div>
				
				<div>
					<label for="name_patient">SEX:</label><br/>
					<!-- <input type="text" name="sex" required="required"> -->
					
						<input type="radio" name="male" value="M">
						<label for="male">M</label>
						<input type="radio" name="female" value="F">
						<label for="female">F</label>
						<input type="radio" name="other" value="Other">
						<label for="other">Other</label>
					
				</div>
				
				<button type="submit" class="button" >Book Appointment</button>
			</form>
		</div>



	</div>
	<script src="https://kit.fontawesome.com/e143a7ef9d.js" crossorigin="anonymous"></script>

	</body>
	
</html>