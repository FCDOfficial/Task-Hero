<?php
session_start();

require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    $_SESSION['login_error'] = "Email dan password wajib diisi.";
    header("Location: login.php");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['login_error'] = "Format email tidak valid.";
    header("Location: login.php");
    exit;
}

try {

    $stmt = $pdo->prepare("
        SELECT *
        FROM users
        WHERE email = ?
        LIMIT 1
    ");

    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {

        $_SESSION['login_error'] = "Email atau password salah.";
        header("Location: login.php");
        exit;
    }

    session_regenerate_id(true);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['xp'] = $user['xp'] ?? 0;
    $_SESSION['level'] = $user['level'] ?? $user['level_user'] ?? 1;
    $_SESSION['role'] = $user['role'] ?? 'user';

    header("Location: ../pages/Dashboard.php");
    exit;

} catch (PDOException $e) {

    $_SESSION['login_error'] = "Terjadi kesalahan server.";
    header("Location: login.php");
    exit;

}