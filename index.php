<html>
	<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
	<title>Doctro</title>
	<!-- <style>

		* {
			font-family:"Arial";
		}
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
}


h3{
	color:#1f00a8;
	font-family: Arial;
	font-size: xx-large;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width:280px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: green;
	text-align: center;
	color:white;
	border-radius: 12px;
	font-size: x-large;
	box-shadow:10px 10px 5px #00ccff;
}
.button2 {background-color: red;} 
.button3 {background-color: blue;}  
.button4 {background-color: yellowgreen;} 
.button5 {background-color: orangered;} 
.button6 {background-color: rebeccapurple;} 
.button7 {background-color: #0099ff;} 
.button8 {background-color: #cc0066;} 

.button:hover {
  background: greenyellow;
}
.button2:hover {background-color: palevioletred;} 
.button3:hover {background-color: skyblue;}  
.button4:hover {background-color: yellow;} 
.button5:hover {background-color: orange;} 
.button6:hover {background-color: violet;} 
.button7:hover {background-color: #00ccff;}
.button8:hover {background-color: #ff66b3;}

.button:active {
  background-color: #ff9966;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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

	<div class="container">
		<div class="part1">
			<img class="booking-img" src="./book.svg" alt="image">
			<h1>Doctro<h1>
			<!-- <h2>Home Page</h2> -->
		</div>
		<div class="part2">
			<button class="button" type = "button" onclick="location.href='register.php'" >Book Appointment</button>
			
			
			<button class="button button2" type = "button" onclick="location.href='member.php'" >See All Appointment</button>
			<button class="button button3" type = "button" onclick="location.href='updatemain.php'" >Update Appointments</button>
		</div>
		

	</div>
	</body>
	
</html>