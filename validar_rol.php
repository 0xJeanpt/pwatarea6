<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../views/login.php");
    exit();
}

function tieneRol($rol_id_requerido) {
    return $_SESSION['user']['role_id'] == $rol_id_requerido;
}
