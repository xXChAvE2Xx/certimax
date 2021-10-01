<?php 
  include '../sesion/databaseconnect.php';
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
  }
  $key = $_GET['key'];
  $callsing = $_GET['usr'];

  $checkKey = "SELECT * FROM usuarios WHERE llave = '$key' AND numUsuario = '$callsing'";
  $result = $conn-> query($checkKey);

  $count = mysqli_num_rows($result);
  mysqli_close($conn);
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
    
    <title>CERTIMAX</title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <!-- <script src="../js/jquery.form.js"></script> -->
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

        $(document).on('change', 'input[type="file"]',function(){
    		// this.files[0].size recupera el tamaño del archivo
			// alert(this.files[0].size);
			
			var fileName = this.files[0].name;
			var fileSize = this.files[0].size;

			if(fileSize > 300000){
				$(this).parent().find(".file-name").html('Nombre Archivo');
				this.value = '';
				fileName = '';
				return false;
			}else{
				var ext = fileName.split('.').pop();
				// Convertimos en minúscula porque 
				// la extensión del archivo puede estar en mayúscula

				if(ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'txt'){
		            var filename = $(this).val().split('\\').pop();
		            $(this).parent().find(".file-name").html(filename);

				}else{

					console.log("Tipo de archivo NO permitido.");

					$(this).parent().find(".file-name").html('Nombre Archivo');
					this.value = ''; // reset del valor
					fileName = '';
					return false;
				}
			}
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
          margin-top:2%;
          margin-bottom:3%;
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
  <script>
  $(document).ready(function(){
    var key = $('.key').val().length;

    if (key == 0) {
      $('.formulario').hide();
      $('#form').html("<div id='ry' style='padding-top:100px;'></div><section class='section'><div class='container'><h1 class='title' style='color: white;'>Hubo un problema</h1><h2 class='subtitle' style='color: white;'>Ocurrió un problema al cargar el formulario. Asegúrate de haber copiado el enlace completo, si el problema continua hágaselo saber al dueño del enlace.</h2></div></section><div id='ry' style='padding-top:215px;'></div>");
    }

    <?php if(isset($_GET["e"]) && $_GET["e"] == 'true'){ ?>
        $("#error").text("Ocurrió un problema al enviar el formulario, vuela a intentarlo.")
    <?php } ?>
  })
</script>
</head>
<body bgcolor="black" background="https://wallpaperaccess.com/full/301760.jpg">
<?php 
if (isset($_GET['key']) && $count == 1) {
?>
<!-- NavBar Inicio
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
          <a class="navbar-item" href="https://ycertimaxy.000webhostapp.com/certimax/formulario.php">
            <i class="fas fa-home"></i>
            Inicio
          </a>
    
          <a id="we" class="navbar-item" href="../up_excel.php">
              <i  class="fas fa-file-upload"></i>&nbsp;
           Subir Archivo
          </a>
    
          
    ../datos.php
              <a id="we" class="navbar-item" href="../datos.php">
                  <i  class="fas fa-database"></i>&nbsp;
                Ver Datos Almacenados
              </a>
              
              <a id="we" class="navbar-item" href="vistaprevia.php">
                <i  class="fas fa-eye"></i>&nbsp;
                Vista previa
              </a>
        
          </div>
        </div>
      </div>
    </nav>
 NavBar Fin-->
<div id="ry" style="padding-top:10px;"></div>
<div id="forml"><!--margen del formulario parte superior-->
<center>
    <div id="form">
    <form action="form_envio.php" method="post" enctype="multipart/form-data" class="formulario">
      <div class="container is-max-desktop" >
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Name / Nombre:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input id="nombre" class="input" type="text" name="nombre" placeholder="Raul Antonio" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Last name / Apellidos:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input id="apellidos" class="input" type="text" name="apellidos" placeholder="Chavez Aguirre" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Call Sing / Indicaivo:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input id="callsing" class="input" type="text" name="callsing" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-id-badge"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Email / Correo:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input id="email" class="input" type="email" name="email" placeholder="example@example.com" required>
                    <span class="icon is-small is-left">
                        <i class="far fa-envelope"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Contry / País:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                   	<select name="pais" class="input" id="pais" required> 
						<option value="" id="0" selected="selected">Choose Contry / Elegir País</option>
						<option value="Afganistán" id="AF">Afganistán</option>
						<option value="Albania" id="AL">Albania</option>
						<option value="Alemania" id="DE">Alemania</option>
						<option value="Andorra" id="AD">Andorra</option>
						<option value="Angola" id="AO">Angola</option>
						<option value="Anguila" id="AI">Anguila</option>
						<option value="Antártida" id="AQ">Antártida</option>
						<option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
						<option value="Antillas holandesas" id="AN">Antillas holandesas</option>
						<option value="Arabia Saudí" id="SA">Arabia Saudí</option>
						<option value="Argelia" id="DZ">Argelia</option>
						<option value="Argentina" id="AR">Argentina</option>
						<option value="Armenia" id="AM">Armenia</option>
						<option value="Aruba" id="AW">Aruba</option>
						<option value="Australia" id="AU">Australia</option>
						<option value="Austria" id="AT">Austria</option>
						<option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
						<option value="Bahamas" id="BS">Bahamas</option>
						<option value="Bahrein" id="BH">Bahrein</option>
						<option value="Bangladesh" id="BD">Bangladesh</option>
						<option value="Barbados" id="BB">Barbados</option>
						<option value="Bélgica" id="BE">Bélgica</option>
						<option value="Belice" id="BZ">Belice</option>
						<option value="Benín" id="BJ">Benín</option>
						<option value="Bermudas" id="BM">Bermudas</option>
						<option value="Bhután" id="BT">Bhután</option>
						<option value="Bielorrusia" id="BY">Bielorrusia</option>
						<option value="Birmania" id="MM">Birmania</option>
						<option value="Bolivia" id="BO">Bolivia</option>
						<option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
						<option value="Botsuana" id="BW">Botsuana</option>
						<option value="Brasil" id="BR">Brasil</option>
						<option value="Brunei" id="BN">Brunei</option>
						<option value="Bulgaria" id="BG">Bulgaria</option>
						<option value="Burkina Faso" id="BF">Burkina Faso</option>
						<option value="Burundi" id="BI">Burundi</option>
						<option value="Cabo Verde" id="CV">Cabo Verde</option>
						<option value="Camboya" id="KH">Camboya</option>
						<option value="Camerún" id="CM">Camerún</option>
						<option value="Canadá" id="CA">Canadá</option>
						<option value="Chad" id="TD">Chad</option>
						<option value="Chile" id="CL">Chile</option>
						<option value="China" id="CN">China</option>
						<option value="Chipre" id="CY">Chipre</option>
						<option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
						<option value="Colombia" id="CO">Colombia</option>
						<option value="Comores" id="KM">Comores</option>
						<option value="Congo" id="CG">Congo</option>
						<option value="Corea" id="KR">Corea</option>
						<option value="Corea del Norte" id="KP">Corea del Norte</option>
						<option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
						<option value="Costa Rica" id="CR">Costa Rica</option>
						<option value="Croacia" id="HR">Croacia</option>
						<option value="Cuba" id="CU">Cuba</option>
						<option value="Dinamarca" id="DK">Dinamarca</option>
						<option value="Djibouri" id="DJ">Djibouri</option>
						<option value="Dominica" id="DM">Dominica</option>
						<option value="Ecuador" id="EC">Ecuador</option>
						<option value="Egipto" id="EG">Egipto</option>
						<option value="El Salvador" id="SV">El Salvador</option>
						<option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
						<option value="Eritrea" id="ER">Eritrea</option>
						<option value="Eslovaquia" id="SK">Eslovaquia</option>
						<option value="Eslovenia" id="SI">Eslovenia</option>
						<option value="España" id="ES">España</option>
						<option value="Estados Unidos" id="US">Estados Unidos</option>
						<option value="Estonia" id="EE">Estonia</option>
						<option value="c" id="ET">Etiopía</option>
						<option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
						<option value="Filipinas" id="PH">Filipinas</option>
						<option value="Finlandia" id="FI">Finlandia</option>
						<option value="Francia" id="FR">Francia</option>
						<option value="Gabón" id="GA">Gabón</option>
						<option value="Gambia" id="GM">Gambia</option>
						<option value="Georgia" id="GE">Georgia</option>
						<option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
						<option value="Ghana" id="GH">Ghana</option>
						<option value="Gibraltar" id="GI">Gibraltar</option>
						<option value="Granada" id="GD">Granada</option>
						<option value="Grecia" id="GR">Grecia</option>
						<option value="Groenlandia" id="GL">Groenlandia</option>
						<option value="Guadalupe" id="GP">Guadalupe</option>
						<option value="Guam" id="GU">Guam</option>
						<option value="Guatemala" id="GT">Guatemala</option>
						<option value="Guayana" id="GY">Guayana</option>
						<option value="Guayana francesa" id="GF">Guayana francesa</option>
						<option value="Guinea" id="GN">Guinea</option>
						<option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
						<option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
						<option value="Haití" id="HT">Haití</option>
						<option value="Holanda" id="NL">Holanda</option>
						<option value="Honduras" id="HN">Honduras</option>
						<option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
						<option value="Hungría" id="HU">Hungría</option>
						<option value="India" id="IN">India</option>
						<option value="Indonesia" id="ID">Indonesia</option>
						<option value="Irak" id="IQ">Irak</option>
						<option value="Irán" id="IR">Irán</option>
						<option value="Irlanda" id="IE">Irlanda</option>
						<option value="Isla Bouvet" id="BV">Isla Bouvet</option>
						<option value="Isla Christmas" id="CX">Isla Christmas</option>
						<option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
						<option value="Islandia" id="IS">Islandia</option>
						<option value="Islas Caimán" id="KY">Islas Caimán</option>
						<option value="Islas Cook" id="CK">Islas Cook</option>
						<option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
						<option value="Islas Faroe" id="FO">Islas Faroe</option>
						<option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
						<option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
						<option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
						<option value="Islas Marshall" id="MH">Islas Marshall</option>
						<option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
						<option value="Islas Palau" id="PW">Islas Palau</option>
						<option value="Islas Salomón" d="SB">Islas Salomón</option>
						<option value="Islas Tokelau" id="TK">Islas Tokelau</option>
						<option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
						<option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
						<option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
						<option value="Israel" id="IL">Israel</option>
						<option value="Italia" id="IT">Italia</option>
						<option value="Jamaica" id="JM">Jamaica</option>
						<option value="Japón" id="JP">Japón</option>
						<option value="Jordania" id="JO">Jordania</option>
						<option value="Kazajistán" id="KZ">Kazajistán</option>
						<option value="Kenia" id="KE">Kenia</option>
						<option value="Kirguizistán" id="KG">Kirguizistán</option>
						<option value="Kiribati" id="KI">Kiribati</option>
						<option value="Kuwait" id="KW">Kuwait</option>
						<option value="Laos" id="LA">Laos</option>
						<option value="Lesoto" id="LS">Lesoto</option>
						<option value="Letonia" id="LV">Letonia</option>
						<option value="Líbano" id="LB">Líbano</option>
						<option value="Liberia" id="LR">Liberia</option>
						<option value="Libia" id="LY">Libia</option>
						<option value="Liechtenstein" id="LI">Liechtenstein</option>
						<option value="Lituania" id="LT">Lituania</option>
						<option value="Luxemburgo" id="LU">Luxemburgo</option>
						<option value="Macao R. A. E" id="MO">Macao R. A. E</option>
						<option value="Madagascar" id="MG">Madagascar</option>
						<option value="Malasia" id="MY">Malasia</option>
						<option value="Malawi" id="MW">Malawi</option>
						<option value="Maldivas" id="MV">Maldivas</option>
						<option value="Malí" id="ML">Malí</option>
						<option value="Malta" id="MT">Malta</option>
						<option value="Marruecos" id="MA">Marruecos</option>
						<option value="Martinica" id="MQ">Martinica</option>
						<option value="Mauricio" id="MU">Mauricio</option>
						<option value="Mauritania" id="MR">Mauritania</option>
						<option value="Mayotte" id="YT">Mayotte</option>
						<option value="México" id="MX">México</option>
						<option value="Micronesia" id="FM">Micronesia</option>
						<option value="Moldavia" id="MD">Moldavia</option>
						<option value="Mónaco" id="MC">Mónaco</option>
						<option value="Mongolia" id="MN">Mongolia</option>
						<option value="Montserrat" id="MS">Montserrat</option>
						<option value="Mozambique" id="MZ">Mozambique</option>
						<option value="Namibia" id="NA">Namibia</option>
						<option value="Nauru" id="NR">Nauru</option>
						<option value="Nepal" id="NP">Nepal</option>
						<option value="Nicaragua" id="NI">Nicaragua</option>
						<option value="Níger" id="NE">Níger</option>
						<option value="Nigeria" id="NG">Nigeria</option>
						<option value="Niue" id="NU">Niue</option>
						<option value="Norfolk" id="NF">Norfolk</option>
						<option value="Noruega" id="NO">Noruega</option>
						<option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
						<option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
						<option value="Omán" id="OM">Omán</option>
						<option value="Panamá" id="PA">Panamá</option>
						<option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
						<option value="Paquistán" id="PK">Paquistán</option>
						<option value="Paraguay" id="PY">Paraguay</option>
						<option value="Perú" id="PE">Perú</option>
						<option value="Pitcairn" id="PN">Pitcairn</option>
						<option value="Polinesia francesa" id="PF">Polinesia francesa</option>
						<option value="Polonia" id="PL">Polonia</option>
						<option value="Portugal" id="PT">Portugal</option>
						<option value="Puerto Rico" id="PR">Puerto Rico</option>
						<option value="Qatar" id="QA">Qatar</option>
						<option value="Reino Unido" id="UK">Reino Unido</option>
						<option value="República Centroafricana" id="CF">República Centroafricana</option>
						<option value="República Checa" id="CZ">República Checa</option>
						<option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
						<option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
						<option value="República Dominicana" id="DO">República Dominicana</option>
						<option value="Reunión" id="RE">Reunión</option>
						<option value="Ruanda" id="RW">Ruanda</option>
						<option value="Rumania" id="RO">Rumania</option>
						<option value="Rusia" id="RU">Rusia</option>
						<option value="Samoa" id="WS">Samoa</option>
						<option value="Samoa occidental" id="AS">Samoa occidental</option>
						<option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
						<option value="San Marino" id="SM">San Marino</option>
						<option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
						<option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
						<option value="Santa Helena" id="SH">Santa Helena</option>
						<option value="Santa Lucía" id="LC">Santa Lucía</option>
						<option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
						<option value="Senegal" id="SN">Senegal</option>
						<option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
						<option value="Sychelles" id="SC">Seychelles</option>
						<option value="Sierra Leona" id="SL">Sierra Leona</option>
						<option value="Singapur" id="SG">Singapur</option>
						<option value="Siria" id="SY">Siria</option>
						<option value="Somalia" id="SO">Somalia</option>
						<option value="Sri Lanka" id="LK">Sri Lanka</option>
						<option value="Suazilandia" id="SZ">Suazilandia</option>
						<option value="Sudán" id="SD">Sudán</option>
						<option value="Suecia" id="SE">Suecia</option>
						<option value="Suiza" id="CH">Suiza</option>
						<option value="Surinam" id="SR">Surinam</option>
						<option value="Svalbard" id="SJ">Svalbard</option>
						<option value="Tailandia" id="TH">Tailandia</option>
						<option value="Taiwán" id="TW">Taiwán</option>
						<option value="Tanzania" id="TZ">Tanzania</option>
						<option value="Tayikistán" id="TJ">Tayikistán</option>
						<option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
						<option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
						<option value="Timor Oriental" id="TP">Timor Oriental</option>
						<option value="Togo" id="TG">Togo</option>
						<option value="Tonga" id="TO">Tonga</option>
						<option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
						<option value="Túnez" id="TN">Túnez</option>
						<option value="Turkmenistán" id="TM">Turkmenistán</option>
						<option value="Turquía" id="TR">Turquía</option>
						<option value="Tuvalu" id="TV">Tuvalu</option>
						<option value="Ucrania" id="UA">Ucrania</option>
						<option value="Uganda" id="UG">Uganda</option>
						<option value="Uruguay" id="UY">Uruguay</option>
						<option value="Uzbekistán" id="UZ">Uzbekistán</option>
						<option value="Vanuatu" id="VU">Vanuatu</option>
						<option value="Venezuela" id="VE">Venezuela</option>
						<option value="Vietnam" id="VN">Vietnam</option>
						<option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
						<option value="Yemen" id="YE">Yemen</option>
						<option value="Zambia" id="ZM">Zambia</option>
						<option value="Zimbabue" id="ZW">Zimbabue</option>
                   	</select>
                    <span class="icon is-small is-left">
                        <i class="fas fa-globe"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >File or Image / Archivo o Imagen:</label>
            </div>
            <div class="field-body">
                <div class="field">    
					<div class="file has-name">
						<label class="file-label">
							<input class="file-input" type="file" name="archivo" accept="image/*, .txt" required>
							<span class="file-cta">
								<span class="file-icon">
									<i class="fas fa-upload"></i>
								</span>
								<span class="file-label">
									Elija un Archivo
								</span>
							</span>
							<span class="file-name" style="background-color: white;">
								Nombre Archivo
							</span>
						</label>
					</div>
                </div>
                <input type="text" name="key" class="key" hidden value="<?php echo $_GET['key'] ?>">
                <input type="text" name="callsingE" hidden value="<?php echo $_GET['usr'] ?>">
                <label style="color: red;">maximum of 300 KB allowed for the file / máximo de 300 KB permitidos para el archivo</label>
            </div>
        </div>
      <!--fin logos-->
        <button class="button is-success is-rounded" type="submit" value="Enviar" id="enviar" >Enviar</button>
        
        </div>
        <strong style="color: red;" id="error"></strong>
        </div>
<?php 
        } else {?>
          <div id="ry" style="padding-top:100px;"></div>
    <div id="form"> 
       <section class="section">
        <div class="container">
          <h1 class="title" style="color: white;">Hubo un problema</h1>
          <h2 class="subtitle" style="color: white;">
            Ocurrió un problema al cargar el formulario. Asegúrate de haber copiado el enlace completo o de que no haya expirado, si el problema continua hágaselo saber al dueño del enlace.   
          </h2>
        </div>
      </section>
    </div>
    <div id="ry" style="padding-top:215px;"></div>
<?php  
}
?>
       <div id="ry" style="padding-top:210px;"></div>
       <!--modal-->
     </form>
    <script>
    </script>

</div>
</div>
</div>
</div>
</form>
</center>
</div>
</div>

 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-content"> 
      <div class="modal-body" style="background-color:#222222;">
            <img id="cargando" src="https://m.gifmania.com/Gif-Animados-Web/Imagenes-Botones-Web/Botones-Web-Naranjas/Boton-Naranja-Cargando-90777.gif">
      </div>
    </div>
</div>

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
</html>









