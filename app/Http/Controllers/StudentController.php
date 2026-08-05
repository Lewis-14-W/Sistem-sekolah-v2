<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
            [
                'id' => 3,
                'nis' => '22100003',
                'name' => 'Citra',
                'class' => 'X BID 1',
                'major' => 'RPL'
            ],
        ];

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";

        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Ubah Data Siswa";
        
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function store()
    {
        return "Melakukan penambahan data siswa baru";
    }

    public function update(string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "Menghapus siswa dengan ID: {$id}";
    }
}
