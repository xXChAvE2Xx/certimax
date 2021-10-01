<?php
session_start();
  if (!isset($_SESSION['loggedin'])) {
    header('Location: /sesion/index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>

    <script type="module" src="../pwabuilder-sw-register.js">
    
        
    </script>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000"/>
    
    <link rel='manifest' href='manifest.json'>

    <link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "recursos/logicon.png">
    
    <title>CREACION DE FORMULARIO</title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <scrip src="../pwabuilder-sw.js"></scrip>
     <script>
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
  
  <style>
   /*modal-body*/
    .modal-body{overflow-y:auto}
    .modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}

    /*modal-content*/
    .modal-content{max-height:calc(100vh - 1rem)}
    .modal-content{max-height:none}
    .modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}
    .modal-content{max-height:calc(100vh - 3.5rem)}
  /*/////////////////////////////////////////**/
  
  
  
  
  
  
    .label
    {
      color:white;
    }
    body
    {
       background-color:black;
       background-position: center center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
    }
    #form
      {
          background-color: rgba(0, 0, 0, 0.5);
      }
    Input:Focus
    {
     Background-color: black;
     color: #c2ac0e;
    }
    Textarea:Focus
    {
     Background-color: black;
     color: #c2ac0e;
    }
    
    #we:hover
    {
      background-color:black;
      color:#c2ac0e;
    }
    #we
    {
      color:white;
    }
    #we:focus
    {
     background-color:black;
     color: white;
    }
    
    .navbar-menu
    {
      background-color:black;
    }
    .navbar-brand
    {
      background-color:black;
    }
    .navbar-burger
    {
     color:#c2ac0e;
    }
    #submit
    {
     background-color:black;
     color:#c2ac0e;
    }
    #submit:hover:focus
    {
     background-color:#c2ac0e;
     color:black;
    }
    .file-input:name
    {
     display:block;
    }
    #dev
    {
     
     position:absolute;
     float:left;
     margin-left:150px;
    }
    #pet
    {
     position:absolute;
     float:right;
     margin-left:1450px;
    }
    #inf
    {
     position:absolute;
     margin-left:735px;
    }

    /* FOOTER 
    Crea tres columnas iguales que flotan una al lado de la otra */
    .column {
      float: left;
      width: 33.33%;
      padding: 10px;
      text-align:center;
    }
    
    /* Borrar los flotadores después de las columnas */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Diseño responsivo: hace que las tres columnas se apilen una encima de otra en lugar de una al lado de la otra  */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }
 /*Fin Footer*/
 
   
  
    @media (min-width: 1281px)
    {
        #logosin
        {
            margin-left:85px;
        }
        #linf1/*nombres*/
        {
           position:absolute;  
           margin-left:16%;
        }
        #linf2/*cargos*/
        {
             margin-left:50%;
            position:absolute; 
        }
        #linf3/*sociedades*/
        {
             margin-left:73%;
        }
        #labelad
        {
           
            display:none;
        }
        
        #ladmin
        {
            margin-left:6%;
        }
        #fondo
        {
            margin-left:9%;
        }
      #form
      {
          padding:50px;
          padding-left:5px;
          margin-right:480px;
          margin-left:480px;
      }
      #exampleModalCenter
       {
           margin-top:14%;
           margin-left:35%;
           height:300px;
           width:500px;
       }
       #cargando
       {
         margin-left:87px;
         height:300px;
         width:300px;
       }
    }
    
    @media (min-width: 768px) and (max-width: 1024px)/*tablets*/
    {
         #linf1,#linf2,#linf3
        {
          display:none;
        }
        
      #form
      {
         padding:50px;
         padding-left:40px;
         margin-right:50px;
         margin-left:50px; 
         
      }
       #exampleModalCenter
       {
           margin-left:5%;
           margin-top:50%;
           width:680px;
       }
       #cargando
       {
         margin-left:280px;
         height:100px;
         width:100px;
       }
    }
  
      
      #forml{
          margin-top:0.5%;
          margin-bottom:0.5%;
      }
      
    @media (min-width: 320px) and (max-width: 480px)/*celulares*/
    {
       #linf1,#linf2,#linf3
        {
          display:none;
        }
        #fondo
        {
            margin-left:16%;
        }
      #exampleModalCenter
       { 
           /*border-radius:20px;*/ 
           margin-top:80%;
           margin-left:11%;
           height:50px;
           width:250px;
       }  
       #cargando
       {
         margin-left:90px;
         height:50px;
         width:50px;
       }
        
      #ry
      {
        display:none; 
      }
      #form
      {
         padding:50px;
         padding-left:40px;
         margin-right:30px;
         margin-left:30px; 
      }
      #we
      {
        color:#c2ac0e;
      }
    }
  
  
  </style>
</head>
<?php
include '../sesion/databaseconnect.php'; 
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {

	die("Connection failed: " . mysqli_connect_error());
}


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$key =  substr(str_shuffle($permitted_chars), 0, 30);
$callsing = $_SESSION['callsing'];
//echo $key; 
//echo "  Call Sing: ";
//echo $_SESSION['callsing'];

$query = "UPDATE usuarios SET llave = '$key' WHERE numUsuario = '$callsing'";
if (mysqli_query($conn, $query)){
	//echo "Funciono";?>		
<body bgcolor="black" background="https://images5.alphacoders.com/523/thumb-1920-523521.jpg">
     
<!-- NavBar Inicio-->
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="formulario.php">
          <img src="recursos/logo.gif" width="50" height="300">
        </a>
    
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <!--<a class="navbar-item" href="https://ycertimaxy.000webhostapp.com/certimax/formulario.php">
            <i class="fas fa-home"></i>
            Inicio
          </a>-->
    
          <a id="we" class="navbar-item" href="../crear_enlace.php">
              <i  class="fab fa-wpforms"></i>&nbsp;
           Crear Formulario
          </a>
    
          
    <!--../datos.php-->
              <a id="we" class="navbar-item" href="../datos.php">
                  <i  class="fas fa-database"></i>&nbsp;
                Ver Datos Almacenados
              </a>
              
              <a id="we" class="navbar-item" href="formulario.php">
                <i class="fab fa-wpforms"></i>&nbsp;
                Formulario Reconocimientos
              </a>
        
          </div>
        </div>
      </div>
    </nav>
<!-- NavBar Fin-->
<div id="forml"><!--margen del formulario parte superior-->
<center>
    <div id="form">
    	<p style="color: white;">Comparta el siguiente enlace a las personas que desea que contesten el formulario.</p><br>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Enlace:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input id="copyTarget" class="input" type="text" value="<?php echo 'https://certimax.ml/certimax/form_participantes.php?key='.$key.'&usr='.$callsing ?>">
                    <span class="icon is-small is-left">
                        <i class="fas fa-link"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <span style="color: white;" id="msg"></span><br>
		    <button id="copyButton" class="button is-success is-rounded">COPIAR</button>
    </div>
   <div id="ry" style="padding-top:630px;"></div>
   <!--modal-->
        
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
<script src="../js/copiar.js"></script>
</html>
<?php }else{
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>