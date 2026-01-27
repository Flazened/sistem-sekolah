<?php
    namespace App\Core;

    use App\Controllers\StudentController;
    class Router
    {

        public function run()
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


            if ($method == 'GET' && $uri == '/students') {
                require_once './app/config/controllers/StudentController.php';
                $controller = new StudentController();
                $controller->index();
                return;
            }

            if ($method == 'GET' && $uri == '/students/create') {
                require_once './app/config/controllers/StudentController.php';
                $controller = new StudentController();
                $controller->create();                
                return;
            }

            if ($method == 'GET' && $uri == '/students') {
                echo '<h1>Daftar Siswa</h1>';
                echo '<p>Menampilkan Daftar Siswa</p>';
                return;
            }

                http_response_code(404);

            }
        

    }

?>