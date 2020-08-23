<?php
  session_start();
  if (!isset($_SESSION["token"]))
      header("Location: ../401Glovo.html");

  if (!isset($_COOKIE["token"]))   
      header("Location: ../401Glovo.html"); 

  if ($_SESSION["token"] != $_COOKIE["token"])
      header("Location: ../401Glovo.html");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida a domicilio y más. ¡Tú pide, ya vamos nosotros! | Glovo</title>
    <link rel="stylesheet" href="../Pagina_pizza/css/estilos.css">
    <link rel="shortcut icon" href="../img/Gl.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <section>
                        <header style="padding: 35px 0;">
                            <div style="margin: 0 auto; width: 85%;">
                                <a href="">
                                    <img height="40px" src="../img/logo_pag_reg.svg">
                                </a>
                                <div style="margin-left: 760px; margin-top: -29px;">
                                    <div>
                                        <div>
                                          <div>
                                            <img src="../img/street-pizza.svg">
                                            <div style="margin-left: 25px; margin-top: -25px;">
                                              <span style="color: #2abb9b; font-size: 14px;">Dirección</span>
                                              <div style="margin-top: -10px;"><span style="color: #ffc244; font-size: 12px;">Sin detalles</span></div>
                                            </div>
                                            <div style="    margin-top: -40px; margin-left: 95px;">
                                              <span style="cursor: pointer;" onclick="abrirInfo()">
                                                <img src="../img/perfil-pizza.svg">
                                              </span>
                                              <span style="margin-left: 15px;">
                                                <img src="../img/oredenes-pizza.svg">
                                              </span>
                                            </div>
                                          </div>
                                          
                                        </div>
                                </div>
                            </div>
                        </header>
                        <section class="seccion-1">
                            <img class="imagen-pizza" src="../img/fondo-pizza.webp">
                        </section>
                        <div class="pedidos">
                            <div>
                                <div id="informacion-tienda">
                                    <div style="height: 300px;display: none;"></div>
                                    <div style="width: 100%; max-width: 800px;">
                                        <div>
                                            <div>
                                                <div>
                                                    <div class="pizza-hutt" style="animation-delay: 0ms;">
                                                        <div>
                                                            <section>
                                                                <div>
                                                                    <span>
                                                                        <span>
                                                                            <a href="../index.html">Inicio</a>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <span>
                                                                            <span>Comida</span>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <span>
                                                                            <a href="">
                                                                                <span>Restaurantes</span>
                                                                            </a>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <span>
                                                                            <span style="color: #ffc244!important;">Pizza Hut</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </section>
                                                            <h1 class="titulo-pizza">Pizza Hut</h1>
                                                        </div>
                                                    </div>
                                                    <div class="seleccionar" style="animation-duration: 300ms;">
                                                        <div id="seleccionar-1">
                                                            <div id="seleccionar-2">
                                                                <span id="seleccionar-3">Seleccionar</span>
                                                                <span id="seleccionar-4">
                                                                    <span id="seleccionar-5" style="font-size: 36px;">categoría de producto</span>
                                                                    
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section id="glovomania">
                                        <section style="    padding: 10px 0; flex-wrap: wrap;">
                                            <div>
                                                <section>
                                                    <div id="glovo-1">
                                                        <h3 id="titulo-mania">Glovomania</h3>
                                                        <a id="vermas" href="">Ver más</a>
                                                        
                                                    </div>
                                                    <div >
                                                        <div onclick="abrirVentas()" id="imagen-pi">
                                                            <div id="imeagen-cont">
                                                                <div>
                                                                    <img src="../img/comprar-pizza.webp" alt="">
                                                                    <h4>Pizza Mitad y Mitad</h4>
                                                                    <div id="descripcion">
                                                                        <span style="box-shadow: transparent 0px 0px;">
                                                                            <span>
                                                                                Deliciosa pizza Gigante Doble Sabor Mitad de Pepperoni, mitad Chorizo Italiano
                                                                              </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="precio">
                                                                <div id="pres-cant">L129,00</div>
                                                                <img src="../img/plus.svg" alt="">
                                                            </div>
                                                        </div>
                                                        <div style="margin-top: -420px;margin-left: 350px;" id="imagen-com-2">
                                                            <div id="imeagen-cont">
                                                                <div>
                                                                    <img src="../img/comprar-pizza-2.webp" alt="">
                                                                    <h4>Paquete Especial</h4>
                                                                    <div id="descripcion">
                                                                        <span style="box-shadow: transparent 0px 0px;">
                                                                            <span>
                                                                                Comparte este increíble paquete en donde estés y con quien estés Incluye
                                                                              </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="precio">
                                                                <div id="pres-cant">L269,00</div>
                                                                <img src="../img/plus.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>
                                    </section>
                                </div>
                                <div style="    margin-top: -840px; margin-left: 720px;" id="facturacion">
                                    <section id="fact-1">
                                        <section id="fact-2">
                                            <h1 id="titulo-fact">Tu glovo</h1>
                                            <div>
                                                <div>
                                                    <div>
                                                        <img style="margin-right: 5px;width: 25px;height: 24px;" src="../img/fact-icon.svg" alt="">
                                                        <span style="font-size: 16px; color: #000;">20-30 min</span>
                                                    </div>
                                                    <div>
                                                        <img src="../img/moto-black.svg" alt="">
                                                        <span>L39,00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <img src="../img/astronaut-disabled.svg" alt="">
                                                </div>
                                            </div>
                                        </section>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="ventana-veentas">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div>
                  <h1 class="modal-pedidos">Personalizar Pizza Mitad y Mitad</h1>
                  <section>
                      <img src="../img/comprar-pizza.webp" alt="">
                      <div>
                        <p>Deliciosa pizza Gigante Doble Sabor Mitad de Pepperoni, mitad Chorizo Italiano</p>
                        <span>L129,00</span>
                    </div>
                  </section>
                  
              </div>
            </div>
            <div class="modal-footer">
              
              <button type="button" id="boton" onclick="compraRealizada()" data-toggle="modal" data-target="#realizaExito">Añadir al pedido</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
        <div class="modal fade" id="realizaExito" tabindex="-1" aria-labelledby="realizaExitoLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                </div>
                <div class="modal-body">
                    <h3>Compra realizada con éxito</h3>
                </div>
                <div class="modal-footer">
                
            </div>
            </div>
        </div>

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
    
    <script src="../Pagina_pizza/js/controlador.js"></script>
</body>
</html>