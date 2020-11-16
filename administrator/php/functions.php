<?php

function obtenerUsuarios() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, nombre, apellido, correo, twitter, password, perfil FROM usuarios");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerArchivos() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, archivo, fecha FROM archivos");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerPublicaciones() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, titulo, fecha, editor, portada FROM publicaciones ORDER BY id DESC");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerPublicacionesCategorias($categoria, $subcategoria) {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM publicaciones WHERE categoria = '$categoria' AND subcategoria = '$subcategoria' ORDER BY id DESC");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerPublicacionesSubcategoriaPaginadas($categoria, $subcategoria, $primerDato, $segundoDato) {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, titulo, fecha, editor, portada FROM publicaciones WHERE categoria = '$categoria' AND subcategoria = '$subcategoria' ORDER BY id DESC LIMIT $primerDato, $segundoDato");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerAdsAdmin() {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM ads");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerDescripciones() {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM descripciones");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
} 

function obtenerPublicacionesPaginadas($primerDato, $segundoDato) {
    include 'conn.php';
    try{
            return $conn->query("SELECT * FROM publicaciones
            ORDER BY id DESC
            LIMIT $primerDato, $segundoDato");
    } catch(Exception $e) {
            echo "Error!!" . $e->getMessage() . "<br>";
            return false;
    }
}

function obtenerUsuario($id) {
    include 'conn.php';
    try{
            return $conn->query("SELECT nombre, apellido, correo, twitter, perfil FROM usuarios WHERE id = $id");
    } catch(Exception $e) {
            echo "Error!!" . $e->getMessage() . "<br>";
            return false;
    }
}

function obtenerDescripcion($id) {
    include 'conn.php';
    try{
         return $conn->query("SELECT * FROM descripciones WHERE id = $id");
    } catch(Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerDescripcionCategoria($categoria, $subcategoria) {
    include 'conn.php';
    try{
        return $conn->query("SELECT * FROM descripciones WHERE categoria = '$categoria' AND subcategoria = '$subcategoria' ORDER BY id DESC
        LIMIT 0, 1");
    } catch(Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerPublicacion($id) {
    include 'conn.php';
    try{
        return $conn->query("SELECT * FROM publicaciones WHERE id = $id");
    } catch(Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerPublicacionHeader($primerDato, $segundoDato) {
    include 'conn.php';
    try{
        return $conn->query("SELECT * FROM publicaciones
        ORDER BY id DESC
        LIMIT $primerDato, $segundoDato");
    } catch(Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerAds($ubicacion, $primerDato, $segundoDato) {
    include 'conn.php';
    try{
        return $conn->query("SELECT * FROM ads
        WHERE ubicacion = $ubicacion ORDER BY id DESC
        LIMIT $primerDato, $segundoDato");
    } catch(Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

function obtenerUltimasPublicaciones($num) {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM (
            SELECT * FROM publicaciones ORDER BY id DESC LIMIT $num
        ) sub
        ORDER BY id DESC");
    } catch (Exception $e) {
        echo "Error!" . $e->getMessage() . "<br>";
        return false;
    }
}