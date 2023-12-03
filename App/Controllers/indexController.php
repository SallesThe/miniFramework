<?php 
    namespace App\Controllers;
    class indexController
    {
        
        public function __construct() {
        }

        public function index()
        {
            echo 'Chegamos ao indexController e disparamos a action Index';
        }
        
        public function home()
        {
            echo 'Chegamos ao indexController e disparamos a action Index';
        }
    }
?>