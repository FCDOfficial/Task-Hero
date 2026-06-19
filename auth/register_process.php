<?php
session_start();

require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: register.php");
    exit;
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';

if (
    $username === '' ||
    $email === '' ||
    $password === '' ||
    $confirm === ''
) {

    $_SESSION['register_error'] = "Semua field wajib diisi.";

    header("Location: register.php");
    exit;
}

if (strlen($username) < 3) {

    $_SESSION['register_error'] = "Username minimal 3 karakter.";

    header("Location: register.php");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $_SESSION['register_error'] = "Format email tidak valid.";

    header("Location: register.php");
    exit;
}

if ($password !== $confirm) {

    $_SESSION['register_error'] = "Konfirmasi password tidak cocok.";

    header("Location: register.php");
    exit;
}

if (strlen($password) < 6) {

    $_SESSION['register_error'] = "Password minimal 6 karakter.";

    header("Location: register.php");
    exit;
}

try {

    $stmt = $pdo->prepare("
        SELECT id
        FROM users
        WHERE email = ?
        LIMIT 1
    ");

    $stmt->execute([$email]);

    if ($stmt->fetch()) {

        $_SESSION['register_error'] = "Email sudah digunakan.";

        header("Location: register.php");
        exit;
    }

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $stmt = $pdo->prepare("
        INSERT INTO users
        (
            username,
            email,
            password,
            xp,
            level_user
        )
        VALUES
        (
            ?,
            ?,
            ?,
            0,
            1
        )
    ");

    $stmt->execute([
        $username,
        $email,
        $hashedPassword
    ]);

    $_SESSION['register_success'] =
        "Registrasi berhasil. Silakan login.";

    header("Location: login.php");
    exit;

} catch (PDOException $e) {

    error_log(
        "[REGISTER ERROR] " . $e->getMessage()
    );

    $_SESSION['register_error'] =
        "Terjadi kesalahan server. Silakan coba lagi.";

    header("Location: register.php");
    exit;
} 