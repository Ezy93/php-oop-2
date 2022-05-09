<?php  
    class User {
        private $name;
        private $surname;
        private $userName;
        protected $password;
        private $isRegistered;
        private $hostID;
        private $isEmployee;
        private $address;
        private $email;
        private $telephoneNumber;
        private $discount;
                
                
        /**
         * __construct
         *
         * @param  string $name
         * @param  string $surname
         * @param  string $userName
         * @param  string $password
         * @param  bool $isEmployee
         * @param  string $address
         * @param  string $email
         * @param  int $telephoneNumber
         * @return void
         */
        public function __construct($name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber)
        {
            $this->name = $name;
            $this->surname = $surname;
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
            if ($this->isRegistered) {
                $this->discount = 20;
            }
        }
        
        /**
         * getName
         *
         * @return string
         */
        public function getName(){
            return $this->name;
        }
        
        /**
         * getSurname
         *
         * @return string
         */
        public function getSurname(){
            return $this->surname;
        }
        
        /**
         * getUserName
         *
         * @return string
         */
        public function getUserName(){
            if($this->userName != null){
                return $this->userName;
            }
            return "utente non registrato";
        }
        
        /**
         * getIsRegistered
         *
         * @return bool
         */
        public function getIsRegistered(){
            return $this->isRegistered;
        }
        
        /**
         * getHostID
         *
         * @return int
         */
        public function getHostID(){
            return $this->hostID;
        }
        
        /**
         * getIsEmployee
         *
         * @return bool
         */
        public function getIsEmployee(){
            return $this->isEmployee;
        }
        
        /**
         * getAddress
         *
         * @return string
         */
        public function getAddress(){
            return $this->address;
        }
        
        /**
         * getemail
         *
         * @return string
         */
        public function getemail(){
            return $this->email;
        }
        
        /**
         * getTelephoneNumber
         *
         * @return int
         */
        public function getTelephoneNumber(){
            return $this->telephoneNumber;
        }
        
        /**
         * getDiscount
         *
         * @return int
         */
        public function getDiscount(){
            return $this->discount;
        }
    }
    
?>