 <?php 
 
    class Config  {

        private $user ="root";
        private $pass = "";
        private $base = "mysql:host=localhost;dbname=lottery";

        public function getUser() {
            return $this->user;
        }

        public function getPass() {
            return $this->pass;
        }

        public function getBase() {
            return $this->base;
        }

    }
 
 
 ?>