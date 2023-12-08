<?php 
    namespace MF\Init;
    abstract class Bootstrap
    {
        private $routes;
        abstract protected function initRoutes();

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getRequestUri());
        }

        public function getRoutes()
        {
            return $this->routes;
        }

        public function setRoutes(array $routes)
        {
            // * Storing our routes in the private variable $routes
            $this->routes = $routes;
        }

        protected function run($requestUri)
        {
            foreach ($this->getRoutes() as $path => $route) {
                if($requestUri == $route['route'])
                {
                    $class = "App\\Controllers\\" . $route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        // ? Q: What's RequestUri? R: "/home" is a requestUri 
        protected function getRequestUri()
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>