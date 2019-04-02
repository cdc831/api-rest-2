<?php
    header('Content-Type: application/json;charset=UTF-8');
    header("Access-Control-Allow-Origin: *");

    if ($_GET['variable']=='categorias'){
        
        include_once 'db.php';

        $sql = 'SELECT * FROM '. $_GET['variable'];

        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $datos = $sentencia->fetchAll();

        echo json_encode($datos);

    }elseif ($_GET['variable']=='usuarios'){
        include_once 'db.php';

        $sql = 'SELECT * FROM '. $_GET['variable'];

        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $datos = $sentencia->fetchAll();

        echo json_encode($datos);
    }elseif ($_GET['variable']=='comentarios'){
        include_once 'db.php';

        $sql = 'SELECT * FROM '. $_GET['variable'];

        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $datos = $sentencia->fetchAll();

        echo json_encode($datos); 
        
    }elseif ($_GET['variable']=='noticias'){
        include_once 'db.php';

        $sql = 'SELECT * FROM '. $_GET['variable'];

        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $datos = $sentencia->fetchAll();

        echo json_encode($datos);         
        //print_r($datos);
    }else{
        echo 'Solicitud no encontrada';
    }

    



?>

