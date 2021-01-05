<?php 

$mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);

include 'conn.php';



$stmt = $conn->prepare("SELECT correo FROM suscripciones WHERE correo = ?");
$stmt->bind_param('s', $mail);
$stmt->execute();
$stmt->bind_result($mail_db);
$stmt->fetch();
    if($mail_db){
        $response = array(
            'response' => 'existe',
            'mail' => $mail_db
        );
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO suscripciones (correo) VALUES (?)");
            $stmt->bind_param('s', $mail);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $response = array(
                    'response' => 'correct',
                    'mail' => $mail,
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