<?php
    namespace App\Core;

    use App\Controllers\StudentController;
    class Router
    {

        private array $routes = [];

        public function add(string $method, string $uri, string $controller, string $function)
        {
            $this->routes[] = [
                'method' => $method,
                'uri' => $uri,
                'controller' => $controller,
                'function' => $function
            ];
            // /$pattern = '#^' => /students/([0-9]+)$#';

        }
            
        


        public function run()
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            foreach($this->routes as $route) {
                $pattern = str_replace(
                search:'{id}',
                replace: '([0-9]+)',
                subject: $route['uri']
                );

                $pattern = '#^' . $pattern . '$#';

                if(preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove the full match

                require_once './app/controllers/' . $route['controller'] . '.php';

                $controllerName = 'App\Controllers\\' . $route['controller'];
                $controller = new $controllerName();

                call_user_func_array(
                    [$controller, $route['function']],$matches);
                return;
            }
            
            }
 





                http_response_code(404);
                echo '404 Not Found';
                return;

            }
        

    }

?>