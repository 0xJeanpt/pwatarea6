<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Hotel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center mt-5">
    <main class="form-signin w-100 m-auto">
        <form action="../php/registrar.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Registro de Usuario</h1>
            <input type="text" class="form-control mb-2" name="name" placeholder="Nombre" required>
            <input type="email" class="form-control mb-2" name="email" placeholder="Correo" required>
            <input type="password" class="form-control mb-2" name="password" placeholder="Contraseña" required>

            <select name="role_id" class="form-select mb-3" required>
                <option value="">Seleccionar Rol</option>
                <option value="1">Administrador</option>
                <option value="2">Gerente</option>
                <option value="3">Recepcionista</option>
                <option value="4">Cliente</option>
                <option value="5">Proveedor</option>
            </select>

            <button class="w-100 btn btn-lg btn-success" type="submit">Registrarse</button>
        </form>
    </main>
</body>
</html>
