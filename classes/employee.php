<?php
    include_once __DIR__."/user.php";

    class Employee extends User{
        private $employeeID;
        private $level;
        private $role;
        
        /**
         * __construct
         *
         * @param  int    $employeeID
         * @param  int    $level
         * @param  string $role
         * @param  string $name
         * @param  string $surname
         * @param  string $userName
         * @param  string $password
         * @param  bool   $isEmployee
         * @param  string $address
         * @param  string $email
         * @param  string $telephoneNumber
         * @return void
         */
        function __construct($employeeID ,$level ,$role ,$name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber)
        {
            $this->employeeID = $employeeID;
            $this->level = $level;
            $this->role = $role;
            parent::__construct($name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber);
        }

        /* METODI SETTER */     
        
        /**
         * setEmployeeID
         *
         * @param  int $employeeID
         * @return void
         */
        public function setEmployeeID($employeeID){
            $this->employeeID = $employeeID;
        }
        
        /**
         * setLevel
         *
         * @param  int $level
         * @return void
         */
        public function setLevel($level){
            $this->level = $level;
        }
        
        /**
         * setRole
         *
         * @param  string $role
         * @return void
         */
        public function setRole($role){
            $this->role = $role;
        }
        
        
        /* METODI GETTER */  
        
        /**
         * getEmplyeedID
         *
         * @return int
         */
        public function getEmplyeedID(){
            return $this->employeeID;
        }
        
        /**
         * getLevel
         *
         * @return int
         */
        public function getLevel(){
            return $this->level;
        }
        
        /**
         * getRole
         *
         * @return string
         */
        public function getRole(){
            return $this->role;
        }
    }
?>