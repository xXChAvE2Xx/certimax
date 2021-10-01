<?php
session_start();
?>

<!doctype html>

<html lang="en">

	<head>

		<title>Cargando..</title>

		<!-- Required meta tags -->

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>

	<body>

		<div class="container">
			<?php
			// Archivo de informacion de conexion
			include 'databaseconnect.php';	

			// Variables de conexion
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Checar Conexion
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Datos enviados de index.php 
			$email = $_POST['email']; 
			$password = $_POST['pass'];

			// Query enviado a la base de datos
			$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$email' AND activo = '1'");

			// Variable $row guarda el resultado de la query
			$row = mysqli_fetch_assoc($result);

			// Encriptamos contraseña
			$hash = $row['clave'];
			

			/* 

			password_Verify() function verify if the password entered by the user

			match the password hash on the database. If everything is OK the session

			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.

			*/
			if (password_Verify($password,$hash)) {	
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['nombre'];
				$_SESSION['callsing'] = $row['numUsuario'];
				$_SESSION['key'] = $row['llave'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;			
				echo "<script>window.location='../certimax/formulario.php';</script>";	
			} else {
				if($row['nombre'] == null){
					echo "<script>window.location='index.php?cuenta=false';</script>";
				}

				if($row['activo'] != 0){
			    	echo "<script>window.location='index.php?error=true';</script>";
			    }else{
					echo "<script>window.location='index.php?activo=false';</script>";
			    }	
			}	
			?>
		</div>



		<!-- Optional JavaScript -->

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



	</body>

</html>