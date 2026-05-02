<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Fungsi READ: Mengambil semua data task dan menampilkannya
    public function index() {
        $allTasks = Task::all(); // Ambil semua data dari tabel tasks
        return view('todo', compact('allTasks')); // Kirim data ke tampilan bernama 'todo'
    }

    // Fungsi DELETE: Menghapus data berdasarkan ID
    public function destroy($id) {
        $task = Task::find($id); // Cari data yang mau dihapus
        $task->delete(); // Perintah hapus
        return redirect()->back(); // Balik lagi ke halaman tadi
    }
}
