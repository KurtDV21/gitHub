<?php

$host = 'localhost';
$db = 'login_db';
$user = 'root';
$pass = '';
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
    echo json_encode(['status' => 'success', 'message' => 'Login successful'])  ;
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid credentials']);
}

?> 