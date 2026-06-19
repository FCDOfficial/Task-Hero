<?php
require_once '../config/database.php';

$pageTitle = "TaskHero - Features";

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">

<section class="pt-24 pb-20 px-4">
    <div class="max-w-6xl mx-auto">

        <h1 class="font-orbitron text-4xl sm:text-5xl font-bold text-center mb-4">
            All <span class="text-cyan-400">Features</span>
        </h1>

        <p class="text-gray-400 text-center mb-16 max-w-xl mx-auto">
            Powerful tools designed to make studying addictive
        </p>

        <div class="mb-16">
            <h2 class="font-orbitron text-2xl font-bold mb-6 text-purple-400">
                📋 Task Management
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Smart Deadlines</h3>
                    <p class="text-sm text-gray-400">
                        AI-powered reminders that adapt to your study patterns.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Calendar View</h3>
                    <p class="text-sm text-gray-400">
                        Visual timeline of all tasks and study sessions.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Priority System</h3>
                    <p class="text-sm text-gray-400">
                        Focus on what matters most.
                    </p>
                </div>

            </div>
        </div>

        <div class="mb-16">
            <h2 class="font-orbitron text-2xl font-bold mb-6 text-cyan-400">
                ⚡ Productivity
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Pomodoro Timer</h3>
                    <p class="text-sm text-gray-400">
                        Focus technique with gamified breaks.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Study Analytics</h3>
                    <p class="text-sm text-gray-400">
                        Track productive hours and focus patterns.
                    </p>
                </div>

                <div class="glass rounded-xl p-6 card-hover">
                    <h3 class="font-bold mb-2">Focus Mode</h3>
                    <p class="text-sm text-gray-400">
                        Block distractions and enter deep work.
                    </p>
                </div>

            </div>
        </div>

        <div>
            <h2 class="font-orbitron text-2xl font-bold mb-6 text-yellow-400">
                🎮 Gaming Elements
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="glass rounded-xl p-6 card-hover text-center">
                    <div class="text-3xl mb-3">⭐</div>
                    <h3 class="font-bold">XP System</h3>
                </div>

                <div class="glass rounded-xl p-6 card-hover text-center">
                    <div class="text-3xl mb-3">🛡️</div>
                    <h3 class="font-bold">Badges</h3>
                </div>

                <div class="glass rounded-xl p-6 card-hover text-center">
                    <div class="text-3xl mb-3">📈</div>
                    <h3 class="font-bold">Levels</h3>
                </div>

                <div class="glass rounded-xl p-6 card-hover text-center">
                    <div class="text-3xl mb-3">🎁</div>
                    <h3 class="font-bold">Rewards</h3>
                </div>

            </div>
        </div>

    </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>