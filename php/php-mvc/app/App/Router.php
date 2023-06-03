<?php

namespace SatryaPutra\Belajar\PHP\MVC\App;

class Router {
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void {
        // menambah URL Mapping
        self::$routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function
        ];
    }

    public static function run(): void {
        // default path
        $path = "/";

        // config path
        if(isset($_SERVER["PATH_INFO"])) $path = $_SERVER["PATH_INFO"];

        // method
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$routes as $route) {
            if($path == $route["path"] && $method == $route["method"]) {

                $controller = new $route["controller"];
                $function = $route["function"];
                $controller->$function();

                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";

    }
}

?>