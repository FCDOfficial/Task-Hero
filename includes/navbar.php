<header class="fixed top-0 left-0 right-0 z-50 glass backdrop-blur-lg border-b border-white/10">

<div class="max-w-7xl mx-auto px-4 lg:px-6">

<div class="h-20 flex items-center justify-between">

<a href="<?= BASE_URL ?>/index.php" class="flex items-center gap-3">
    <img src="<?= BASE_URL ?>/Assets/images/logo.svg" class="w-10 h-10 object-contain">
    <span class="font-orbitron font-bold text-xl">TaskHero</span>
</a>

<nav class="hidden xl:flex items-center gap-6 text-sm font-medium">
    <a href="<?= BASE_URL ?>/pages/home.php">Home</a>
    <a href="<?= BASE_URL ?>/pages/features.php">Features</a>
    <a href="<?= BASE_URL ?>/pages/Dashboard.php">Dashboard</a>
    <a href="<?= BASE_URL ?>/pages/Leaderboard.php">Leaderboard</a>
    <a href="<?= BASE_URL ?>/pages/Tournaments.php">Tournaments</a>
    <a href="<?= BASE_URL ?>/pages/Pomodoro.php">Podomoro</a>
    <a href="<?= BASE_URL ?>/pages/Study_Room.php">Study Room</a>
    <a href="<?= BASE_URL ?>/pages/Pricing.php">Pricing</a>
    <a href="<?= BASE_URL ?>/pages/About.php">About</a>
</nav>

<div class="flex items-center gap-3">

    <div id="live-clock" class="glass px-3 py-2 rounded-lg text-sm font-mono">
        00:00:00
    </div>

    <a href="<?= BASE_URL ?>/auth/login.php"
       class="hidden md:block hover:text-cyan-400 transition text-sm">
        Login
    </a>

    <a href="<?= BASE_URL ?>/auth/register.php"
       class="hidden md:block btn-primary text-sm">
        Register
    </a>

</div>
</div>
</div>
</header>