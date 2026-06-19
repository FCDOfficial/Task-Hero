<?php
require_once '../config/session.php';

$pageTitle = "Pricing - TaskHero";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-24">

    <section class="px-6 py-12 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-orbitron text-5xl font-black mb-4">
                Choose Your
                <span class="text-yellow-400">Hero Plan</span>
            </h1>

            <p class="text-gray-400 text-lg">
                Mulai gratis dan tingkatkan produktivitasmu dengan fitur premium TaskHero.
            </p>
        </div>
    </section>

    <section class="px-6 pb-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            <div class="glass rounded-3xl p-8 flex flex-col">
                <h3 class="font-orbitron text-2xl font-bold mb-2">Free Hero</h3>

                <p class="text-gray-400 mb-6">
                    Cocok untuk pelajar yang baru memulai.
                </p>

                <div class="mb-8">
                    <span class="text-5xl font-black">Rp0</span>
                    <span class="text-gray-400">/bulan</span>
                </div>

                <ul class="space-y-3 mb-8 flex-grow">
                    <li>✅ Basic Task Manager</li>
                    <li>✅ Pomodoro Timer</li>
                    <li>✅ XP & Level System</li>
                    <li>✅ 5 Daily Quests</li>
                    <li class="text-gray-500">❌ Study Analytics</li>
                    <li class="text-gray-500">❌ Tournament Access</li>
                </ul>

                <button class="btn-secondary w-full">
                    Current Plan
                </button>
            </div>

            <div class="glass rounded-3xl p-8 border-2 border-cyan-400 relative flex flex-col">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="bg-cyan-400 text-black px-4 py-1 rounded-full text-sm font-bold">
                        MOST POPULAR
                    </span>
                </div>

                <h3 class="font-orbitron text-2xl font-bold text-cyan-400 mb-2">
                    Pro Hero
                </h3>

                <p class="text-gray-400 mb-6">
                    Untuk pelajar yang ingin berkembang lebih cepat.
                </p>

                <div class="mb-8">
                    <span class="text-5xl font-black">Rp49K</span>
                    <span class="text-gray-400">/bulan</span>
                </div>

                <ul class="space-y-3 mb-8 flex-grow">
                    <li>✅ Everything in Free</li>
                    <li>✅ Unlimited Quests</li>
                    <li>✅ Study Analytics</li>
                    <li>✅ Tournament Access</li>
                    <li>✅ Custom Themes</li>
                    <li class="text-gray-500">❌ Team Management</li>
                </ul>

                <button class="btn-primary w-full">
                    Upgrade Now
                </button>
            </div>

            <div class="glass rounded-3xl p-8 flex flex-col">
                <h3 class="font-orbitron text-2xl font-bold text-yellow-400 mb-2">
                    Ultimate Hero
                </h3>

                <p class="text-gray-400 mb-6">
                    Solusi untuk sekolah, kampus, dan komunitas belajar.
                </p>

                <div class="mb-8">
                    <span class="text-5xl font-black">Rp99K</span>
                    <span class="text-gray-400">/bulan</span>
                </div>

                <ul class="space-y-3 mb-8 flex-grow">
                    <li>✅ Everything in Pro</li>
                    <li>✅ Team Management</li>
                    <li>✅ Teacher Dashboard</li>
                    <li>✅ Priority Support</li>
                    <li>✅ Custom Tournament</li>
                    <li>✅ API Access</li>
                </ul>

                <button class="btn-secondary w-full">
                    Contact Sales
                </button>
            </div>

        </div>
    </section>

    <section class="px-6 pb-20">
        <div class="max-w-4xl mx-auto glass rounded-3xl p-10 text-center">
            <h2 class="font-orbitron text-3xl font-bold mb-4">
                Why Upgrade?
            </h2>

            <p class="text-gray-400 mb-8">
                Dapatkan akses penuh ke Tournament, Analytics,
                Achievement Premium, dan fitur produktivitas lanjutan
                yang membantu kamu naik level lebih cepat.
            </p>

            <a href="../auth/register.php" class="btn-primary px-8 py-3">
                🚀 Become a Hero
            </a>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>