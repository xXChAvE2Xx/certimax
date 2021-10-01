<?php 
	session_start();
	if (!isset($_SESSION['loggedin'])) {
		header('Location: /sesion/index.php');
	}
?>

<!DOCTYPE html>

<html>

<head>

	<title>CertiMax</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

  

<link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "certimax/recursos/logicon.png">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script type="text/javascript" src="js/filestyle.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>



  <script>

    $(document).ready(function() {
      //Evento que checa si se de clic en el icono de navbar burger
      $(".navbar-burger").click(function(){
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
      });

      $(".dropdown .button").click(function (){
          var dropdown = $(this).parents('.dropdown');
          dropdown.toggleClass('is-active');
          //dropdown.focusout(function() {
            //  $(this).removeClass('is-active');
          //});
      });
  });





    document.addEventListener('DOMContentLoaded', () => {

    // 1. Mostrar el nombre del archivo en la pagina

    let fileInputs = document.querySelectorAll('.file.has-name')

    for (let fileInput of fileInputs) {

      let input = fileInput.querySelector('.file-input')

      let name = fileInput.querySelector('.file-name')

      input.addEventListener('change', () => {

        let files = input.files

        if (files.length === 0) {

          name.innerText = 'No se seleccione un archivo'

        } else {

          name.innerText = files[0].name

        }

      })

    }



    // 2. Eliminar el nombre del archivo al cargar la pagina de nuevo

    let forms = document.getElementsByTagName('form')

    for (let form of forms) {

      form.addEventListener('reset', () => {

        console.log('a')

        let names = form.querySelectorAll('.file-name')

        for (let name of names) {

          name.innerText = 'No se seleccione un archivo'

        }

      })

    }

  })

  </script>

  <style>

    .label

    {

      color:white;

    }

    body

    {

      background-position: center center;

     background-repeat: no-repeat;

     background-attachment: fixed;

     background-size: cover;

    }

    #form

      {

          background-color: rgba(0, 0, 0, 0.5);

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

    /* Crea tres columnas iguales que flotan una al lado de la otra */

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

    

    @media (min-width: 1281px)

    {

      #form

      {

         

          padding:50px;

          padding-left:5px;

          margin-right:480px;

          margin-left:480px;

      }

    }

  

  </style>
</head>

<body background="https://wallpaperaccess.com/full/301760.jpg">

<!-- NavBar Inicio-->

<nav class="navbar" role="navigation" aria-label="main navigation">

  <div class="navbar-brand">

    <a class="navbar-item" href="index.php">

      <img src="certimax/recursos/logo.gif" width="50" height="300">

    </a>



    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">

      <span aria-hidden="true"></span>

      <span aria-hidden="true"></span>

      <span aria-hidden="true"></span>

    </a>

  </div>



  <div  id="navbarBasicExample" class="navbar-menu">

    <div class="navbar-start">

      <a  id="we" class="navbar-item" href="crear_enlace.php">

        <i  class="fab fa-wpforms"></i>&nbsp;

        Crear Formulario

      </a>

      <a  id="we" class="navbar-item" href="datos.php">

        <i  class="fas fa-database"></i>&nbsp;

        Ver Datos Almacenados

      </a>

      <a  id="we" class="navbar-item" href="certimax/formulario.php">

        <i class="fab fa-wpforms"></i>&nbsp;

        Formulario Reconocimientos

      </a>

      <a id="we" class="navbar-item" href="certimax/vistaprevia.php">
                <i  class="fas fa-eye"></i>&nbsp;
                Vista previa
        </a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="dropdown is-right">
          <div class="dropdown-trigger">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
              <span class="icon is-small">
                <i class="fas fa-user" aria-hidden="true"></i>
              </span>
            </button>
          </div>
          <div class="dropdown-menu" id="dropdown-menu6" role="menu">
            <div class="dropdown-content">
              <a href="#" class="dropdown-item">
                <?php echo $_SESSION['name'];?>
              </a>
              <a href="../sesion/cerrarsesion.php" class="dropdown-item">
                Cerrar Sesión
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</nav>

<!-- NavBar Fin-->