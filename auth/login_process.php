<?php
session_start();

require_once '../config/database.php';

/*
|--------------------------------------------------------------------------
| Hanya menerima request POST
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

/*
|--------------------------------------------------------------------------
| Ambil Input
|--------------------------------------------------------------------------
*/
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

/*
|--------------------------------------------------------------------------
| Validasi Input
|--------------------------------------------------------------------------
*/
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

    /*
    |--------------------------------------------------------------------------
    | Cari User
    |--------------------------------------------------------------------------
    */

    $stmt = $pdo->prepare("
        SELECT *
        FROM users
        WHERE email = ?
        LIMIT 1
    ");

    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    /*
    |--------------------------------------------------------------------------
    | Email / Password Salah
    |--------------------------------------------------------------------------
    */

    if (!$user || !password_verify($password, $user['password'])) {

        $_SESSION['login_error'] = "Email atau password salah.";

        header("Location: login.php");
        exit;
    }

    /*
    |--------------------------------------------------------------------------
    | Login Berhasil
    |--------------------------------------------------------------------------
    */

    session_regenerate_id(true);

    unset($_SESSION['login_error']);

    $_SESSION['logged_in'] = true;

    $_SESSION['user_id'] = (int) $user['id'];

    $_SESSION['username'] = $user['username'];

    $_SESSION['xp'] = isset($user['xp'])
        ? (int) $user['xp']
        : 0;

    $_SESSION['level'] = isset($user['level'])
        ? (int) $user['level']
        : (isset($user['level_user'])
            ? (int) $user['level_user']
            : 1);

    $_SESSION['role'] = $user['role'] ?? 'user';

    header("Location: ../pages/Dashboard.php");
    exit;

} catch (PDOException $e) {

    // Simpan ke log server
    error_log(
        "[LOGIN ERROR] " . $e->getMessage()
    );

    $_SESSION['login_error'] =
        "Terjadi kesalahan server. Silakan coba lagi.";

    header("Location: login.php");
    exit;
}