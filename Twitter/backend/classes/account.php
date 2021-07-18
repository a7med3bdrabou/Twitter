<?php 

    class Account {
        private $pdo ; 
        private $errorArray = array();

        public function __construct()
        {
            $this->pdo=Database::instance();
        }

        public function register($fn,$ln,$un,$em,$pw,$pw2){
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
        }


        private function validateFirstName($fn) {
            if(strlen($fn) < 3 || strlen($fn) >25) {
                array_push($this->errorArray,Constant::$firstNameCharacter);
            }
        }

        private function validateLastName($ln) {
            if(strlen($ln) < 3 || strlen($ln) >25) {
                array_push($this->errorArray,Constant::$lastNameCharacter);
            }
        }

        public function getError($error){
            if(in_array($error,$this->errorArray)){
                return "<span class='errorMessage'>$error</span>";
            }
        }



    }





?>