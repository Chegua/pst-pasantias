<?php 
	namespace Controllers;
    
    class errorsController
    {
        public static function status(Int $code)
        {
            if($code===404)
                require_once 'Views/errors/404.php';
        }

    }