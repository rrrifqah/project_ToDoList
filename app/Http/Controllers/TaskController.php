<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input dari user (wajib diisi)
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // 2. Simpan data ke database
        Task::create([
            'title' => $request->title,
            'is_completed' => false,
        ]);

        // 3. Kembalikan user ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Task berhasil ditambahkan!');
    }
}
