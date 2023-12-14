<?php 
    namespace MF\Model;
    use App\Connection;
    class Container
    {
        public static function getModel($model)
        {
            // ? RETORNAR O MODELO SOLICITADO JA INSTANCIADO, INCLUSIVE COM A CONEXÃO ESTABELECIDA
            $class = "\\App\\Models\\" . ucfirst($model);
            $conn = Connection::Connect();
            return new $class($conn);
        }
    }
?>