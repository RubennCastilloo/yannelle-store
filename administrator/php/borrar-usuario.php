<?php 

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

include 'conn.php';

    try {
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");  
        $stmt->bind_param("i", $id);
        $stmt->execute();
        if ($stmt->affected_rows == 1) {
            $response = array(
                'response' => 'correcto'
            );
        } else {
            $response = array(
                'response' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    
    } catch(Exception $e) {
        $response = array(
            'error' => $e-getMessage()
        );
    }


echo json_encode($response);