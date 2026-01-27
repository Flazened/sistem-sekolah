<?php

namespace App\Controllers;

        class StudentController
        {
            public function index()
            {
                echo '<h1>Menampilkan Daftar Siswa</h1>';
                echo '<p>Daftar Siswa</p>';
            }

            public function create()
            {
                echo '<h1>Tambah Siswa</h1>';
                echo '<p>Silahkan Buat Siswa Baru</p>';
            }
        }

