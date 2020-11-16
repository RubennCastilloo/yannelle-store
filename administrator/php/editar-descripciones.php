<?php

$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
$subcategoria = filter_var($_POST['subcategoria'], FILTER_SANITIZE_STRING);
$descripcion = $_POST['descripcion'];
$id = filter_var($_POST['id'], FILTER_VALIDATE_INT);

include 'conn.php';


    try{
        $stmt = $conn->prepare("UPDATE descripciones SET categoria = ?, subcategoria = ?, descripcion = ? WHERE id = ?");
        $stmt->bind_param("sssi", $categoria,  $subcategoria,  $descripcion, $id);
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

echo json_encode($response);