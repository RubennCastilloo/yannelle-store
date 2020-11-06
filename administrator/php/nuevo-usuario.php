<?php 

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
$twitter = filter_var($_POST['twitter'], FILTER_SANITIZE_STRING);
$link_twitter = filter_var($_POST['linkTwitter'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$image = $_FILES['image'];

include 'conn.php';



$stmt = $conn->prepare("SELECT id, nombre, apellido, correo FROM usuarios WHERE correo = ?");
$stmt->bind_param('s', $mail);
$stmt->execute();
$stmt->bind_result($id_db, $nombre_db, $apellido_db, $correo_db);
$stmt->fetch();
    if($correo_db){
        $response = array(
            'response' => 'existe',
            'mail' => $correo_db
        );
    } else {
        
            $options = array(
                'cost' => 12
            );

            $hash = password_hash($password, PASSWORD_BCRYPT, $options);

            $directorio = "../uploads/profile/";

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
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, correo, twitter, link_twitter, password, perfil) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('sssssss', $name, $last_name, $mail, $twitter, $link_twitter, $hash, $imagen_url);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $response = array(
                    'response' => 'correct',
                    'name' => $name,
                    'last_name' => $last_name,
                    'mail' => $mail,
                    'id' => $stmt->insert_id,
                    'perfil' => $imagen_url
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