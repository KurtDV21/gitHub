<?php

$host = 'localhost';
$db = 'login_db';
$user = 'root';
$pass = '';
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $hashedPassword);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'User registered successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Registration failed']);
}

?>
