<!DOCTYPE html>



<html lang="es-MX">



<head>



	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">



	<title>Recuperar Contraseña</title>



	<meta charset="UTF-8">



	<meta name="viewport" content="width=device-width, initial-scale=1">



<!--===============================================================================================-->	



	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">



<!--===============================================================================================-->	



	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">



<!--===============================================================================================-->	



	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">



<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="css/util.css">



	<link rel="stylesheet" type="text/css" href="css/main.css">



<!--===============================================================================================-->



	<link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet"/>



    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" rel="stylesheet"/>



    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" rel="stylesheet"/>



    



<!--===============================================================================================-->

</head>



<body>



	<div class="limiter">

		<div class="container-login100" style="background-image: url('../certimax/recursos/fondo1.jpg');">

			



			<div class="wrap-login100">



				<form action="pass_check.php" method="post" class="login100-form validate-form">

					<span class="login100-form-title p-b-34 p-t-27">

						<img src="../certimax/recursos/logo.gif" width="50" height="50"><br>

						Recuperar Contraseña



					</span>







					<div class="wrap-input100 validate-input" data-validate = "Ingrese Correo">



						<input class="input100" type="text" name="email" placeholder="Correo">



						<span class="focus-input100" data-placeholder="&#xf15a;"></span>



					</div>



					<div class="container-login100-form-btn">



						<button type="submit" class="login100-form-btn">



							Recuperar



						</button>



					</div>



					<br>



					<div class="text-center">



						<a class="txt1" href="index.php">



							Regresar



						</a>



					</div>



				</form>



			</div>



		</div>



	</div>



	







	<div id="dropDownSelect1"></div>



	



<!--===============================================================================================-->



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>



<!--===============================================================================================-->



	<script src="vendor/animsition/js/animsition.min.js"></script>



<!--===============================================================================================-->



	<script src="vendor/bootstrap/js/popper.js"></script>



	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>



<!--===============================================================================================-->



	<script src="vendor/select2/select2.min.js"></script>



<!--===============================================================================================-->



	<script src="vendor/daterangepicker/moment.min.js"></script>



	<script src="vendor/daterangepicker/daterangepicker.js"></script>



<!--===============================================================================================-->



	<script src="vendor/countdowntime/countdowntime.js"></script>



<!--===============================================================================================-->



	<script src="js/main.js"></script>



	<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>



				



				<?php



                    if(isset($_GET["passRecovery"]) && $_GET["passRecovery"] == 'false')



                    {?>



   							<script type="text/javascript">



		                        alertify.set('notifier','position', 'top-center');



		                        alertify.error('El correo no existe');



                       		</script>



                <?php    }

                ?>



</body>



</html>