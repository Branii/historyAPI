<?php

declare(strict_types=1);
spl_autoload_register(function ($class) {
    require_once  "./src/{$class}.php";
});
set_exception_handler("ExceptionHandler::HandleException");
header("Content-type: application/json;charset=UTF-8");
$path = explode('/',$_SERVER['REQUEST_URI']);


if($path[2] == "api" && $path[3] == "v1" && $path[4] == "history"){

   $table = $path[5];
  // echo json_encode(array("message"=>"some something"));
   (new Controller)->ProccessMethod($_SERVER['REQUEST_METHOD'], $table);

}else{
    http_response_code(404);
}