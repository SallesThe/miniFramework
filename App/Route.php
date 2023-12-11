<?php 
    namespace App;
    use MF\Init\Bootstrap;
    class Route extends Bootstrap
    {
        protected function initRoutes()
        {
            $routes['login'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'login'
            );

            $routes['home'] = array(
                'route' => '/home',
                'controller' => 'indexController',
                'action' => 'home'
            );

            $routes['sobreNos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );

            // * Here we set the routes that were initialized
            $this->setRoutes($routes);
        }

        
    }
?>