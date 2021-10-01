<?php
     
    //datos db
    $servername = "localhost";
    $database = "id15871147_datosexcel";
    $username = "id15871147_root";
    $password = "9mMq*&q_yom(zdlf";
    
    // Crear Conexion
    $con = mysqli_connect($servername, $username, $password, $database);
    // Checar Conexion
    if (!$con) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Se conecto a la base de datos";
    //mysqli_close($con);
    
    //recepcion de recursos Y colocacion en cookies
	$enc=$_POST['enc'];
	setcookie('enc', $enc);
	$desc=$_POST['desc'];
	setcookie('desc', $desc);
	$lf=$_POST['lf'];
	setcookie('lf', $lf);
	
	$txco=$_POST['txco'];
	if($txco==1)
	setcookie('txco', "white");
	if($txco==0)
	setcookie('txco', "black");
	
	
	
	$nombre1 = $_POST['nombre1'];
	    setcookie('n1',$nombre1);
	$nombre2 = $_POST['nombre2'];
	    setcookie('n2',$nombre2);
	$nombre3 = $_POST['nombre3'];
	    setcookie('n3',$nombre3);
	
	$cargo1 = $_POST['cargo1'];
	    setcookie('c1',$cargo1);
	$cargo2 = $_POST['cargo2'];
	    setcookie('c2',$cargo2);
	$cargo3 = $_POST['cargo3'];
	    setcookie('c3',$cargo3);
	
	$sociedad1 = $_POST['sociedad1'];
	    setcookie('s1',$sociedad1);
	$sociedad2 = $_POST['sociedad2'];
	    setcookie('s2',$sociedad2);
	$sociedad3 = $_POST['sociedad3'];
	    setcookie('s3',$sociedad3);

    ////////////////////GUARDADO DE FONDO Y LOGOS////////////////////////////////////////////////
    $dir="imagenes/";//directorio donde se guardaran las imagenes y logos
   
    $nombreArchivo=$_FILES['fondo']['name'];
    if (!move_uploaded_file($_FILES['fondo']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del fondo<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('fondo',$ruta);
    
    $nombreArchivo=$_FILES['logo1']['name'];
    if (!move_uploaded_file($_FILES['logo1']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo1<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('lg1',$ruta);
    
    $nombreArchivo=$_FILES['logo2']['name'];
    if (!move_uploaded_file($_FILES['logo2']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo2<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('lg2',$ruta);
    
     $nombreArchivo=$_FILES['logo3']['name'];
    if (!move_uploaded_file($_FILES['logo3']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo3<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('lg3',$ruta);
    
     $nombreArchivo=$_FILES['logo4']['name'];
    if (!move_uploaded_file($_FILES['logo4']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo4<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('lg4',$ruta);
    
     $nombreArchivo=$_FILES['logo5']['name'];
    if (!move_uploaded_file($_FILES['logo5']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo5<br>";
            exit;
        }
    $ruta=$dir.$nombreArchivo;
    setcookie('lg5',$ruta);

    ///////////////////FIN GUARDADO DE FONDO Y LOGOS/////////////////////////////
    
    header("Location: crearPdf.php");
    
?>

