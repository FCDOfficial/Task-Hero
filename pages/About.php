<?php
$pageTitle = 'About';
require_once '../config/database.php';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">

    <section class="pt-24 pb-20 px-4">
        <div class="max-w-4xl mx-auto">

            <h1 class="font-orbitron text-4xl font-bold text-center mb-12">
                About <span class="text-cyan-400">TaskHero</span>
            </h1>

            <div class="glass rounded-2xl p-8 mb-12">

                <h2 class="font-orbitron text-xl font-bold mb-4 text-purple-400">
                    Our Vision
                </h2>

                <p class="text-gray-300 mb-6">
                    Menjadi platform edukasi gamifikasi #1 di Indonesia yang membuat setiap pelajar bersemangat mengejar ilmu.
                </p>

                <h2 class="font-orbitron text-xl font-bold mb-4 text-cyan-400">
                    Our Mission
                </h2>

                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>🎯 Mengubah cara pandang belajar dari beban menjadi petualangan</li>
                    <li>🚀 Meningkatkan produktivitas akademik melalui gamifikasi yang terbukti efektif</li>
                    <li>🤝 Membangun komunitas pelajar yang saling mendukung dan kompetitif secara sehat</li>
                    <li>📈 Memberikan tools yang membantu guru memotivasi siswa secara inovatif</li>
                </ul>

            </div>

            <h2 class="font-orbitron text-2xl font-bold text-center mb-8">
                The <span class="text-yellow-400">Team</span>
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="glass rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-cyan-400 to-blue-600 flex items-center justify-center mx-auto mb-3 font-bold text-xl">
                        FCD
                    </div>
                    <h3 class="font-bold">Ferdi Candra Darmawan</h3>
                    <p class="text-xs text-cyan-400">Founder & CEO</p>
                </div>

                <div class="glass rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center mx-auto mb-3 font-bold text-xl">
                        FC
                    </div>
                    <h3 class="font-bold">Ferdi Candra Darmawan</h3>
                    <p class="text-xs text-purple-400">Lead Designer</p>
                </div>

                <div class="glass rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-green-400 to-teal-600 flex items-center justify-center mx-auto mb-3 font-bold text-xl">
                        FCD
                    </div>
                    <h3 class="font-bold">Ferdi Candra Darmawan</h3>
                    <p class="text-xs text-green-400">CTO</p>
                </div>

                <div class="glass rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center mx-auto mb-3 font-bold text-xl">
                        FCD
                    </div>
                    <h3 class="font-bold">Ferdi Candra Darmawan</h3>
                    <p class="text-xs text-yellow-400">Game Designer</p>
                </div>

            </div>

        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>