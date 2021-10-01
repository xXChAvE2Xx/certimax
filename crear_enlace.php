<?php 
    require_once("header.php");
    include 'sesion/databaseconnect.php';
		// Variables de conexion
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Checar Conexion
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

 	$callsing = $_SESSION['callsing'];

    $checkurl = mysqli_query($conn, "SELECT llave, numUsuario FROM usuarios WHERE numUsuario = '$callsing'");

	$row = mysqli_fetch_assoc($checkurl);
	
	$key = $row["llave"];
?>
<script>
	$(document).ready(function(){
		var key = $('.key').val().length;
		//var callsing = $('.callsing').val();
		if (key == 0) {
			$('#form').html(
				"<section class='section' style='background-color: #00c3ffa1;'><h1 class='title' style='color: white;'>No tiene ningun formulario creado</h1><h2 class='subtitle' style='color: white;'>Le invitamos a crear un formulario para que los asistentes lo contesten directamente.</h2></section><br><a href='certimax/form_controller.php' class='button is-danger'>Crear formulario</button>"
			)
		}else{
			$('#form').html(
				"<section class='section' style='background-color: #00c3ffa1;'><h1 class='title' style='color: white;'>Ya tiene un formulario creado</h1><h2 class='subtitle' style='color: white;'>Su formulario fue creado y sigue disponible, solo debe compartir el enlace o crear un nuevo enlace. (Se eliminara el anterior formulario).</h2></section><br><div class='field is-horizontal'><div class='field-label is-normal'>  <label class='label' >Enlace:</label></div><div class='field-body'><div class='field'>    <p class='control has-icons-left'><input id='copyTarget' class='input' type='text' value='<?php echo 'https://certimax.ml/certimax/form_participantes.php?key='.$key.'&usr='.$callsing ?>'><span class='icon is-small is-left'><i class='fas fa-link'></i></span></p></div></div></div><span style='color: white;'' id='msg'></span><br><button id='copyButton' class='button is-success'>Copiar</button>&nbsp;<a href='certimax/form_controller.php' class='button is-danger'>Crear Enlace Nuevo</button><script src='js/copiar.js'>"
			)
		}
	})
</script>
<!-- FORMULARIO-->
<div style="margin-top:10%">
<input type="text" class="key" name="key" hidden value="<?php echo $row["llave"]; ?>">
<input type="text" class="callsing" name="callsing" hidden value="<?php echo $row["numUsuario"]; ?>">
	<center>
		<div id="form">
		</div>
<div id="ry" style="padding-top:500px;"><div>

<!--footer-->
<div class="row">

    <div class="column" style="background:black; height:168px;">

        <h2><font color="#d9a510">Desarrollado por</font></h2>

        <p>Marcelo Ramírez Morfin</p>

        <p>Raul Antonio Chavez Aguirre</p>

        <hr style="background-color:#D9DADF; margin-top:10px; height: 1px; background-color:#d9a510">

    </div>

    <div class="column" style="background:black; height:168px;">

        <h2><a href="http://telematicanet.ucol.mx/" target="blank">2021 Universidad de Colima, Facultad de Telemática</a></h2>

        <p>Contactos en <a href="mailto:certimax2021@gmail.com">certimax2021@gmail.com</a></p>

        <hr style="background-color:#D9DADF; margin-top:33px; height: 1px; background-color:#d9a510">

    </div>

    <div class="column" style="background:black; height:168px;">

        <h2>A petición de</h2>

        <p><a href="http://telematicanet.ucol.mx/index.php/docentes/omar-alvarez-cardenas" target="blank">Omar Álvarez Cárdenas (XE1AOM)</a></p>

        <hr style="background-color:#D9DADF; margin-top:33px; height: 1px; background-color:#d9a510">

    </div>

</div>
<?php mysqli_close($conn); ?>
</body>
</html>



