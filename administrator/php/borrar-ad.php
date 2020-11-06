<?php 

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$archivo = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);

include 'conn.php';

        if($archivo){

            unlink('../../uploads/publ/'. $archivo);
            
            try {
                $stmt = $conn->prepare("DELETE FROM ads WHERE id = ?");  
                $stmt->bind_param("i", $id);
                $stmt->execute();
                if ($stmt->affected_rows == 1) {
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
            
            } catch(Exception $e) {
                $response = array(
                    'error' => $e-getMessage()
                );
            }
        

        }

echo json_encode($response);