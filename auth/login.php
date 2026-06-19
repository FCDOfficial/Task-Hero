<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: ../pages/Dashboard.php");
    exit;
}

$error = $_SESSION['login_error'] ?? null;
unset($_SESSION['login_error']);

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">
    <section class="pt-24 pb-20 px-4 flex items-center justify-center">
        <div class="w-full max-w-md">
            <div class="glass rounded-2xl p-8">

                <div class="text-center mb-8">
                    <img
                        src="../Assets/images/logo.svg"
                        class="w-20 h-20 mx-auto mb-4"
                        alt="TaskHero">

                    <h1 class="font-orbitron text-2xl font-bold">
                        Welcome Back Hero
                    </h1>

                    <p class="text-gray-400">
                        Continue your journey
                    </p>
                </div>

                <?php if ($error): ?>
                    <div class="mb-4 px-4 py-3 rounded-lg bg-red-500/20 border border-red-500 text-red-300">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <form
                    id="login-form"
                    action="login_process.php"
                    method="POST"
                    class="space-y-4">

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

                    <button
                        type="submit"
                        class="btn-primary w-full">
                        Login
                    </button>
                </form>

                <p class="text-center mt-6 text-sm">
                    Don't have account?

                    <a href="register.php" class="text-cyan-400">
                        Register
                    </a>
                </p>

            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>