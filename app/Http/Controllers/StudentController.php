<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:students,nim',
        ]);

        // Simpan ke database
        Student::create($request->all());

        // Kembalikan ke halaman index dengan pesan sukses
        return redirect()->route('student.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // Fungsi edit, update, dan destroy lainnya...
}