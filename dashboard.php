<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$role_id = $_SESSION['user']['role_id'];

switch ($role_id) {
    case 1: header("Location: admin.php"); break;
    case 2: header("Location: gerente.php"); break;
    case 3: header("Location: recepcionista.php"); break;
    case 4: header("Location: cliente.php"); break;
    case 5: header("Location: proveedor.php"); break;
    default: echo "Rol no reconocido."; break;
}
?>
