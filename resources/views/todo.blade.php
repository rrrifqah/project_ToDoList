<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My To-Do List</title>
    <!-- Kita pakai Tailwind CSS supaya cepat menghiasnya -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">📋 Daftar Tugas Saya</h1>

        <ul class="space-y-4">
            @foreach ($allTasks as $item)
                <li class="flex items-center justify-between bg-gray-50 p-4 rounded-md border border-gray-200 hover:shadow-sm transition">
                    <span class="text-gray-700 font-medium">{{ $item->task_name }}</span>
                    
                    <!-- Tombol Delete dengan desain merah -->
                    <form action="{{ route('task.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded transition duration-200">
                            Hapus
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>

        @if($allTasks->isEmpty())
            <p class="text-gray-500 text-center mt-4">Belum ada tugas. Semangat!</p>
        @endif
    </div>

</body>
</html>