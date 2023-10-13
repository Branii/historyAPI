<?php 

    class Model extends Database {

        public function getResource(String $table) : Mixed { 
            
            $sql = "SELECT * FROM $table";
            $stmt = self::openlink()->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;

        }

    }

?>