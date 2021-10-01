<?php 
  session_start();
  if (!isset($_SESSION['loggedin'])) {
    header('Location: /sesion/index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>

    <script type="module" src="../pwabuilder-sw-register.js"></script>
    <script src="../js/bootbox.js"></script>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000"/>
    
    <link rel='manifest' href='manifest.json'>

    <link rel = "icon" type = "imagen / png" tamaños = "144x144" href = "recursos/logicon.png">
    
    <title>CERTIMAX</title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="../js/jquery-3.6.0.js"></script>
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

          <?php if(isset($_GET["exito"]) && $_GET["exito"] == 'true'){ ?>
                    bootbox.alert("El envío de correo fue un exito.");
          <?php } ?>
          <?php if(isset($_GET["exito"]) && $_GET["exito"] == 'false'){ ?>
                    bootbox.alert({
                        message: "El envío de correo falló.",
                        callback: function () {
                            console.log('El servicio no esta disponible');
                        }
                    })
          <?php } ?>

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
</head>
<body bgcolor="black" background="https://wallpaperaccess.com/full/301760.jpg">
     
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
              
              <a id="we" class="navbar-item" href="vistaprevia.php">
                <i  class="fas fa-eye"></i>&nbsp;
                Vista previa
              </a>
        
          </div>
        </div>
      </div>
    </nav>
<!-- NavBar Fin-->
<div id="forml"><!--margen del formulario parte superior-->
<center>
    <div id="form">
    <form action="control.php" method="post" enctype="multipart/form-data">
      <div class="container is-max-desktop" >
        <!--<div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Nombre:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                    <input class="input" type="text" name="nombre" placeholder="John Smith">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>-->
        <!--<div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Correo:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                    <input class="input" type="text" name="correo" placeholder="JohnSmith@ucol.mx">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>-->
        <div class="field is-horizontal">
            <div class="field-label is-normal">  
                <label class="label" >Lugar y Fecha:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input1" class="input" type="text" name="lf" placeholder="Mexico, 1 Enero 2021"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal"> 
                <label class="label" >Encabezado:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                      
                    <textarea onInput="validar()" id="input2" class="textarea" name="enc" rows="2" cols="5" required></textarea>
                   
                   
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Descripción:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                    <textarea onInput="validar()" id="input3" class="textarea" name="desc" rows="2" cols="5" required></textarea>
                   
                    </p>
                </div>
            </div>
        </div>
        <label class="label" id="ladmin">Fondo y color</label>
        <div id="fondo" class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input4" class="file-input" type="file" name="fondo" placeholder="Fondo" accept="image/jpeg" required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            Elegir fondo
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
                 <div class="select">
                  <select name="txco">
                    <option value="0">Texto Negro</option>
                    <option value="1">Texto Blanco</option>
                  </select>
                </div>
            </div>
        </div>
       
          <!--wawa-->
         
                <label class="label" id="ladmin"> <font color="c2ac0e">Administración</font></label>
          <label class="label" id="linf1">Nombres</label>
          <label class="label" id="linf2">Cargos</label>
          <label class="label" id="linf3">Sociedades</label>
         <div id="administracion" class="field is-horizontal">
            <div class="field-label is-normal">  
                <label id="labelad" class="label" >Nombres:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input5" class="input" type="text" name="nombre1" placeholder="Nombre 1"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input6" class="input" type="text" name="nombre2" placeholder="Nombre 2"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input7" class="input" type="text" name="nombre3" placeholder="Nombre 3"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                </div>
            </div>
            
            
            <div class="field-label is-normal">  
                <label id="labelad"  class="label" >Cargos:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input8" class="input" type="text" name="cargo1" placeholder="Cargo 1"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input9" class="input" type="text" name="cargo2" placeholder="Cargo 2"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input10" class="input" type="text" name="cargo3" placeholder="Cargo 3"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                </div>
            </div>
           
            
            
            <div class="field-label is-normal">  
                <label  id="labelad"  class="label" >Sociedades:</label>
            </div>
            <div class="field-body">
                <div class="field">    
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input11" class="input" type="text" name="sociedad1" placeholder="Sociedad 1"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input12" class="input" type="text" name="sociedad2" placeholder="Sociedad 2"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                    <p class="control has-icons-left">
                    <input onInput="validar()" id="input13" class="input" type="text" name="sociedad3" placeholder="Sociedad 3"required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-file-signature"></i>
                    </span>
                    </p>
                </div>
            </div>
           
        </div>
       
      <!--logos-->
       <label class="label" id="ladmin"> <font color="c2ac0e">Logos</font></label>
        <div  id="logosin" class="field is-horizontal">
            
            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input14" class="file-input" type="file" name="logo1" placeholder="Fondo"  required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            logo 1
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
                <!--logo2-->
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input15" class="file-input" type="file" name="logo2" placeholder="Fondo"  required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            logo 2
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
                 <!--logo3-->
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input16" class="file-input" type="file" name="logo3" placeholder="Fondo"  required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            logo 3
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
                 <!--logo4-->
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input17" class="file-input" type="file" name="logo4" placeholder="Fondo"  required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            logo 4
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
                 <!--logo5-->
                <div class="field">
                    <p class="control has-icons-left">
                    <label class="file-label">    
                        <input  onInput="validar()" id="input18" class="file-input" type="file" name="logo5" placeholder="Fondo"  required>
                        <span class="file-cta">
                          <span class="file-icon">
                            <i class="fas fa-upload"></i>
                          </span>
                          <span class="file-label">
                            logo 5
                          </span>
                        </span>
                  </label>
                    </p>
                </div>
            </div>
        </div>
      <!--fin logos-->
        <button id="submit" class="button is-success is-rounded" type="submit" value="Enviar" data-toggle="modal" data-target="#exampleModalCenter" >Enviar</button>
        </div>
        </div>
       <div id="ry" style="padding-top:10px;"></div>
       <!--modal-->
        
          
        
     </form>
    <script>
    //if(document.getElementById("input4").name.length != null)
     document.getElementById('submit').disabled=true;
     function validar() //valida que se hayan rellenado todos los campos del formulario correctamente
            {
               if(
                  //datos
                  document.getElementById("input1").value.length != ""&&
                  document.getElementById("input2").value.length != ""&&
                  document.getElementById("input3").value.length != ""&&
                  document.getElementById("input5").value.length != ""&&
                  document.getElementById("input6").value.length != ""&&
                  document.getElementById("input7").value.length != ""&&
                  document.getElementById("input8").value.length != ""&&
                  document.getElementById("input9").value.length != ""&&
                  document.getElementById("input10").value.length != ""&&
                  document.getElementById("input11").value.length != ""&&
                  document.getElementById("input12").value.length != ""&&
                  document.getElementById("input13").value.length != ""&&
                  //logos
                  document.getElementById("input4").files[0].name != ""&&
                  document.getElementById("input14").files[0].name != ""&&
                  document.getElementById("input15").files[0].name != ""&&
                  document.getElementById("input16").files[0].name != ""&&
                  document.getElementById("input18").files[0].name != "")
                    {
                        document.getElementById('submit').disabled=false;
                    }
               else
                    document.getElementById('submit').disabled=true;
            }
            
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











