<?php

namespace App\Controllers;

        class StudentController
        {
            public function index()
            {
                echo '<h1>Menampilkan Daftar Siswa</h1>';
                echo '<p>Daftar Siswa</p>';
                echo '<a href="/students/create">Tambah Siswa</a>';
            }

            public function create()
            {
                echo '<h1>Tambah Siswa</h1>';
                echo '<p>Silahkan Buat Siswa Baru</p>';
                echo '<form action="/students" method="GET">
                        <input type="text" passwrod="password" placeholder="Password" required>
                        <input type="text" name="name" placeholder="Nama Siswa" required>
                        <button type="submit">Simpan</button>
                      </form>';
                    
            }
            
            public function show($id)
            {
                echo '<h1>Detail Siswa</h1>';
                echo "<p>Menampilkan detail siswa dengan ID: {$id}</p>";
            }
        }

