<?php
        header("Content-Type: application/json");    
        include_once("../clases/class-registro.php");    
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST'://Guardar
                $_POST = json_decode(file_get_contents('php://input'), true);
                $registro = new RegistrarUsuario($_POST["nombre"], $_POST["correo"], $_POST["contrasena"]);
                $registro->guardarRegistro();
                $resultado["mensaje"] = "Guardar usuario, informacion:". json_encode($_POST);
                echo json_encode($resultado);
            break;
            case 'GET':
                if (isset($_GET['id'])){
                    $resultado["mensaje"] = "Retornar el usuario con el id: " . $_GET['id'];
                    RegistrarUsuario::obtenerRegistro($_GET['id']);
                }
                else{
                    RegistrarUsuario::obtenerRegistros();
                }
                    
            break;
            case 'PUT'://actualizar
               
            break;
            case 'DELETE'://Eliminar
               
            break;
        }




?>