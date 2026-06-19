<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: pages/Dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskHero | Level Up Your Learning Journey</title>

    <link rel="stylesheet" href="Assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main class="pt-20">
<section class="min-h-screen flex items-center justify-center px-6 py-20">
<div class="max-w-7xl mx-auto">

    <div class="grid lg:grid-cols-2 gap-16 items-center">

        <!-- LEFT -->
        <div>
            <div class="inline-flex items-center gap-2 glass px-5 py-2 rounded-full mb-8">
                <span>🎮</span>
                <span class="text-sm font-medium">
                    Gamified Academic Productivity Platform
                </span>
            </div>

            <h1 class="font-orbitron text-5xl lg:text-7xl font-black leading-tight mb-6">
                TASK<span class="text-cyan-400">HERO</span>
            </h1>

            <h2 class="text-2xl lg:text-3xl font-bold mb-6">
                Belajar Bukan Lagi Beban,
                Tapi Sebuah Petualangan.
            </h2>

            <p class="text-gray-400 text-lg leading-relaxed mb-10">
                Kelola tugas seperti quest game,
                kumpulkan XP,
                naik level,
                buka achievement,
                fokus dengan Pomodoro,
                dan bersaing di leaderboard bersama pelajar lainnya.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="auth/login.php" class="btn-primary px-8 py-4">
                    🚀 Mulai Sekarang
                </a>

                <a href="auth/register.php" class="btn-secondary px-8 py-4">
                    ⚔️ Buat Akun
                </a>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="flex justify-center">
            <div class="glass rounded-3xl p-10 max-w-md w-full text-center">

                <img
                    src="Assets/images/logo.svg"
                    alt="TaskHero Logo"
                    class="w-40 h-40 mx-auto mb-6 object-contain">

                <h3 class="font-orbitron text-2xl font-bold mb-4">
                    Your Learning RPG
                </h3>

                <div class="space-y-4 text-left">
                    <div class="flex items-center gap-3">
                        <span class="text-green-400">✔</span>
                        Quest Based Task Management
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-green-400">✔</span>
                        XP, Level & Achievement System
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-green-400">✔</span>
                        Pomodoro Focus Sessions
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-green-400">✔</span>
                        Leaderboard & Tournament
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FEATURES -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-24">

        <div class="glass rounded-2xl p-6 text-center">
            <div class="text-4xl mb-4">🎯</div>
            <h3 class="font-bold mb-2">Quest System</h3>
            <p class="text-sm text-gray-400">
                Ubah tugas menjadi misi yang menyenangkan.
            </p>
        </div>

        <div class="glass rounded-2xl p-6 text-center">
            <div class="text-4xl mb-4">⭐</div>
            <h3 class="font-bold mb-2">XP & Levels</h3>
            <p class="text-sm text-gray-400">
                Dapatkan reward setiap kali belajar.
            </p>
        </div>

        <div class="glass rounded-2xl p-6 text-center">
            <div class="text-4xl mb-4">⏳</div>
            <h3 class="font-bold mb-2">Pomodoro Focus</h3>
            <p class="text-sm text-gray-400">
                Tingkatkan fokus dan produktivitas.
            </p>
        </div>

        <div class="glass rounded-2xl p-6 text-center">
            <div class="text-4xl mb-4">🏆</div>
            <h3 class="font-bold mb-2">Leaderboard</h3>
            <p class="text-sm text-gray-400">
                Kompetisi sehat antar pelajar.
            </p>
        </div>

    </div>
</div>
</section>
</main>

<?php include 'includes/footer.php'; ?>

<script src="Assets/js/script.js"></script>
</body>
</html>