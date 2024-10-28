<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovelHub - Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-5 flex justify-between items-center">
            <h1 class="text-3xl font-bold">NovelHub</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#home" class="hover:text-yellow-400">Utama</a></li>
                    <li><a href="#features" class="hover:text-yellow-400">Fitur</a></li>
                    <li><a href="#explore" class="hover:text-yellow-400">Jelajah</a></li>
                    <li><a href="#contact" class="hover:text-yellow-400">Kontak</a></li>
                    <a href="{{ route('login') }}" class="hover:text-yellow-400">Login</a>
                    <a href="{{ route('about') }}" class="hover:text-yellow-400">About</a>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero bg-blue-500 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <img src="assets/images/tes.png" class="mx-auto mb-6 w-64 h-64 object-cover">
            <h2 class="text-4xl font-semibold mb-4">Baca atau Tulis Novel yang Menakjubkan</h2>
            <p class="mb-8">Gerbang Anda menuju dunia kisah yang tak berujung.</p>
            <a href="#features" class="bg-yellow-400 hover:bg-yellow-500 text-black py-2 px-4 rounded">Mulailah</a>
        </div>
    </section>

    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-4">Tentang Kami</h2>
            <p class="max-w-2xl mx-auto">NovelHub adalah platform bagi para penulis yang bercita-cita tinggi maupun yang sudah mapan untuk berbagi cerita dan terhubung dengan pembaca di seluruh dunia.</p>
        </div>
    </section>

    <section id="features" class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-8">Fitur</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Baca Novel</h3>
                    <p>Jelajahi berbagai novel dari berbagai genre.</p>
                </div>
                <div class="card p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Tulis Novel</h3>
                    <p>Mulailah menulis novel buatanmu sendiri dan bagikan kepada orang lain.</p>
                </div>
                <div class="card p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Community</h3>
                    <p>Bergabunglah dengan komunitas penulis dan pembaca untuk berdiskusi dan berkolaborasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="explore" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-4">Jelajah</h2>
            <p class="mb-8">Temukan berbagai novel menarik yang sedang trending atau pilih dari kategori yang kamu sukai.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="category p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Romansa</h3>
                    <p>Temukan kisah cinta yang akan menyentuh hatimu.</p>
                </div>
                <div class="category p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Fantasi</h3>
                    <p>Mulailah perjalanan epik di dunia yang fantastis.</p>
                </div>
                <div class="category p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Misteri</h3>
                    <p>Pecahkan misteri yang mendebarkan dan ungkap rahasianya.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-4">Hubungi Kami</h2>
            <p class="mb-8">Memiliki Saran atau Pertanyaan? Jangan ragu untuk menghubungi kami!</p>
            <form class="max-w-lg mx-auto space-y-4">
                <input type="text" placeholder="Nama milikmu" class="w-full p-2 border border-gray-300 rounded" required>
                <input type="email" placeholder="Email milikmu" class="w-full p-2 border border-gray-300 rounded" required>
                <textarea placeholder="Pesanmu" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 NovelHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
