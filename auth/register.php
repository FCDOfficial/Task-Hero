<?php
session_start();

if(isset($_SESSION['user_id'])){
    header("Location: ../pages/dashboard.php");
    exit;
}

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">

<section class="pt-24 pb-20 px-4 flex items-center justify-center">

<div class="w-full max-w-md">

<div class="glass rounded-2xl p-8">

<div class="text-center mb-8">

<img
src="../assets/images/logo.svg"
class="w-20 h-20 mx-auto mb-4"
alt="TaskHero">

<h1 class="font-orbitron text-2xl font-bold">
Join The Quest
</h1>

<p class="text-gray-400">
Create your hero account
</p>

</div>

<form
action="register_process.php"
method="POST"
class="space-y-4">

<input
type="text"
name="username"
placeholder="Username"
required
class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700">

<input
type="email"
name="email"
placeholder="Email"
required
class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700">

<input
type="password"
name="password"
placeholder="Password"
required
class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700">

<input
type="password"
name="confirm_password"
placeholder="Confirm Password"
required
class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700">

<button
type="submit"
class="btn-primary w-full">

Create Account

</button>

</form>

<p class="text-center mt-6 text-sm">

Already have account?

<a href="login.php" class="text-cyan-400">
Login
</a>

</p>

</div>

</div>

</section>

</main>

<?php include '../includes/footer.php'; ?>