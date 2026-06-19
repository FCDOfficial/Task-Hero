<?php
require_once '../config/session.php';

$pageTitle = "Pomodoro Focus";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main id="page-pomodoro" class="pt-24 pb-20 min-h-screen">

<section class="px-4">

<div class="max-w-3xl mx-auto">

<div class="text-center mb-12">

<h1 class="font-orbitron text-5xl font-bold">

Pomodoro

<span class="text-cyan-400">

Focus

</span>

</h1>

<p class="text-gray-400 mt-4">

Stay focused, complete your sessions, and earn XP.

</p>

</div>

<div class="glass rounded-3xl p-10">

<!-- mode -->

<div class="flex justify-center gap-3 mb-10">

<button class="pomo-mode active glass px-6 py-3 rounded-xl"
data-mode="focus"
data-time="25">

Focus

</button>

<button class="pomo-mode glass px-6 py-3 rounded-xl"
data-mode="short"
data-time="5">

Short Break

</button>

<button class="pomo-mode glass px-6 py-3 rounded-xl"
data-mode="long"
data-time="15">

Long Break

</button>

</div>

<!-- Timer -->

<div class="relative w-72 h-72 mx-auto mb-10">

<svg class="w-full h-full" viewBox="0 0 100 100">

<circle
cx="50"
cy="50"
r="45"
fill="none"
stroke="rgba(255,255,255,.08)"
stroke-width="4"/>

<circle
id="pomo-ring"
cx="50"
cy="50"
r="45"
fill="none"
stroke="url(#gradient)"
stroke-width="4"
stroke-linecap="round"
stroke-dasharray="283"
stroke-dashoffset="0"/>

<defs>

<linearGradient id="gradient">

<stop offset="0%" stop-color="#00d4ff"/>

<stop offset="100%" stop-color="#8b5cf6"/>

</linearGradient>

</defs>

</svg>

<div class="absolute inset-0 flex flex-col justify-center items-center">

<p
id="pomo-time"
class="timer-display">

25:00

</p>

<p
id="pomo-label"
class="text-gray-400">

Focus Time

</p>

</div>

</div>

<!-- Button -->

<div class="flex justify-center gap-4 mb-10">

<button
id="pomo-start"
class="btn-primary px-8">

▶ Start

</button>

<button
id="pomo-pause"
class="btn-secondary px-8 hidden">

⏸ Pause

</button>

<button
id="pomo-reset"
class="btn-secondary px-6">

↺ Reset

</button>

</div>

<!-- Statistik -->

<div class="grid grid-cols-3 gap-6">

<div class="glass rounded-2xl py-6">

<p
id="pomo-sessions"
class="text-3xl font-bold text-cyan-400">

0

</p>

<p class="text-gray-400 text-sm">

Sessions

</p>

</div>

<div class="glass rounded-2xl py-6">

<p
id="pomo-xp-earned"
class="text-3xl font-bold text-purple-400">

0

</p>

<p class="text-gray-400 text-sm">

XP Earned

</p>

</div>

<div class="glass rounded-2xl py-6">

<p
id="pomo-total-min"
class="text-3xl font-bold text-yellow-400">

0

</p>

<p class="text-gray-400 text-sm">

Minutes

</p>

</div>

</div>

</div>

</div>

</section>

</main>

<?php include '../includes/footer.php'; ?>