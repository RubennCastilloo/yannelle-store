<?php

$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$subtitulo = filter_var($_POST['subtitulo'], FILTER_SANITIZE_STRING);
$contenido = $_POST['contenido'];
$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
$subcategoria = filter_var($_POST['subcategoria'], FILTER_SANITIZE_STRING);
$cover = $_FILES['coverUpload'];
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
$tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
$cover_name = filter_var($_POST['coverName'], FILTER_SANITIZE_STRING);

include 'conn.php';

if($tipo === 'con') {

    unlink('../../uploads/files/'. $cover_name);

    $directorio = "../../uploads/files/";

            if(!is_dir($directorio)){
                mkdir($directorio, 0755, true);
            }
            if(move_uploaded_file($_FILES['coverUpload']['tmp_name'], $directorio . $_FILES['coverUpload']['name'] )) {
                $imagen_url = $_FILES['coverUpload']['name'];
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

    

    try{
        $stmt = $conn->prepare("UPDATE publicaciones SET titulo = ?, subtitulo = ?, portada = ?, contenido = ?, categoria = ?, subcategoria = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $titulo,  $subtitulo,  $imagen_url, $contenido, $categoria, $subcategoria, $id);
        $stmt->execute();
        if($stmt->affected_rows == 1){
            $response = array(
                'response' => 'correct'
            );
        } else {
            $response = array(
                'response' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e){
            $response = array(
                'error' => $e->getMessage()
            );
    }
}

if($tipo === 'sin') {


    try{
        $stmt = $conn->prepare("UPDATE publicaciones SET titulo = ?, subtitulo = ?, contenido = ?, categoria = ?, subcategoria = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $titulo,  $subtitulo, $contenido, $categoria, $subcategoria, $id);
        $stmt->execute();
        if($stmt->affected_rows == 1){
            $response = array(
                'response' => 'correct'
            );
        } else {
            $response = array(
                'response' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e){
            $response = array(
                'error' => $e->getMessage()
            );
    }
}

echo json_encode($response);