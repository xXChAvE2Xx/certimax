<?php

			

			include 'databaseconnect.php';

			

			$email = $_POST['email'];				

			$conn = mysqli_connect($servername, $username, $password, $database);



			// Check connection

			if (!$conn) {

				die("Connection failed: " . mysqli_connect_error());

			}

				

			$sql = "SELECT correo, clave FROM usuarios WHERE correo='$email'";				

			$result = mysqli_query($conn, $sql);

				

			if (mysqli_num_rows($result) > 0) {				

				$row = mysqli_fetch_assoc($result);

				

				$subject = "Tu contraseña para Certimax";

				$body = "Tu contraseña es: " . $row['contrasena'];

				

				$headers = 'From: certimax2021@gmail.com' . "\r\n" .

				'Reply-To: certimax2021@gmail.com' . "\r\n" .

				'X-Mailer: PHP/' . phpversion();

				

				mail($email, $subject, $body, $headers);				

				

				echo "<script>window.location='index.php?passRecovery=true';</script>";

			} else {

				echo "<script>window.location='pass_recovery.php?passRecovery=false';</script>";

			}

			?>