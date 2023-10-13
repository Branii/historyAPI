
<?php 

    class ExceptionHandler {
        public static function HandleException(Throwable $throwable) {

            (int)$code = $throwable->getCode() ? : http_response_code(500);
            if($code == 404){
                echo json_encode(["error"=>"Resource not found"]);
            }else{
                echo json_encode([
                    "code"=> $throwable->getCode(),
                    "file"=> $throwable->getFile(),
                    "message"=> $throwable->getMessage(),
                    "line"=> $throwable->getLine()
                ]);
            }

        }

    }