<!DOCTYPE html>



<html lang="es-MX">



<head>
	<title>Registrarse</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!--===============================================================================================-->
<style type="text/css">
	#pswd_info {
	width:400px;
    padding:0px;
    background:#fefefe;
    margin:0 auto;
    border:1px solid #c4cddb;
    border-top-color:#d3dbde;
    border-bottom-color:#bfc9dc;
    box-shadow:0 1px 1px #ccc;
    border-radius:5px;
    position:fixed;
	}
	ul, li {
    margin:0;
    padding:0;
    list-style-type:none;
}

	#pswd_info h4 {
	    margin:0 0 10px 0;
	    padding:0;
	    font-weight:normal;
	}

	#pswd_info::before {
	    content: "\25B2";
	    position:absolute;
	    top:-12px;
	    left:45%;
	    font-size:14px;
	    line-height:14px;
	    color:#ddd;
	    text-shadow:none;
	    display:block;
	}

	.invalid {
	    padding-left:22px;
	    line-height:24px;
	    color:#ec3f41;
	}

	.valid {
	    padding-left:22px;
	    line-height:24px;
	    color:#3a7d34;
	}

	#pswd_info {
	    display:none;
	}
</style>
<script>
	$(document).ready(function() {

	    $('input[type=password]').keyup(function() {
	        // set password variable
	        var pswd = $(this).val();
	        var check = 1;
	        //validate the length
	        if ( pswd.length < 8 ) {
	            $('#length').removeClass('valid').addClass('invalid');
	             $('#4').removeClass('fas fa-check').addClass('far fa-times-circle');
	             check--;
	        } else {
	            $('#length').removeClass('invalid').addClass('valid');
	            $('#4').removeClass('far fa-times-circle').addClass('fas fa-check');
	            check++;
	           
	        }

	        //validate letter
	        if ( pswd.match(/[A-z]/) ) {
	            $('#letter').removeClass('invalid').addClass('valid');
	            $('#1').removeClass('far fa-times-circle').addClass('fas fa-check');
	            check++;
	        } else {
	            $('#letter').removeClass('valid').addClass('invalid');
	            $('#1').removeClass('fas fa-check').addClass('far fa-times-circle');
	            check--;
	            
	        }

	        //validate capital letter
	        if ( pswd.match(/[A-Z]/) ) {
	            $('#capital').removeClass('invalid').addClass('valid');
	            $('#2').removeClass('far fa-times-circle').addClass('fas fa-check');
	            check++;           
	        } else {
	            $('#capital').removeClass('valid').addClass('invalid');
	            $('#2').removeClass('fas fa-check').addClass('far fa-times-circle');
	            check--;
	        }

	        //validate number
	        if ( pswd.match(/\d/) ) {
	            $('#number').removeClass('invalid').addClass('valid');
	            $('#3').removeClass('far fa-times-circle').addClass('fas fa-check');
	            check++;           
	        } else {
	            $('#number').removeClass('valid').addClass('invalid');
	            $('#3').removeClass('fas fa-check').addClass('far fa-times-circle');
	            check--;
	        }


	        if(check >= 5){
	        	$('#enviar').prop('disabled', false);
	        	$('#pswd_info').hide();
	        }else{
	        	$('#pswd_info').show();	
	        }
	        console.log(check);
	    }).focus(function() {
	        $('#pswd_info').show();
	    }).blur(function() {
	        $('#pswd_info').hide();
	    });

	});
</script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../certimax/recursos/fondo1.jpg');">
			<div class="wrap-login100">
				<form action="create-account.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-34 p-t-27">
						Registro
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Ingrese Su Nombre">
						<input class="input100" type="text" name="name" placeholder="Nombre Completo">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Call Sing">
						<input class="input100" type="text" name="callsing" placeholder="Call Sing">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Ingrese Correo">
						<input class="input100" type="text" name="email" placeholder="Correo">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Ingrese Contraseña">
						<input class="input100" id="psw" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<div id="pswd_info" style="z-index: 10;">
							<h6>La contraseña debería cumplir con los siguientes requerimientos:</h6>
							<ul>
						    	<li id="letter" class="invalid"><i id="1" class="far fa-times-circle"></i>&nbsp;Al menos debería tener <strong>una letra</strong></li>
								<li id="capital" class="invalid"><i id="2" class="far fa-times-circle"></i>&nbsp;Al menos debería tener <strong>una letra en mayúsculas</strong></li>
								<li id="number" class="invalid"><i id="3" class="far fa-times-circle"></i>&nbsp;Al menos debería tener <strong>un número</strong></li>
								<li id="length" class="invalid"><i id="4"class="far fa-times-circle"></i>&nbsp;Debería tener <strong>8 carácteres</strong> como mínimo</li>
							</ul>
						</div>
						<button id="enviar" type="submit" class="login100-form-btn" disabled="true">
							Registrarse
						</button>
					</div>
					<div class="text-center p-t-90">
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
</body>
</html>















