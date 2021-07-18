<?php 


    
    

    ob_start();
    date_default_timezone_set("Africa/Cairo");
    include "./backend/classes/database.connection.php";
    include "./backend/functuions.php";

    spl_autoload_register(function($class){
        require_once "classes/$class.php";
    });
    define("BD_HOST", "localhost") ; 
    define("BD_NAME","twitter");
    define("BD_USER","ahmed");
    define("BD_PASS","AHMED110@");

    $public_end = strpos($SERVER["SCRIPT_NAME"],"/frontend")+9 ;
    $doc_root = substr($SERVER["SCRIPT_NAME"],0,$public_end);
    define("WWW_ROOT",$doc_root); 

    $account = new Account();
    $db = new Database();

?>