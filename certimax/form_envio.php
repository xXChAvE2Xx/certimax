<?php

include '../connect.php';
$nombre = $_POST['nombre']." ".$_POST['apellidos'];
$callsing = $_POST['callsing'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$key = $_POST['key'];
$callsingE = $_POST['callsingE'];

$dir = "archivos/";


$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;

if ($archivo) {
  $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
  $extension = strtolower($extension);
  $extension_correcta = ($extension == 'jpg' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'png' or $extension == 'txt');

 if ($extension_correcta) {
 	if ( !is_dir( $dir.$callsing) ){
	  mkdir($dir.$callsing);
	}

    //$ruta_destino_archivo = $dir."{$callsing}/{$callsing}";

    if($extension == 'jpg' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'png')
      $ruta_destino_archivo = $dir."{$callsing}/{$callsing}.jpg";
    else
      $ruta_destino_archivo = $dir."{$callsing}/{$callsing}.txt";

      $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
 }
}

$sql = "INSERT INTO form (nombre, correo, callsing, pais, codigo, ruta, usr) VALUES ('$nombre', '$email', '$callsing', '$pais','$key', '$ruta_destino_archivo', '$callsingE')";

/*$sql = "INSERT INTO form (nombre, correo, callsing, pais, codigo, ruta, usr)
VALUES ('John', 'john@example.com', 'HSJM', 'Mexico', 'HnsnhrTjnjjaHUU2293knhnbhbc8882JKknjns', 'archivos/archivos/archivos.wtc', 'RACA2021')";*/

if (mysqli_query($con, $sql)) {
  $msg = "Se envio el formulario correctamente y ";
} else {
  echo "<script>window.location='https://certimax.ml/certimax/form_participantes.php?key=".$key."&usr=".$callsingE."&e=true';</script>";	
}
/*echo $nombre;
//echo $apellidos;
echo $callsing;
echo $email;
echo $pais;
echo $key;
echo $callsingE;
echo $nombre_arch;
echo $ruta_destino_archivo;*/
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<script src="../js/jquery-3.6.0.js"></script>
    <!--<script type="module" src="../pwabuilder-sw-register.js"></script>-->
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000"/>
    
    <link rel='manifest' href='manifest.json'>

    <link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "recursos/logicon.png">
    
    <title>CERTIMAX</title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/style_form.css">
	<script >
	 $(document).ready(function() {
      //Evento que checa si se de clic en el icono de navbar burger
      $(".navbar-burger").click(function()      {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        //Toggle es activo en navbar-burger y navbar-menu
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
      });
    });
	</script>
</head>
<body bgcolor="black" background="https://wallpaperaccess.com/full/301760.jpg">
	<div id="ry" style="padding-top:10px;"></div>
	    <div id="form">
	    	<center>
<?php if (isset($archivo)): ?>
       <?php if (!$extension_correcta): ?>
       	<img src="recursos/error.gif" style="margin-top: -43px;" width="50" height="50"><br>
        <strong style="color: red;"> La extensión es incorrecta, el archivo debe ser jpg, jpeg, gif o png. </strong> 
       <?php elseif (!$archivo_ok): ?>
       	<img src="recursos/error.gif" style="margin-top: -43px;" width="50" height="50"><br>
        <strong style="color: red;"> Error al intentar subir el archivo. </strong>
      <?php else: ?>
      	<img src="recursos/ok.gif" style="margin-top: -43px;" width="50" height="50"><br>
        <strong style="color: white;"><?php echo $msg;?> el archivo se ha sido subido correctamente. </strong> 
      <?php endif ?>
   <?php endif; ?>
        </div>
</center>
</div>
       <div id="ry" style="padding-top:760px;"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="./script.js"></script>
</body>

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
<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;  ?>" hidden >
<input type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos; ?>" hidden >
<input type="text" name="callsing" id="callsing" value="<?php echo $callsing; ?>" hidden >
<input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden >
<input type="text" name="pais" id="pais" value="<?php echo $pais; ?>" hidden >
<input type="text" name="key" id="key" value="<?php echo $key; ?>" hidden >
<input type="text" name="callsingE" id="callsingE" value="<?php echo $callsingE; ?>" hidden >
<input type="text" name="ruta archivo" id="ruta_archivo" value="<?php echo $ruta_destino_archivo; ?>" hidden >

</body>
</html>