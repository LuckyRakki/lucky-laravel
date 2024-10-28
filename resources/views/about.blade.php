<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <!-- Header -->
  <header class="bg-gray-800 text-white p-6">
    <div class="container mx-auto flex justify-between items-center">
      <a href="{{ route('home') }}" class="text-3xl font-bold hover:text-yellow-400">Home</a>
      <h1 class="text-2xl font-semibold">About Page</h1>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto p-6 mt-8">
    <div class="bg-white rounded-lg shadow-md p-6 text-gray-800">
      <h2 class="text-2xl font-semibold mb-4">Personal Information</h2>
      
      <p class="text-lg mb-2"><span class="font-semibold">Name:</span> {{ $name }}</p>
      <p class="text-lg mb-2"><span class="font-semibold">Address:</span> {{ $address }}</p>
      <p class="text-lg"><span class="font-semibold">Email:</span> {{ $email }}</p>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white p-4 mt-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 NovelHub. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
