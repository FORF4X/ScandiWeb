<?php 
    

    class Product {
        private $connection;
        
        public $id;
        public $sku;
        public $name;
        public $price;

        
        
        function create() {
            $sql = "INSERT INTO `products`(`id`, `sku`, `name`, `price`) VALUES ('$this->id', '$this->sku', '$this->name', '$this->price')";
            $this->connection = new Database();
            $this->connection->getConnection();


            return $this->connection->query($sql);
        }
    }
?>