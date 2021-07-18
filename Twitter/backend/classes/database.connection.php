<?php 
    // $dsn = "mysql:host=localhost;dbname=twitter" ; 
    // $user = "ahmed";
    // $pass = "AHMED110@";
    // $option = array(
    //     PDO::MYSQL_ATTR_INIT_COMMAND=>"set names utf8",
    // );

    // try {
    //     $conn = new PDO($dsn,$user,$pass,$option);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     echo "Connection Failed".$e->getMessage();
    // }

    class Database{
        protected $pdo ;
        public static $instance;
        public function __construct()
        {
            $this->pdo = new PDO("mysql:host=".BD_HOST.";dbname=".BD_NAME,BD_USER , BD_PASS);
        }

        public static function instance(){
            if(self::$instance === null){
                self::$instance = new self;
            }

            return self::$instance;
        }

        public function __call($method, $args)
        {
            return call_user_func_array(array($this->pdo,$method),$args);
        }
    }
?>