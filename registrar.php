<?php
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role_id = $_POST['role_id'];

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $password, $role_id]);

    header("Location: ../views/login.php");
}
