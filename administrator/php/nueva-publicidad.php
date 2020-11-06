<?php 

$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
$link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
$ubicacion = filter_var($_POST['ubicacion'], FILTER_SANITIZE_STRING);
$imagen = $_FILES['image'];
$fecha = date("d-m-Y"); 

include 'conn.php';

            $directorio = "../../uploads/publ/";

            if(!is_dir($directorio)){
                mkdir($directorio, 0755, true);
            }
            if(move_uploaded_file($_FILES['image']['tmp_name'], $directorio . $_FILES['image']['name'] )) {
                $imagen_url = $_FILES['image']['name'];
                $imagen_resultado = "Se subio correctamente";
                    // $respuesta = array(
                    //     'resultado' => 'Correcto',
                    //     'url' => $imagen_url
                    // );
            } else {
                $response = array(
                    'error' => error_get_last()
                );
            }
            
        try {
            $stmt = $conn->prepare("INSERT INTO ads (titulo, descripcion, link, ubicacion, imagen, fecha) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssssss', $titulo, $descripcion, $link, $ubicacion, $imagen_url, $fecha);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $response = array(
                    'response' => 'correct',
                    'titulo' => $titulo,
                    'fecha' => $fecha,
                    'imagen' => $imagen_url,
                    'ubicacion' => $ubicacion,
                    'id' => $stmt->insert_id
                );
            } else {
                $response = array(
                    'response' => 'error'
                );
            }
            $stmt->close();
            $conn->close();
        } 
    
    catch (Exception $e) {
        $response = array(
            'error' => $e->getMessage()
        );
    }


echo json_encode($response);