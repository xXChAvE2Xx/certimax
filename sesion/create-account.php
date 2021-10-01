<!doctype html>

<html lang="en">

  <head>

    <title>Creando Cuenta..</title>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>

<body>



<div class="container">
	<?php
	include 'databaseconnect.php';
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {

		die("Connection failed: " . mysqli_connect_error());
	}

	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM usuarios WHERE correo = '$_POST[email]' ";
	

	// Variable $result hold the connection data and the query

	$result = $conn-> query($checkEmail);
	
	// Variable $count hold the result of the query

	$count = mysqli_num_rows($result);
	
	// If count == 1 that means the email is already on the database
	if ($count == 1) {
		echo "<script>window.location='index?create=false';</script>"; 
	}else{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$numCuenta = $_POST['callsing'];

	$passHash = password_hash($pass, PASSWORD_DEFAULT);

	$query = "INSERT INTO usuarios (nombre, clave, activo, correo, numUsuario) VALUES ('$name', '$passHash', 1 , '$email', '$numCuenta')";

	if (mysqli_query($conn, $query)) {
		echo "<script>window.location='index.php';</script>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	

	mysqli_close($conn);

	?>

</div>

	<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </body>

</html>