<?php

$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
$subcategoria = filter_var($_POST['subcategoria'], FILTER_SANITIZE_STRING);
$descripcion = $_POST['descripcion'];

include 'conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO descripciones (categoria, subcategoria, descripcion) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $categoria, $subcategoria, $descripcion);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        $response = array(
            'response' => 'correct',
            'categoria' => $categoria,
            'subcategoria' => $subcategoria,
            'descripcion' => $descripcion,
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