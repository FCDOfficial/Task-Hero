<?php

require '../config/session.php';

$pageTitle = "Tournaments";

include '../includes/header.php';
include '../includes/navbar.php';

?>

<main class="pt-20">

<section class="pt-24 pb-20 px-4">

    <div class="max-w-6xl mx-auto">

        <!-- PAGE TITLE -->

        <div class="text-center mb-14">

            <h1 class="font-orbitron text-4xl md:text-5xl font-bold mb-3">

                Study
                <span class="text-purple-400">
                    Tournaments
                </span>

            </h1>

            <p class="text-gray-400 text-lg">

                Compete • Learn • Win Rewards

            </p>

        </div>

        <!-- TOURNAMENT GRID -->

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            <!-- TOURNAMENT 1 -->

            <div class="glass rounded-2xl p-6 card-hover border border-cyan-500/20">

                <div class="flex justify-between items-center mb-5">

                    <span class="text-4xl">
                        ⚔️
                    </span>

                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-500/20 text-green-400">
                        LIVE
                    </span>

                </div>

                <h3 class="font-orbitron text-xl font-bold mb-2">

                    Study Battle

                </h3>

                <p class="text-sm text-gray-400 mb-5">

                    Complete the most tasks within 2 hours and dominate the arena.

                </p>

                <div class="space-y-3 text-sm">

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Prize Pool
                        </span>

                        <span class="font-bold text-yellow-400">
                            5,000 XP
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Participants
                        </span>

                        <span>
                            128 / 150
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Ends In
                        </span>

                        <span
                            id="tournament-timer-1"
                            class="font-mono text-red-400">

                            01:24:30

                        </span>

                    </div>

                </div>

                <button class="btn-primary w-full mt-6">

                    Join Battle

                </button>

            </div>

            <!-- TOURNAMENT 2 -->

            <div class="glass rounded-2xl p-6 card-hover border border-purple-500/20">

                <div class="flex justify-between items-center mb-5">

                    <span class="text-4xl">
                        🧠
                    </span>

                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-yellow-500/20 text-yellow-400">
                        SOON
                    </span>

                </div>

                <h3 class="font-orbitron text-xl font-bold mb-2">

                    Quiz Championship

                </h3>

                <p class="text-sm text-gray-400 mb-5">

                    Test your academic knowledge across multiple subjects.

                </p>

                <div class="space-y-3 text-sm">

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Prize Pool
                        </span>

                        <span class="font-bold text-yellow-400">
                            10,000 XP
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Participants
                        </span>

                        <span>
                            89 / 200
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Starts In
                        </span>

                        <span class="font-mono text-cyan-400">

                            2D 05:00:00

                        </span>

                    </div>

                </div>

                <button class="btn-secondary w-full mt-6">

                    Register

                </button>

            </div>

            <!-- TOURNAMENT 3 -->

            <div class="glass rounded-2xl p-6 card-hover border border-yellow-500/20">

                <div class="flex justify-between items-center mb-5">

                    <span class="text-4xl">
                        🏃
                    </span>

                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500/20 text-cyan-400">
                        WEEKLY
                    </span>

                </div>

                <h3 class="font-orbitron text-xl font-bold mb-2">

                    Productivity Race

                </h3>

                <p class="text-sm text-gray-400 mb-5">

                    Highest focus hours wins the weekly crown.

                </p>

                <div class="space-y-3 text-sm">

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Prize Pool
                        </span>

                        <span class="font-bold text-yellow-400">
                            15,000 XP
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Participants
                        </span>

                        <span>
                            256 / 500
                        </span>

                    </div>

                    <div class="flex justify-between">

                        <span class="text-gray-400">
                            Ends In
                        </span>

                        <span class="font-mono text-cyan-400">

                            5D 12:00:00

                        </span>

                    </div>

                </div>

                <button class="btn-primary w-full mt-6">

                    Join Race

                </button>

            </div>

        </div>

    </div>

</section>

</main>

<?php include '../includes/footer.php'; ?>