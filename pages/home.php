<?php
require_once '../config/database.php';

$pageTitle = "TaskHero - Home";

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">

    <section class="min-h-screen flex items-center justify-center px-6 py-20">
        <div class="max-w-6xl mx-auto text-center">

            <h1 class="font-orbitron text-5xl lg:text-7xl font-black mb-6">
                Welcome to
                <span class="text-cyan-400">TaskHero</span>
            </h1>

            <p class="text-gray-400 text-lg max-w-2xl mx-auto mb-10">
                Platform gamifikasi belajar untuk membantu kamu tetap fokus,
                produktif, dan konsisten mencapai target akademik.
            </p>

            <div class="grid md:grid-cols-3 gap-6 mt-12">

                <div class="glass rounded-xl p-6 card-hover">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-bold mb-2">Quest System</h3>
                    <p class="text-sm text-gray-400">
                        Ubah tugas menjadi misi yang menarik.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <div class="text-4xl mb-4">⭐</div>
                    <h3 class="font-bold mb-2">XP & Level</h3>
                    <p class="text-sm text-gray-400">
                        Naik level setiap kali menyelesaikan tugas.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="font-bold mb-2">Leaderboard</h3>
                    <p class="text-sm text-gray-400">
                        Kompetisi sehat bersama pelajar lain.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>