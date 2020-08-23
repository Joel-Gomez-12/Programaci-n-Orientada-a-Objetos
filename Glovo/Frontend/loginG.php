<?php
  session_start();
  if (!isset($_SESSION["token"]))
      header("Location: 401Glovo.html");

  if (!isset($_COOKIE["token"]))   
      header("Location: 401Glovo.html"); 

  if ($_SESSION["token"] != $_COOKIE["token"])
      header("Location: 401Glovo.html");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida a domicilio y más. !Tú pide, ya vamos nosotros! | Glovo</title>
    <link rel="shortcut icon" href="img/Gl.png" type="image/png">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ebc08401e1.js" crossorigin="anonymous"></script>

</head>
<body style="font-family: font-family: Gotham,Arial,Helvetica Neue,Helvetica,sans-serif;">
    <header>
        <nav id="op" class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            
            <p  id="parrafo" style="margin-top: 30px; margin-left: 50px;"><img onclick="buscar()" id="lupa" src="img/search.svg" alt="">     ¿Qué necesitas?</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <form id="porfa" class="form-inline">
                <div>
                  <div>
                    <div>
                      <img src="img/ubicacion.svg">
                      <div style="margin-left: 25px; margin-top: -25px;">
                        <span style="color:#fff; font-size: 14px;">Dirección</span>
                        <div style="margin-top: -10px;"><span style="color:#fff; font-size: 12px;">Sin detalles</span></div>
                      </div>
                      <div style="    margin-top: -40px; margin-left: 95px;">
                        <span style="cursor: pointer;" onclick="abrirInfo()">
                          <img src="img/perfil-login.svg">
                        </span>
                        <span style="margin-left: 15px;">
                          <img src="img/login-.svg">
                        </span>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>
          </nav>
    </header>
    <div style="background-color: #FFC244;">
      <span>
        <section>
          <div class="container">
            <div>
              <div id="posicion">
                <img src="img/logo.svg" alt="">
              </div>
              <h1 style="text-align: center; margin-top: 40px;">
                <span style="color: white; font-size: 60px;">
                  Lo que sea en
                  <span style="color: #2abb9b; cursor: pointer;" >
                    Tegucigalpa
                    <img  src="img/drop.svg" alt="">
                  </span>
                  <span style="font-size: 48px;">Entrega en unos minutos</span>
                </span>
              </h1>
            </div>
              <section style="margin-top: 60px;">
                <div id="local" class="row" style="margin-left: 140px;">
                  
                </div>
                
              </section>
          </div>
        </section>
      </span>
      <img style="margin-top: 80px;" src="img/curve.svg" alt="">
      

    </div>
    <div>
      <div style="text-align: center; font-size: 2em; color: black; font-weight: 600;">Lo más destacado en tu ciudad</div>
      <p style="font-size: 18px; color: #9b9b9b; text-align: center;">Descubre las tiendas más solicitadas y pídenos que te entreguemos lo que desees.</p>
    </div>
    <div class="container-fluid">
      <div  id="tienda" class="row">
        
        
      </div>
    </div>

    <div  style="margin-top: 80px; background-image: url(img/fondo-image.webp), linear-gradient(90deg,  rgb(255, 255, 255), rgb(255, 194, 68));  height: 400px;" class="row imagen-div-fondo" style="position: relative; ">
      
      <div >
        
        <img style="margin-top: -35px; margin-left: 45px;" id="telefono" src="img/pagina2.webp">
      </div>
      <div style="display: block;" >
        <h2 id="texto-pag-2">
          <span style="margin-left: -35px;">Sigue tus entregas</span><br>
          <span>
            con la
            <span style="color: #2abb9b;">Glovo App</span>
          </span>
        </h2>
        <p id="progreso">
          <span>
            Ver el progreso de tus entregas
          </span><br>
          <span style="margin-left: 15px;">en tiempo real y donde quieras</span>
        </p>
        <div id="appstore">
          <a href="https://www.apple.com/la/ios/app-store/">
            <img id="enlaces-store" src="img/App-store.svg" >
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.glovo">
            <img id="enlaces-store" src="img/play-store.svg" >
          </a>
        </div>
        
      </div>
        
      
    </div>
    <div id="principal-negocio">
      <div class="container div-negocio"> 
        <div class="row">
          <div class="espacio col-8" >
              <div style="margin-left: 57px;">
                <img style="max-width: 100%; margin-bottom: 15px;" src="img/negocio.svg" alt="">
              </div>
              <div id="texto-ne">
                La mejor manera de planificar y organizar las entregas de tu negocio.
              </div>
              <div style="margin-left: 57px;">
                <a id="buton-selec" href="Pagina_negocio/negocio.html">Empezar</a>
              </div>
              
          </div>
          <div class="espacio-2 col-4" style="background-image: url(img/2.png);">
            <img style="margin-left: -40px;" src="img/centro-pag-3.svg">
      
          </div> 
        </div> 
      </div>
      
    </div>
    <div style="margin-top: 50px; margin-left: 30px;">
      <div style="color: black; font-size: 36px; font-weight: 600; ">
        ¡Estamos construyendo Glovo juntos!
      </div>
      <div class="container-fluid">
        <div id="repartir" class="row">
          
        </div>
      </div>
    </div>
    <footer>
      <div>
        <img style="background-color: #303030; transform: rotate(180deg);  margin-top: 50px;" src="img/curve.svg" alt="">
        <div style="background-color: #303030;" class="container-fluid">
          <div class="row">
            <div class="col-2">
              <img src="img/glovo.svg" alt=""><br>
              <a style="margin-top: 18px; color: white; text-decoration: none;" href="">Sobre nosotros</a>
          </div>
          <div class="col-2">
            <div style="color: #4a4a4a;">Únete a nosotros</div>
            <a style="color: white; text-decoration: none" href="">Carreras</a>
            <a style="color: white; text-decoration: none" href="">Establecimientos asociados</a>
            <a style="color: white; text-decoration: none" href="">Repartidores</a><br>
            <a style="color: white; text-decoration: none" href="">Glovo Business</a>
        </div>
        <div class="col-2">
            <div style="color: #4a4a4a;">Ayuda</div>
            <a style="color: white; text-decoration: none" href="">Preguntas Frecuentes</a>
            <a style="color: white; text-decoration: none" href="">Contáctanos</a>
        </div>
        <div class="col-2">
            <div style="color: #4a4a4a;">Legal</div>
            <a style="color: white; text-decoration: none" href="">Términos y condiciones</a><br>
            <a style="color: white; text-decoration: none" href="">Politica de privacidad</a><br>
            <a style="color: white; text-decoration: none" href="">Política de Cookies</a>
        </div>
        <div class="col-2">
            <div style="color: #4a4a4a;">Síguenos</div>
            <a style="color: white; text-decoration: none" href="">Facebook</a><br>
            <a style="color: white; text-decoration: none" href="">Twitter</a><br>
            <a style="color: white; text-decoration: none" href="">Instagram</a>
        </div>
        

          </div>
          <div style="height: 180px;">
            <div style="margin-top: 50px;">
                <div>
                    <input id="input-footer"  type="text" placeholder="Language" value="Español (Internacional)">
                    <span>
                        <span>
                            <i>
                               <img src="img/drop.svg" alt="">
                            </i>
                        </span>
                    </span>
                
                </div>
            </div>
        </div>
        </div>
      </div>
      
    
    </footer> 



    <div class="modal" tabindex="-1" id="ventana-login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span style="font-size: 14px;">PERFIL</span>
          </div>
          <div class="modal-body">
            <div>
              <span style="color: #2abb9b; position: absolute; margin-left: 420px;font-weight: 600;">Editar</span>
              <div style="color: rgba(0,0,0,.4);">Nombre</div>
              <div><span style="color: #606266;" ><?php echo $_COOKIE["nombre"] ?></span></div>
              <div style="color: rgba(0,0,0,.4);">Email</div>
              <div><span style="color: #606266;"><?php echo $_COOKIE["correo"] ?></span></div>
              <hr>
            </div>
            <div>
              <span style="color: #2abb9b; position: absolute; margin-left: 420px;font-weight: 600;">Editar</span>
              <div style="color: rgba(0,0,0,.4);">Teléfono</div>
              <span style="color: #ffca43; font-size: 13px; font-family: Gotham-Medium,Arial;">¿Tu número de teléfono?</span>
              <hr>
            </div>
            <div>
              <span style="color: #2abb9b; position: absolute; margin-left: 420px;font-weight: 600;">Editar</span>
              <div style="color: rgba(0,0,0,.4);">Contraseña</div>
              <span class="ovalo-login"></span>
              <span class="ovalo-login"></span>
              <span class="ovalo-login"></span>
              <span class="ovalo-login"></span>
              <span class="ovalo-login"></span>
              <span class="ovalo-login"></span>
              <hr>
            </div>
            <div>
              <span style="color: #2abb9b; position: absolute; margin-left: 420px;font-weight: 600;">Crear</span>
              <div style="color: rgba(0,0,0,.4);">Tarjeta</div>
              <span style="color: #ffca43; font-size: 13px; font-family: Gotham-Medium,Arial;">¿Tu tarjeta de credito</span>
              <hr>
            </div>
            <div>
              <span style="color: #2abb9b; position: absolute; margin-left: 420px;font-weight: 600;">Añadir</span>
              <div style="color: rgba(0,0,0,.4);">Código promocional</div>
              <div><span style="color: #606266;">-</span></div>
              <hr>
            </div>
            <div>
              <a href="logout.php"><span style="color: #2abb9b; font-size: 14px; font-weight: 500;margin-left: 380px; text-decoration:none;">Cerrar sesión</span></a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>

