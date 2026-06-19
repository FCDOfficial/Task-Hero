<?php
session_start();
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: register.php");
    exit;
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

if (
    empty($username) ||
    empty($email) ||
    empty($password) ||
    empty($confirm)
) {
    die("Semua field wajib diisi");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Format email tidak valid");
}

if ($password !== $confirm) {
    die("Password tidak cocok");
}

if (strlen($password) < 6) {
    die("Password minimal 6 karakter");
}

try {
    $stmt = $pdo->prepare("
        SELECT id
        FROM users
        WHERE email = ?
        LIMIT 1
    ");

    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        die("Email sudah digunakan");
    }

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $stmt = $pdo->prepare("
        INSERT INTO users
        (username, email, password, xp, level_user)
        VALUES (?, ?, ?, 0, 1)
    ");

    $stmt->execute([
        $username,
        $email,
        $hashedPassword
    ]);

    header("Location: login.php");
    exit;

} catch (PDOException $e) {
    die("Gagal registrasi: " . $e->getMessage());
}