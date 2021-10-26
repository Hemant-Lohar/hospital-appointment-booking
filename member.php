<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Details</title>


<!-- <style>
    .container{
	width: auto;
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


h3{
	color:#1f00a8;
	font-family: helvetica;
	font-size: xx-large;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}
button{
	width:250px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	border-radius: 12px;
	color:white;
	font-size: x-large;
	box-shadow:10px 10px 5px #00ccff;
}

button:hover{background-color: #ffa64d;}
table
{

border-style: double;

border-width:4px;

border-color:skyblue;
font-size: x-large;

}
.center {
  margin-left: auto;
  margin-right: auto;
}

</style> -->

</head>

<div class="details-container">
<h1>Patient Details</h1>
		
		<div class="back">
			<a href="index.php" ><i class="fas fa-chevron-circle-left"></i></a>
		</div>
		
<div class="display">
			
	<?php
	
	$conn = mysqli_connect("localhost","root","password","appointment");
	
	if (!$conn)
	
	  {
	
	  die('Could not connect: ' . mysqli_connect_error());
	
	  }
	
	$query1="SELECT * FROM person_appoint";
	$query = "SELECT * FROM person_appoint";
	mysqli_query($conn,$query1);
	$result=mysqli_query($conn,$query);
	
	 
	
	echo "<table>
	
	<tr>
	
	
	
	<th>Name of Patient</th>
	<th>Address</th>
	<th>Time of Appointment</th>
	<th>Date of Appointment</th>
	<th>Age</th>
	<th>SEX</th>
	
	
	
	
	</tr>";
	
	
	
	while($row = mysqli_fetch_array($result))
	
	  {
	
	  echo "<tr>";
	
	  echo "<td>" . $row['name_patient'] . "</td>";
	  echo "<td>" . $row['address'] . "</td>";
	  echo "<td>" . $row['appointment_time']. "</td>";
	  echo "<td>" . $row['appointment_date']. "</td>";
	  echo "<td>" . $row['age'] . "</td>";
	  echo "<td>" . $row['sex'] . "</td>";
	  echo "</tr>";
	
	  }
	
	echo "</table>";
	
	 
	
	mysqli_close($conn);
	
	?>
</div>

<script src="https://kit.fontawesome.com/e143a7ef9d.js" crossorigin="anonymous"></script>
</body>

</html>