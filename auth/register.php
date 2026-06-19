<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: ../pages/Dashboard.php");
    exit;
}

$error = $_SESSION['register_error'] ?? null;
unset($_SESSION['register_error']);

$pageTitle = "Register";

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-24 pb-20 min-h-screen flex items-center justify-center">

    <section class="w-full max-w-md px-4">

        <div class="glass rounded-3xl p-8 shadow-2xl">

            <div class="text-center mb-8">

                <img
                    src="../Assets/images/logo.svg"
                    alt="TaskHero"
                    class="w-24 h-24 mx-auto mb-5 object-contain">

                <h1 class="font-orbitron text-3xl font-bold">
                    Join The Quest
                </h1>

                <p class="text-gray-400 mt-2">
                    Create your productivity hero account.
                </p>

            </div>

            <?php if ($error): ?>

                <div class="mb-5 rounded-xl border border-red-500/40 bg-red-500/10 px-4 py-3 text-red-300">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>

            <form
                action="register_process.php"
                method="POST"
                novalidate
                class="space-y-5">

                <input
                    id="register-username"
                    type="text"
                    name="username"
                    autocomplete="username"
                    maxlength="50"
                    placeholder="Username"
                    required
                    class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 focus:border-cyan-400 focus:outline-none">

                <input
                    id="register-email"
                    type="email"
                    name="email"
                    autocomplete="email"
                    maxlength="100"
                    placeholder="Email"
                    required
                    class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 focus:border-cyan-400 focus:outline-none">

                <input
                    id="register-password"
                    type="password"
                    name="password"
                    autocomplete="new-password"
                    minlength="6"
                    placeholder="Password"
                    required
                    class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 focus:border-cyan-400 focus:outline-none">

                <input
                    id="register-confirm"
                    type="password"
                    name="confirm_password"
                    autocomplete="new-password"
                    minlength="6"
                    placeholder="Confirm Password"
                    required
                    class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 focus:border-cyan-400 focus:outline-none">

                <button
                    type="submit"
                    class="btn-primary w-full py-3">

                    Create Account

                </button>

            </form>

            <div class="mt-6 text-center text-sm text-gray-400">

                Already have an account?

                <a
                    href="login.php"
                    class="font-semibold text-cyan-400 hover:underline">

                    Login

                </a>

            </div>

            <div class="mt-4 text-center">

                <a
                    href="../index.php"
                    class="text-sm text-gray-500 hover:text-cyan-400">

                    ← Back to Home

                </a>

            </div>

        </div>

    </section>

</main>

<?php include '../includes/footer.php'; ?>