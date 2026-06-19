<?php
require_once '../config/session.php';

$pageTitle = "Study Room";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-24 pb-20" id="page-study-room">

<section class="px-4 mb-12">
    <div class="max-w-6xl mx-auto text-center">
        <h1 class="font-orbitron text-4xl md:text-5xl font-bold mb-4">
            Study <span class="text-cyan-400">Room</span>
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto">
            Belajar bersama komunitas TaskHero,
            tingkatkan fokus, kumpulkan XP,
            dan capai target akademik lebih cepat.
        </p>
    </div>
</section>

<section class="px-4">
<div class="max-w-6xl mx-auto">

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

<div class="glass rounded-2xl p-6 card-hover">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold">📚 Silent Study</h3>
        <span class="text-xs bg-green-500/20 text-green-400 px-2 py-1 rounded-full">23 Online</span>
    </div>
    <p class="text-sm text-gray-400 mb-4">
        Belajar fokus tanpa gangguan dengan ambient sound.
    </p>
    <button class="btn-primary w-full">Enter Room</button>
</div>

<div class="glass rounded-2xl p-6 card-hover">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold">💬 Group Study</h3>
        <span class="text-xs bg-cyan-500/20 text-cyan-400 px-2 py-1 rounded-full">15 Online</span>
    </div>
    <p class="text-sm text-gray-400 mb-4">
        Diskusi dan belajar bersama teman satu jurusan.
    </p>
    <button class="btn-primary w-full">Enter Room</button>
</div>

<div class="glass rounded-2xl p-6 card-hover">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold">🎙️ Voice Study</h3>
        <span class="text-xs bg-yellow-500/20 text-yellow-400 px-2 py-1 rounded-full">8 Online</span>
    </div>
    <p class="text-sm text-gray-400 mb-4">
        Belajar sambil voice channel.
    </p>
    <button class="btn-secondary w-full">Enter Room</button>
</div>

<div class="glass rounded-2xl p-6 card-hover">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold">📝 Exam Preparation</h3>
        <span class="text-xs bg-purple-500/20 text-purple-400 px-2 py-1 rounded-full">42 Online</span>
    </div>
    <p class="text-sm text-gray-400 mb-4">
        Persiapan ujian, kuis, dan review materi.
    </p>
    <button class="btn-primary w-full">Enter Room</button>
</div>

<div class="glass rounded-2xl p-6 card-hover">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold">👨‍🏫 Teacher Room</h3>
        <span class="text-xs bg-pink-500/20 text-pink-400 px-2 py-1 rounded-full">5 Online</span>
    </div>
    <p class="text-sm text-gray-400 mb-4">
        Ruang belajar dengan mentor dan dosen.
    </p>
    <button class="btn-secondary w-full">Request Access</button>
</div>

<div class="glass rounded-2xl p-6">
    <h3 class="font-bold text-lg mb-4">➕ Create Study Room</h3>

    <form class="space-y-4">
        <input type="text" placeholder="Room Name"
            class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-sm">

        <select class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-sm">
            <option>Silent Study</option>
            <option>Group Study</option>
            <option>Voice Study</option>
            <option>Exam Preparation</option>
        </select>

        <input type="number" placeholder="Max Participants"
            class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 text-sm">

        <button type="submit" class="btn-primary w-full">
            Create Room
        </button>
    </form>
</div>

</div>
</div>
</section>
</main>

<?php include '../includes/footer.php'; ?>