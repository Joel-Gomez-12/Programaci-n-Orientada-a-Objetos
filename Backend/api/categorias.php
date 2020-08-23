<?php
    //echo 'Informacion: ' . file_get_contents('php://input');
    header("Content-Type: application/json");    
    include_once("../clases/class-categoria.php");    
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST'://Guardar
            
        break;
        case 'GET'://Obtener uno o varios usuarios
            if (isset($_GET['id'])){
                Categoria::obtenerCategoria($_GET['id']);
            }else{
                Categoria::obtenerCategorias();
            }
        break;
        case 'PUT':
            //actualizar
           
        break;
        case 'DELETE':
            //Eliminar
        break;
    }



?>
