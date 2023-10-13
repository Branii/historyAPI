<?php 

    class Controller extends Model{

        public function ProccessMethod(String $method, $table) {

           // handle request method here **** simple

            switch($method){

                case "GET" :
                     
                    echo json_encode(self::getResource($table));

                break;

                default:
                http_response_code(404);
                header("Allow: GET, PUT, DELETE, PATCH");

            }

        }

        public function getResource(String $table) : Mixed {
            try {
                return parent::getResource($table);
            } catch (\Throwable $th) {
               return http_response_code(404);
            }
        }


    }

?>