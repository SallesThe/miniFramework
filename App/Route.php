<?php 
    namespace App;
    class Route 
    {
        private $routes;

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes()
        {
            return $this->routes;
        }

        public function setRoutes(array $routes)
        {
            $this->routes = $routes;
        }

        public function initRoutes()
        {
            $routes['login'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );

            $routes['home'] = array(
                'route' => '/home',
                'controller' => 'indexController',
                'action' => 'home'
            );



            $this->setRoutes($routes);
        }

        public function run($url)
        {
            foreach ($this->getRoutes() as $path => $route) {
                if($url == $route['route'])
                {
                    $class = "App\\Controllers\\" . $route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                    var_dump($controller);
                } else {
                    echo "action not found! <br>";
                }
            }
        }

        public function getUrl()
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>