<?php 
    namespace App\Controllers;
    use stdClass;
    use MF\Controller\Action;

    class indexController extends Action
    {
        public function login()
        {
            $this->view->data = array('Playstation 5', 'Playstation 4', 'Playstation 3', 'Playstation 2', 'Playstation');
            $this->render('login', 'Layout_Default');
            
        }
        
        public function home()
        {
            $this->view->data = array('Taycan', 'Urus', 'Corvette', 'Mustang');
            $this->render('home', 'Layout_Redddd');
        }

        public function sobreNos()
        {
            $this->view->data = array('Davi', 'Duda', 'Caju', 'Susy', 'Pérola');
            $this->render('sobre_nos', 'Layout_Default');
        }
    }
?>