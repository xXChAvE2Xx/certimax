<?php
          
    //recepcion de recursos
    $nombre=$_POST['nombre'];
	$encabezado=$_POST['enc'];
	$descripcion=$_POST['desc'];
	$lf=$_POST['lf'];
	$color=$_POST['txco'];
	if($color==1)
	$txco="white";
	if($color==0)
	$txco="black";
	$nombre1 = $_POST['nombre1'];
	$nombre2 = $_POST['nombre2'];
	$nombre3 = $_POST['nombre3'];
	$cargo1 = $_POST['cargo1'];
	$cargo2 = $_POST['cargo2'];
	$cargo3 = $_POST['cargo3'];
	$sociedad1 = $_POST['sociedad1'];
	$sociedad2 = $_POST['sociedad2'];
	$sociedad3 = $_POST['sociedad3'];
	    

    ////////////////////GUARDADO DE FONDO Y LOGOS/////////////////////////////////////////////////////////////////////////////
    $dir="imagenes/";//directorio donde se guardaran las imagenes y logos
    $nombreArchivo=$_FILES['fondo']['name'];
    
    
    
    if (!move_uploaded_file($_FILES['fondo']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del fondo<br>";
            exit;
        }
    $rutafondo=$dir.$nombreArchivo;
    
    
    $nombreArchivo=$_FILES['logo1']['name'];
    if (!move_uploaded_file($_FILES['logo1']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo1<br>";
            exit;
        }
    $logo1=$dir.$nombreArchivo;
    
    
    $nombreArchivo=$_FILES['logo2']['name'];
    if (!move_uploaded_file($_FILES['logo2']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo2<br>";
            exit;
        }
    $logo2=$dir.$nombreArchivo;
    
    
     $nombreArchivo=$_FILES['logo3']['name'];
    if (!move_uploaded_file($_FILES['logo3']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo3<br>";
            exit;
        }
    $logo3=$dir.$nombreArchivo;
    
    
     $nombreArchivo=$_FILES['logo4']['name'];
    if (!move_uploaded_file($_FILES['logo4']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo4<br>";
            exit;
        }
    $logo4=$dir.$nombreArchivo;
    
    
     $nombreArchivo=$_FILES['logo5']['name'];
    if (!move_uploaded_file($_FILES['logo5']['tmp_name'],$dir.$nombreArchivo))
        {
            echo "<br>error en la subida del logo5<br>";
            exit;
        }
    $logo5=$dir.$nombreArchivo;
    

       //fin guardado
       
        //Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
        require_once 'dompdf/autoload.inc.php';
        use Dompdf\Dompdf;
                
         /////////////////////llamar el reconocimiento.php enviandole las variables dinamicas
              $url = 'https://ycertimaxy.000webhostapp.com/certimax/reconocimiento.php'; 
               $data = array('nombre' => $nombre, 'enc' => $encabezado, 'desc' => $descripcion, 'lf' => $lf, 'fondo' => $rutafondo, 'nombre1' => $nombre1, 'nombre2' => $nombre2, 'nombre3' => $nombre3, 'cargo1' => $cargo1, 'cargo2' => $cargo2, 'cargo3' => $cargo3, 'sociedad1' => $sociedad1, 'sociedad2' => $sociedad2, 'sociedad3' => $sociedad3, 'logo1' => $logo1, 'logo2' => $logo2, 'logo3' => $logo3, 'logo4' => $logo4, 'logo5' => $logo5, 'txco' => $txco); 
            
                // use key 'http' even if you send the request to https://... 
                $options = array('http' => array(
                 'method' => 'POST', 
                 'content' => http_build_query($data) 
                )); 
                
                $context = stream_context_create($options); 
                $html = file_get_contents($url, false, $context); 
    
                 //instancia
                 $dompdf = new DOMPDF(); 
                
                 $dompdf->set_paper("letter", "landscape");
                 $dompdf->load_html($html); 
                 $dompdf->render();
                 //$dompdf->stream($nombre.'.pdf');//descarga el archivo
                 //guardar el archivo en directorio
                 $output = $dompdf->output();
                 $fichero = 'PDF$/';
                 file_put_contents($fichero.$nombre.".pdf", $output);
                 
                 
                   function file_get_contents_curl($url) 
                    {
                      $crl = curl_init();
                      $timeout = 5;
                      curl_setopt($crl, CURLOPT_URL, $url);
                      curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
                      curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
                      $ret = curl_exec($crl);
                      curl_close($crl);
                      return $ret;
                    }
                   
                    $filename = $nombre.".pdf"; // el nombre con el que se descargará, puede ser diferente al original
                                /*header("Content-Type: application/octet-stream");*/
                    header("Content-Type: application/force-download");
                    header("Content-Disposition: attachment; filename=\"$filename\"");
                    readfile($fichero.$nombre.".pdf");
 
                    
?>




