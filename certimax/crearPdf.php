<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
    header('Location: /sesion/index.php');
  }

  $key = $_SESSION['key'];
  $callsing = $_SESSION['callsing'];

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

          //recuperacion de recursos

          $encabezado  =  $_COOKIE["enc"];

          $descripcion =  $_COOKIE["desc"];

          $lugarfecha  =  $_COOKIE["lf"];

          $rutafondo   =  $_COOKIE["fondo"];

          //administracion

          $nombre1   =  $_COOKIE["n1"];

          $nombre2   =  $_COOKIE["n2"];

          $nombre3   =  $_COOKIE["n3"];

          $cargo1    =  $_COOKIE["c1"];

          $cargo2    =  $_COOKIE["c2"];

          $cargo3    =  $_COOKIE["c3"];

          $sociedad1   =  $_COOKIE["s1"];

          $sociedad2   =  $_COOKIE["s2"];

          $sociedad3   =  $_COOKIE["s3"];

          //logos

          $logo1   =  $_COOKIE["lg1"];

          $logo2   =  $_COOKIE["lg2"];

          $logo3   =  $_COOKIE["lg3"];

          $logo4   =  $_COOKIE["lg4"];

          $logo5   =  $_COOKIE["lg5"];

          //color texto

          $txco   =  $_COOKIE["txco"];

          

            $tamaño=0;

            $result=mysqli_query($con, "SELECT id, nombre, callsing, correo FROM form WHERE codigo = '$key' AND usr = '$callsing'");

            $i=0;
            //obtenemos los datos uno a uno desde DB
            while($row=mysqli_fetch_array($result))

            {

                $i++;

                $vnombres[$i]=$row["nombre"];

                $vswl[$i]=$row["callsing"];

                $vcorreos[$i]=$row["correo"];

                $vid[$i]=$row["id"];

                

            }

            

            $tamaño = $i;

            

            /*var_dump($vnombres);

            echo "<br>";

            var_dump($vswl);

            echo "<br>";

            var_dump($vcorreos);*/

          

           

             

             

             //Cargamos la librería dompdf que hemos instalado en la carpeta dompdf

            require_once 'dompdf/autoload.inc.php';

            use Dompdf\Dompdf;

            for($i=1;$i<=$tamaño;$i++)

            {

       

                   $nombre=$vnombres[$i];

                   $swl=$vswl[$i];

                   $correo=$vcorreos[$i];

                   $id=$vid[$i];

                  



                   /*echo $nombre.$swl.$correo;

                   echo"<br>".$i."<br>";*/

                   

        

            

                   //concatenacion

                   $nombre=$nombre."&nbsp;(".$swl.")";

                    /////////////////////llamar el reconocimiento.php enviandole las variables dinamicas

                    $url = 'https://ycertimaxy.000webhostapp.com/certimax/reconocimiento.php'; 

                    $data = array('nombre' => $nombre, 'enc' => $encabezado, 'desc' => $descripcion, 'lf' => $lugarfecha, 'fondo' => $rutafondo, 'nombre1' => $nombre1, 'nombre2' => $nombre2, 'nombre3' => $nombre3, 'cargo1' => $cargo1, 'cargo2' => $cargo2, 'cargo3' => $cargo3, 'sociedad1' => $sociedad1, 'sociedad2' => $sociedad2, 'sociedad3' => $sociedad3, 'logo1' => $logo1, 'logo2' => $logo2, 'logo3' => $logo3, 'logo4' => $logo4, 'logo5' => $logo5, 'txco' => $txco); 

                    

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

                 //$dompdf->stream($fichero.$swl.'.pdf');//descarga el archivo

                 

                 //guardar el archivo en directorio

                 $output = $dompdf->output();

                 $fichero = 'PDF$/';

                 file_put_contents($fichero.$correo.".pdf", $output); 

                     

                   /* function file_get_contents_curl($url) 

                    {

                      $crl = curl_init();

                      $timeout = 5;

                      curl_setopt($crl, CURLOPT_URL, $url);

                      curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);

                      curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);

                      $ret = curl_exec($crl);

                      curl_close($crl);

                      return $ret;

                    }*/

                    //eliminacion de correos uno a uno

                    /*$res2 = mysqli_query($con, "DELETE FROM `excel` WHERE id='$id'");

                    if (!$res2){}*/

                



                 /////////////////////////ENVIO DE CORREO/////

                    //PARA

                    $to = $correo;

                    //DE

                    $from = 'certimax2021@gmail.com';

                    $fromName = 'CERTIMAX';

                    //Asunto del email

                    $subject = 'RECONOCIMIENTO'; 

                    //Ruta del archivo adjunto

                    $file = "PDF$/".$correo.".pdf";

                    //Contenido del Email

                    $htmlContent = '<h1>ENTREGA DE RECONOCIMIENTO</h1>';

                    //Encabezado para información del remitente

                    $headers = "From: certimax2021@gmail.com";

                    //Limite Email

                    $semi_rand = md5(time()); 

                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

                    //Encabezados para archivo adjunto 

                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

                    //límite multiparte

                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .

                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

                    //preparación de archivo

                    if(!empty($file) > 0){

                        if(is_file($file)){

                            $message .= "--{$mime_boundary}\n";

                            $fp =    @fopen($file,"rb");

                            $data =  @fread($fp,filesize($file));

                    

                            @fclose($fp);

                            $data = chunk_split(base64_encode($data));

                            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 

                            "Content-Description: ".basename($files[$i])."\n" .

                            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 

                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

                        }

                    }

                    $message .= "--{$mime_boundary}--";

                    $returnpath = "-f" . $from;

                    

                    //Enviar EMail

                    $mail = @mail($to, $subject, $message, $headers, $returnpath); 

                    

                    //Estado de envío de correo electrónico
                    $mail?:header('location: https://certimax.ml/certimax/formulario.php?exito=false');

                    ////////////////////FIN ENVIO DE CORREO/////////////////////////////

                    

                     //eliminacion de correos uno a uno

                    $res2 = mysqli_query($con, "DELETE FROM form WHERE id='$id'");

                    if (!$res2){}

                    

                

            }

            

            header('location: https://certimax.ml/certimax/formulario.php?exito=true');

              

?>





















