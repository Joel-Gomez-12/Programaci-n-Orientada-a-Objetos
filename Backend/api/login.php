<?php
        session_start();
        header("Content-Type: application/json");    
        include_once("../clases/class-registro.php");
        $_POST = json_decode(file_get_contents('php://input'), true);    
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST'://Verificar si el usuario existe
                $registro = RegistrarUsuario::verificarRegistro($_POST['correo'], $_POST['contrasena']);
                if ($registro){
                    //echo '{"CodigoResultado":1,"mensaje":"Usuario autenticado","token":"'.sha1(uniqid(rand(), true)).'"}';
                    $resultado = array(
                        "CodigoResultado"=>1,
                        "mensaje"=>"Usuario autenticado",
                        "token"=>sha1(uniqid(rand(), true))
                    );
                    $_SESSION["token"] = $resultado["token"];
                    setcookie("token",$resultado["token"],time()+(60*60*24*31), "/");
                    setcookie("nombre",$registro["nombre"],time() + (60*60*24*31), "/");  
                    setcookie("correo",$registro["correo"],time() + (60*60*24*31), "/");
                    echo json_encode($resultado);
                }else{
                    setcookie("token","",time() -1, "/");
                    setcookie("nombre","",time() -1, "/");  
                    setcookie("correo","",time() -1, "/");
                    echo '{"CodigoResultado":0,"mensaje":"Falló la autenticación. ¡Inténtalo de nuevo!"}';
                }
                    
            break;
                
        }




?>