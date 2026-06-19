<?php
require_once '../config/session.php';

$pageTitle = "Leaderboard";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">
<section class="pt-24 pb-20 px-4">
<div class="max-w-4xl mx-auto">

<h1 class="font-orbitron text-4xl font-bold text-center mb-2">
    Leader<span class="text-cyan-400">board</span>
</h1>

<p class="text-gray-400 text-center mb-10">
    Top heroes this week
</p>

<div class="flex justify-center items-end gap-4 mb-12">

    <div class="text-center">
        <div class="w-16 h-16 rounded-full podium-2 flex items-center justify-center mx-auto mb-2 text-xl font-bold">
            2
        </div>
        <p class="font-bold text-sm">Budi Santoso</p>
        <p class="text-xs text-gray-400">8,920 XP</p>
        <div class="w-20 h-24 podium-2 rounded-t-lg mt-2 flex items-center justify-center font-orbitron font-bold">
            Lv.31
        </div>
    </div>

    <div class="text-center">
        <div class="w-20 h-20 rounded-full podium-1 flex items-center justify-center mx-auto mb-2 text-2xl font-bold animate-glow">
            👑
        </div>
        <p class="font-bold">Rina Maharani</p>
        <p class="text-xs text-yellow-400">12,450 XP</p>
        <div class="w-24 h-32 podium-1 rounded-t-lg mt-2 flex items-center justify-center font-orbitron font-bold text-lg">
            Lv.34
        </div>
    </div>

    <div class="text-center">
        <div class="w-16 h-16 rounded-full podium-3 flex items-center justify-center mx-auto mb-2 text-xl font-bold">
            3
        </div>
        <p class="font-bold text-sm">Dewi Lestari</p>
        <p class="text-xs text-gray-400">7,680 XP</p>
        <div class="w-20 h-20 podium-3 rounded-t-lg mt-2 flex items-center justify-center font-orbitron font-bold">
            Lv.29
        </div>
    </div>

</div>

<div class="glass rounded-xl overflow-hidden">

    <div class="grid grid-cols-12 gap-2 p-4 text-xs text-gray-400 font-bold uppercase border-b border-gray-700">
        <div class="col-span-1">Rank</div>
        <div class="col-span-5">Hero</div>
        <div class="col-span-3">XP</div>
        <div class="col-span-3">Level</div>
    </div>

    <div id="leaderboard-list" class="divide-y divide-gray-800">

        <div class="grid grid-cols-12 gap-2 p-4 items-center">
            <div class="col-span-1 font-bold text-cyan-400">#4</div>
            <div class="col-span-5">Andi Pratama</div>
            <div class="col-span-3">6,850 XP</div>
            <div class="col-span-3">Lv.27</div>
        </div>

        <div class="grid grid-cols-12 gap-2 p-4 items-center">
            <div class="col-span-1 font-bold text-cyan-400">#5</div>
            <div class="col-span-5">Siti Rahma</div>
            <div class="col-span-3">6,200 XP</div>
            <div class="col-span-3">Lv.25</div>
        </div>

    </div>
</div>

</div>
</section>
</main>

<?php include '../includes/footer.php'; ?>