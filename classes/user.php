<?php  
    include_once __DIR__."/creditCard.php";
    
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
        private $creditCardList;
        
                
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
         * @param  string $telephoneNumber
         * @param  object $creditCardList
         * @return void
         */
        function __construct($name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber ,CreditCard $creditCardList = null)
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
            $this->creditCardList = $creditCardList;
            
        }

        /* METODI SETTER */
        
        /**
         * setName
         *
         * @param  string $name
         * @return void
         */
        public function setName($name){
            $this->name = $name;
        }
        
        /**
         * setSurname
         * 
         * @param  string $surname
         * @return void
         */
        public function setSurname($surname){
            $this->surname = $surname;
        }
        
        /**
         * setUsername
         *
         * @param  string $userName
         * @return void
         */
        public function setUsername($userName){
            $this->userName = $userName;
        }
        
        /**
         * setPassword
         *
         * @param  string $password
         * @return void
         */
        public function setPassword($password){
            $this->password = $password;
        }
        
        /**
         * setIsEmployee
         *
         * @param  bool $isEmployee
         * @return void
         */
        public function setIsEmployee($isEmployee){
            $this->isEmployee = $isEmployee;
        }
        
        /**
         * setAddress
         *
         * @param  string $address
         * @return void
         */
        public function setAddress($address){
            $this->address = $address;
        }
        
        /**
         * setEmail
         *
         * @param  string $email
         * @return void
         */
        public function setEmail($email){
            $this->email = $email;
        }
        
        /**
         * setTelephoneNumber
         *
         * @param  string $telephoneNumber
         * @return void
         */
        public function setTelephoneNumber($telephoneNumber){
            $this->telephoneNumber = $telephoneNumber;
        }
        
        /**
         * setCreditCard
         *
         * @param  object $creditCard
         * @return void
         */
        public function setCreditCard($creditCard){
            $this->creditCardList[] = $creditCard;
        }
        
        /* METODI GETTER */
        
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
         * @return string
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
        
        /**
         * getCreditCardList
         *
         * @return array[object]
         */
        public function getCreditCardList(){
            return $this->creditCardList;
        }
    }
    
?>