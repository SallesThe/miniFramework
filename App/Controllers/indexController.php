<?php 
    namespace App\Controllers;
    use stdClass;

    class indexController
    {
        private $view;

        public function __construct()
        {
            $this->view = new stdClass();
        }

        public function login()
        {
            $this->view->data = array('Playstation 5', 'Playstation 4', 'Playstation 3', 'Playstation 2', 'Playstation');
            $this->render('login');
            
        }
        
        public function home()
        {
            $this->view->data = array('Taycan', 'Urus', 'Corvette', 'Mustang');
            $this->render('home');
        }

        public function render($view)
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
            $currentClass = str_replace('Controller', '', $currentClass);
            var_dump(
         [   
                    "Classe Atual" => $currentClass, 
                    "View" => $view
                ]
            
            );
            require_once '../App/Views/' . $currentClass . '/' . $view . '.phtml';
        }
    }
?>