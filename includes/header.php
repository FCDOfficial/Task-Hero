<?php
require_once __DIR__ . '/../config/database.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>TaskHero</title>

<link rel="stylesheet" href="<?= BASE_URL ?>/Assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com/3.4.17"></script>
<script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>

</head>

<body>

<div id="app">

<div id="achievement-notif" class="achievement-notif hidden">

    <div class="glass rounded-xl p-4 flex items-center gap-3 glow-gold">

        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-2xl">
            🏆
        </div>

        <div>

            <p class="text-xs text-yellow-400 font-bold uppercase tracking-wider">
                Achievement Unlocked!
            </p>

            <p id="achievement-text" class="font-semibold text-white">
                First Steps Hero
            </p>

        </div>

    </div>

</div>