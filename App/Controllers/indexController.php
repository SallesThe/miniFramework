<?php 
    namespace App\Controllers;
    
    // * Resources miniFramework
    use MF\Controller\Action;

    // * Models
    use App\Models\Home;
    use App\Models\Product;
    use MF\Model\Container;

    class indexController extends Action
    {
        public function login()
        {
            $product = Container::getModel('Product');

            $products = $product->getProducts();

            $this->view->data = $products;

            $this->render('login', 'Layout_Default');
            
        }
        
        public function home()
        {
            $home = Container::getModel('Home');
            
            $homes = $home->getHome();

            $this->view->data = $homes;

            $this->render('home', 'Layout_Red');
        }

        public function sobreNos()
        {
            $this->render('sobre_nos', 'Layout_Default');
        }
    }
?>