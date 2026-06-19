<?php
require_once '../config/session.php';
require_once '../config/database.php';

$pageTitle = 'Dashboard';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">
    <section class="pt-24 pb-20 px-4">
        <div class="max-w-6xl mx-auto">

            <h1 class="font-orbitron text-4xl sm:text-5xl font-bold text-center mb-4">
                Welcome Back,
                <span class="text-cyan-400">
                    <?= htmlspecialchars($_SESSION['username'] ?? 'Hero') ?>
                </span>
            </h1>

            <p class="text-gray-400 text-center mb-12 max-w-xl mx-auto">
                Kelola progres belajarmu, selesaikan quest, dan naik level.
            </p>

            <!-- STATS -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">

                <div class="glass rounded-2xl p-6 text-center">
                    <div class="text-3xl mb-2">⭐</div>
                    <h3 class="text-gray-400 text-sm mb-2">XP</h3>
                    <p class="text-3xl font-bold text-cyan-400">
                        <?= $_SESSION['xp'] ?? 0 ?>
                    </p>
                </div>

                <div class="glass rounded-2xl p-6 text-center">
                    <div class="text-3xl mb-2">🎮</div>
                    <h3 class="text-gray-400 text-sm mb-2">Level</h3>
                    <p class="text-3xl font-bold text-yellow-400">
                        <?= $_SESSION['level'] ?? 1 ?>
                    </p>
                </div>

                <div class="glass rounded-2xl p-6 text-center">
                    <div class="text-3xl mb-2">🏆</div>
                    <h3 class="text-gray-400 text-sm mb-2">Status</h3>
                    <p class="text-xl font-bold text-green-400">
                        Active Hero
                    </p>
                </div>

            </div>

            <!-- FEATURES -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <a href="Pomodoro.php" class="glass rounded-xl p-6 card-hover text-center block">
                    <div class="text-4xl mb-4">⏳</div>
                    <h3 class="font-bold">Pomodoro</h3>
                </a>

                <a href="Leaderboard.php" class="glass rounded-xl p-6 card-hover text-center block">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="font-bold">Leaderboard</h3>
                </a>

                <a href="Tournaments.php" class="glass rounded-xl p-6 card-hover text-center block">
                    <div class="text-4xl mb-4">⚔️</div>
                    <h3 class="font-bold">Tournament</h3>
                </a>

                <a href="Study_Room.php" class="glass rounded-xl p-6 card-hover text-center block">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="font-bold">Study Room</h3>
                </a>

            </div>

        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>