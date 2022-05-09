<?php  
    class User {
        private $userName;
        protected $password;
        private $isRegistered;
        private $hostID;
        private $isEmployee;
        private $address;
        private $email;
        private $telephoneNumber;
        
        public function __construct($userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber)
        {
            $this->userName = $userName;
            $this->password = $password;
            if ($userName && $password == null) {
                $this->isREgistered = false;
            }else{
                $this->isRegistered = true;
            }

            if (!$this->isRegistered) {
                $this->hostID = rand(1000,10000000);
            }else{
                $this->hostID = null;
            }

            $this->isEmployee = $isEmployee;
            $this->address = $address;
            $this->email = $email;
            $this->telephoneNumber = $telephoneNumber;
        }

        public function getUserName(){
            if($this->userName != null){
                return $this->userName;
            }
            return "utente non registrato";
        }

        public function getIsRegistered(){
            return $this->isRegistered;
        }

        public function getHostID(){
            return $this->hostID;
        }

        public function getIsEmployee(){
            return $this->isEmployee;
        }

        public function getAddress(){
            return $this->address;
        }

        public function getemail(){
            return $this->email;
        }

        public function getTelephoneNumber(){
            return $this->telephoneNumber;
        }
    }
    
?>