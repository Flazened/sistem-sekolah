<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=""> 
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header Start -->
    <header class="bg-blue-500 text-white w-full">
     <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
             <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg font-bold hover:bg-gray-100 transition">
            + Tambah Siswa
            </a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class=" grow container mx-auto">
        <div class="mt-10">
            <!-- Card Header Start -->
             <div class="bg-white shadow p-10 rounded-lg ">
                <h1 class="text-4xl font-bold mb-20">Daftar Siswa</h1>
                <p class="text-gray-400 ">Berikut adalah daftar siswa yang terdaftar di sistem.</p>
             </div>
             <!-- Card Header End -->
              
             <!-- Card Content Start -->

             <!-- Card Content End -->
        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?=  date('Y') ?> Sistem Sekolah SMK Kristen Immanuel. All rights reserved.
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>