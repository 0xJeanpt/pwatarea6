<?php
include "../php/validar_rol.php";
if (!tieneRol(1)) { echo "Acceso denegado."; exit(); } // 1 para admin
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido, Administrador</h1>
        <p>Desde aquí puedes gestionar usuarios y supervisar el sistema.</p>
        <a href="../php/logout.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>
