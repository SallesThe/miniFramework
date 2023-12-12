<?php 
    namespace App;

use Exception;
use PDO;

    class Connection
    {
        public function Connect()
        {
            try {
                $conn = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
                return $conn;
            } catch (Exception $e) {
                // ! tratar...
            }
        }
    }