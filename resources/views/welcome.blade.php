<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-Do List App</title>
    
    <!-- Tailwind CSS (menggunakan CDN untuk kemudahan, nantinya bisa diubah pakai Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 antialiased font-sans flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900">My To-Do List</h1>

        <!-- Menampilkan Pesan Sukses -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Form Create Task (Bagian Anda) -->
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6 flex gap-2">
            @csrf
            <input type="text" name="title" placeholder="Tambahkan task baru..." required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                Tambah
            </button>
        </form>

        <!-- Menampilkan Error Validasi -->
        @error('title')
            <p class="text-red-500 text-xs italic mb-4">{{ $message }}</p>
        @enderror

        <hr class="mb-6 border-gray-200">

        <!-- Daftar Task (Bagian Teman Anda: READ & DELETE) -->
        <div>
            <p class="text-gray-500 text-sm text-center mb-4">
                <i>(Daftar task akan ditampilkan di sini oleh teman yang mengerjakan fitur READ)</i>
            </p>
            <!-- Contoh list item statis sebagai gambaran -->
            <ul class="space-y-3">
                <li class="flex items-center justify-between bg-gray-50 p-3 rounded border border-gray-100">
                    <span class="text-gray-700">Contoh Task 1 (Statis)</span>
                    <button class="text-red-500 hover:text-red-700 text-sm font-semibold">Hapus</button>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
