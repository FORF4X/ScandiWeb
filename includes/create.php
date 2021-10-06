<?php 
    class Create {
        public function create() {
            global $database;
            $sql = "INSERT INTO products (sku, name, price)";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->sku) . "', '";
            $sql .= $database->escape_string($this->name) . "', '";
            $sql .= $database->escape_string($this->price) . "')";

            if($database->query($sql)) {
                $this->id = $database->the_insert_id();
                return true;
            } else {
                return false;
            }

            
        }

        public function the_insert_id() {
            return mysqli_insert_id($this->connection);
        }
    }






?>