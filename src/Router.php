<?php

namespace app\src;

class Router
{
        public Request $request;
        protected array $routes = [];

        public function __construct()
        {
                $this->request = new Request();
        }

        public function get($path, $callBack)
        {
                $this->routes['get'][$path] = $callBack;
        }

        public function resolve()
        {
                $path = $this->request->getPath();
                $method = $this->request->getMethod();
                $callBack = $this->routes[$method][$path] ?? false;

                if ($callBack === false) {
                        echo '404 - NOT FOUND';
                        exit;
                }

                echo call_user_func($callBack);
        }
}