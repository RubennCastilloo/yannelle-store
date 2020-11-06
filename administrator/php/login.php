<?php

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

include 'conn.php';

try {
    $sql = $conn->prepare("SELECT id, nombre, apellido, correo, twitter, password, perfil FROM usuarios WHERE correo = ?");
    $sql->bind_param('s', $email);
    $sql->execute();
    $sql->bind_result($id_db, $nombre_db, $apellido_db, $correo_db, $twitter_db, $password_db, $perfil_db);
    $sql->fetch();
    if ($correo_db) {
        if (password_verify($password, $password_db)) {
            session_start();
            $_SESSION['nombre'] = $nombre_db;
            $_SESSION['login'] = true;
            $_SESSION['apellido'] = $apellido_db;
            $_SESSION['twitter'] = $twitter_db;
            $_SESSION['id'] = $id_db;
            $_SESSION['perfil'] = $perfil_db;
            $_SESSION['correo'] = $correo_db;

            $response = array(
                'response' => 'correct'
            );
        } else {
            $response = array(
                'response' => 'badPassword'
            );
        }
    } else {
        $response = array(
            'response' => 'notExists'
        );
    }
    $sql->close();
    $conn->close();
} catch (Exception $e) {
    $response = array(
        'error' => $e->getMessage()
    );
}



echo json_encode($response);