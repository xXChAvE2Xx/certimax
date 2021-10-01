<?php 
	session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location: /sesion/index.php');
	}

	$key = $_SESSION['key'];
	$callsing = $_SESSION['callsing'];
?>

<head>

<link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "certimax/recursos/logicon.png">

    </head>

<?php
require_once('connect.php');
$res = mysqli_query($con, "SELECT id, nombre, correo, callsing, pais, ruta FROM form WHERE codigo ='$key' AND usr = '$callsing'");


if(isset($_GET["eliminar"])){
	$id=$_GET['eliminar'];
    $eliminar= mysqli_query($con, "DELETE FROM form WHERE id = '$id'");

    if($eliminar){
    	echo "<script>window.location='datos.php'</script>";
    }
}
include("header.php");
?>

		<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth"> 

		<thead> 
			<tr> 
				<th>#</th> 
				<th>Nombres</th> 
				<th>Correo</th> 
				<th>CallSing</th> 
				<th>Pais</th>
				<th>Archivo</th>
				<th>Eliminar</th>
			</tr> 
		</thead> 
		<tbody> 
		<?php 
		$i=0;
		$bandera = false;
		while($r = mysqli_fetch_assoc($res)){$i++;
		?>
			<tr> 
				<th scope="row"><?php echo $i; ?></th> 
				<td><?php echo $r['nombre']; ?></td> 
				<td><?php echo $r['correo']; ?></td> 
				<td><?php echo $r['callsing']; ?></td>
				<td><?php echo $r['pais']; ?></td> 
				<td><a class="button is-link" href="https://certimax.ml/certimax/<?php echo $r['ruta']; ?>" download>Descargar</a></td>
				<td><a class="button is-danger" href="<?php echo 'datos.php?eliminar='.$r['id']; ?>">
					<span class="icon is-small">
      					<i class="fas fa-user-times"></i>
    				</span>
    				<span>Eliminar</span></a></td>  
			</tr> 
		<?php } 
		if($i == '0'){?>
			<div class="notification is-danger">
				Base de datos vacía, nadie ha respondido el formulario, si no a creado uno <strong><a href="crear_enlace.php"> Clic Aquí</a></strong>.
			</div>
		<?php $bandera = true; } ?>

		</tbody> 

		</table>

	</div>

</div>

<?php 

if($bandera == true){?><div id="ry" style="padding-top:650px;"><div> <?php }?>

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
<?php mysqli_close($con);?>
</body>

</html>