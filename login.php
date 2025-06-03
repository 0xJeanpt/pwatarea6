<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Hotel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center mt-5">
    <main class="form-signin w-100 m-auto">
        <form action="../php/login.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
            <input type="email" class="form-control mb-2" name="email" placeholder="Correo" required>
            <input type="password" class="form-control mb-2" name="password" placeholder="Contraseña" required>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
        </form>
    </main>
</body>
</html>
