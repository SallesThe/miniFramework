<?php 
    namespace App\Models;
    use MF\Model\Model;
    class Home extends Model
    {
        public function getHome()
        {
            $query = "SELECT id, titulo, descricao FROM tb_info";
            return $this->database->query($query)->fetchAll();
        }
    }
?>