<!DOCTYPE html>
<html lang="es-MX">
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<title>Iniciar Sesión</title>
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
<style>
body {

  margin: 0;

  font-family: Arial, Helvetica, sans-serif;

}



.topnav {

  overflow: hidden;

  background-color: #000;

}



.topnav a {

  float: left;

  display: block;

  color: #f2f2f2;

  text-align: center;

  padding: 14px 16px;

  text-decoration: none;

  font-size: 17px;

}



.topnav a:hover {

  background-color: #ddd;

  color: black;

}



.topnav a.active {

  background-color: #4CAF50;

  color: white;

}



.topnav .icon {

  display: none;

}



@media screen and (max-width: 600px) {

  .topnav a:not(:first-child) {display: none;}

  .topnav a.icon {

    float: right;

    display: block;

  }

}



@media screen and (max-width: 600px) {

  .topnav.responsive {position: relative;}

  .topnav.responsive .icon {

    position: absolute;

    right: 0;

    top: 0;

  }

  .topnav.responsive a {

    float: none;

    display: block;

    text-align: left;

  }

}

</style>
<script type="text/javascript">
	function mostrarPassword() {
		var cambio = document.getElementById('txtPassword');

		if (cambio.type == "password") {
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	}
</script>
</head>
<body>
	<div class="limiter">
		<!--<div class="topnav" id="myTopnav">
		  <a href="../index" class="active">Inicio</a>
		</div>-->
		<div class="container-login100" style="background-image: url('../certimax/recursos/fondo1.jpg');">
			<div class="wrap-login100">
				<form action="check-sesion.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-34 p-t-27">
					<img src="../certimax/recursos/logo.gif" width="50" height="50"><br>
						Iniciar Sesión
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Ingrese Correo">
						<input class="input100" type="text" name="email" placeholder="Correo">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Ingrese Contraseña">
						<input class="input100" type="password" name="pass" id="txtPassword" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword();" style="margin-left: auto;margin-top: auto;" onclick=""> <span class="fa fa-eye-slash icon"></span></button>
					<div class="contact100-form-checkbox">
						<!--<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">-->
						<label>
							<a class="txt1" href="registro.php">Crear Cuenta Nueva</a>
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>
					<br>
					<div class="text-center">
						<a class="txt1" href="pass_recovery.php">
							¿Olvido Contraseña?
						</a>
					</div>
					<div class="text-center">
						<h3 style="color: white;">Login Demo v1</h3>
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
                    if(isset($_GET["error"]) && $_GET["error"] == 'true')
                    {?>
                       <script type="text/javascript">
                       	alertify.set('notifier','position', 'top-center');
                        alertify.error('Contraseña Incorrecta, vuelva intentar');
                       </script>
                <?php    }

                if(isset($_GET["create"]) && $_GET["create"] == 'true')
                    {?>
                       <script type="text/javascript">
                        alertify.set('notifier','position', 'top-center');
                        alertify.success('Cuenta Registrada');
                       </script>
                <?php    }
                 if(isset($_GET["passRecovery"]) && $_GET["passRecovery"] == 'true')
                    {?>
                       <script type="text/javascript">
                        alertify.set('notifier','position', 'top-center');
                        alertify.success('¡Correo enviado! Checa tu correo ');
                       </script>
                <?php }

                if(isset($_GET["sesion"]) && $_GET["sesion"] == 'false')
                    {?>
                       <script type="text/javascript">
                       	alertify.set('notifier','position', 'top-center');
                        alertify.error('Primero Inicia Sesión');
                       </script>
                <?php }?>

                <?php if(isset($_GET["create"]) && $_GET["create"] == 'false'){ ?>
                       <script type="text/javascript">
                        alertify.set('notifier','position', 'top-center');
                        alertify.error('Error: Correo ya existe, por favor inicia sesión');
                       </script>
                <?php } ?>
                <?php if(isset($_GET["activo"]) && $_GET["activo"] == 'false'){ ?>
                       <script type="text/javascript">
                        alertify.set('notifier','position', 'top-center');
                        alertify.error('Tu cuenta fue suspendida, contacta a un administrador para más información');
                       </script>
                <?php } ?>
                <?php if(isset($_GET["cuenta"]) && $_GET["cuenta"] == 'false'){ ?>
                       <script type="text/javascript">
                        alertify.set('notifier','position', 'top-center');
                        alertify.error('Usuario no existe');
                       </script>
                <?php } ?>

</body>
</html>

