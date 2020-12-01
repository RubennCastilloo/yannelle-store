<?php

$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$subtitulo = filter_var($_POST['subtitulo'], FILTER_SANITIZE_STRING);
$contenido = $_POST['contenido'];
$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
$subcategoria = filter_var($_POST['subcategoria'], FILTER_SANITIZE_STRING);
$editor = filter_var($_POST['editor'], FILTER_SANITIZE_STRING);
$twitter = filter_var($_POST['twitter'], FILTER_SANITIZE_STRING);
$link_twitter = filter_var($_POST['linkTwitter'], FILTER_SANITIZE_STRING);
$cover = $_FILES['coverUpload'];

date_default_timezone_set('America/Chihuahua');
$hoy = date("d-m-Y") . ', ' . date("g:i a"); 
// $hoy = fechaMx($fecha) . ' ' . date("g:i a");

// function fechaMx($fecha) {
//     $fecha = substr($fecha, 0, 10);
//     $numeroDia = date('d', strtotime($fecha));
//     $dia = date('l', strtotime($fecha));
//     $mes = date('F', strtotime($fecha));
//     $anio = date('Y', strtotime($fecha));
//     $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
//     $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
//     $nombredia = str_replace($dias_EN, $dias_ES, $dia);
//     $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
//     $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
//     $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
//     return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
//   }

include 'conn.php';

$stmt = $conn->prepare("SELECT id, titulo FROM publicaciones WHERE titulo = ?");
$stmt->bind_param('s', $titulo);
$stmt->execute();
$stmt->bind_result($id_db, $titulo_db);
$stmt->fetch();
    if($titulo_db){
        $response = array(
            'response' => 'existe',
            'titulo' => $titulo_db
        );
    } else {
        

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
            
        try {
            $stmt = $conn->prepare("INSERT INTO publicaciones (titulo, subtitulo, portada, contenido, categoria, subcategoria, fecha, editor, twitter, link_twitter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssssssssss', $titulo, $subtitulo, $imagen_url, $contenido, $categoria, $subcategoria, $hoy, $editor, $twitter, $link_twitter);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $response = array(
                    'response' => 'correct',
                    'titulo' => $titulo,
                    'editor' => $editor,
                    'fecha' => $hoy,
                    'id' => $stmt->insert_id,
                    'portada' => $imagen_url

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