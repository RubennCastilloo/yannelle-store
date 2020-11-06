<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
$twitter = filter_var($_POST['twitter'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);

include 'conn.php';

if($type === 'con') {

    $options = array(
        'cost' => 12
    );

    $hash = password_hash($password, PASSWORD_BCRYPT, $options);

    try{
        $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, correo = ?, twitter = ?, password = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $name,  $last_name,  $mail, $twitter, $hash, $id);
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

if($type === 'sin') {


    try{
        $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, correo = ?, twitter = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name,  $last_name,  $mail, $twitter, $id);
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