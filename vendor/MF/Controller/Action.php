<?php 
    namespace MF\Controller;
    use stdClass;

    abstract class Action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new stdClass();
        }

        protected function render($view, $layout)
        {
            $this->view->page = $view;
            require_once "../App/Views/" . $layout . ".phtml";
        }

        protected function content()
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
            $currentClass = str_replace('Controller', '', $currentClass);          
            require_once '../App/Views/' . $currentClass . '/' . $this->view->page . '.phtml';
        }
    }
?>