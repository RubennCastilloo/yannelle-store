<?php

$file = $_FILES['file'];
$fecha = date("Y-m-d H:i:s");

include 'conn.php';

$directorio = "../../uploads/files/";

    $stmt = $conn->prepare("SELECT id, archivo, fecha FROM archivos WHERE archivo = ?");
    $stmt->bind_param('s', $_FILES['file']['name']);
    $stmt->execute();
    $stmt->bind_result($id_db, $archivo_db, $fecha_db);
    $stmt->fetch();
        if($archivo_db){
            $response = array(
                'response' => 'existe'
            );

        } else {

            if(!is_dir($directorio)){
                mkdir($directorio, 0755, true);
            }
            if(move_uploaded_file($_FILES['file']['tmp_name'], $directorio . $_FILES['file']['name'] )) {
                $imagen_url = $_FILES['file']['name'];
                $imagen_resultado = "Se subio correctamente";
                    // $respuesta = array(
                    //     'resultado' => 'Correcto',
                    //     'url' => $imagen_url
                    // );
            } else {
                $respuesta = array(
                    'error' => error_get_last()
                );
            }

            try {
                $stmt = $conn->prepare("INSERT INTO archivos (archivo, fecha) VALUES (?, ?)");
                $stmt->bind_param('ss', $imagen_url, $fecha);
                $stmt->execute();
                if($stmt->affected_rows > 0){
                    $response = array(
                        'response' => 'correct',
                        'archivo' => $imagen_url,
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
}



echo json_encode($response);