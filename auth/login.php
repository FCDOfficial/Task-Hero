<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: ../pages/Dashboard.php");
    exit;
}

$error = $_SESSION['login_error'] ?? null;
unset($_SESSION['login_error']);

$pageTitle = "Login";

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
                    Welcome Back Hero
                </h1>

                <p class="text-gray-400 mt-2">
                    Continue your productivity journey.
                </p>

            </div>

            <?php if ($error): ?>

                <div class="mb-5 rounded-xl border border-red-500/40 bg-red-500/10 px-4 py-3 text-red-300">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>

            <form
                id="login-form"
                action="login_process.php"
                method="POST"
                novalidate
                class="space-y-5">

                <div>

                    <label
                        for="login-email"
                        class="block text-sm font-medium mb-2">

                        Email

                    </label>

                    <input
                        id="login-email"
                        type="email"
                        name="email"
                        autocomplete="email"
                        maxlength="100"
                        required
                        placeholder="Masukkan email"
                        class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 focus:border-cyan-400 focus:outline-none">

                </div>

                <div>

                    <label
                        for="login-pass"
                        class="block text-sm font-medium mb-2">

                        Password

                    </label>

                    <div class="relative">

                        <input
                            id="login-pass"
                            type="password"
                            name="password"
                            autocomplete="current-password"
                            maxlength="100"
                            required
                            placeholder="Masukkan password"
                            class="w-full rounded-xl border border-gray-700 bg-gray-800 px-4 py-3 pr-12 focus:border-cyan-400 focus:outline-none">

                        <button
                            type="button"
                            id="toggle-password"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-cyan-400">

                            👁

                        </button>

                    </div>

                </div>

                <button
                    type="submit"
                    class="btn-primary w-full py-3">

                    Login

                </button>

            </form>

            <div class="mt-6 text-center text-sm text-gray-400">

                Don't have an account?

                <a
                    href="register.php"
                    class="font-semibold text-cyan-400 hover:underline">

                    Register

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

<script>
const togglePassword = document.getElementById("toggle-password");
const passwordInput = document.getElementById("login-pass");

if (togglePassword && passwordInput) {

    togglePassword.addEventListener("click", () => {

        if (passwordInput.type === "password") {

            passwordInput.type = "text";
            togglePassword.textContent = "🙈";

        } else {

            passwordInput.type = "password";
            togglePassword.textContent = "👁";

        }

    });

}
</script>

<?php include '../includes/footer.php'; ?>