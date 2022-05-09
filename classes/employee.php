<?php
    include_once __DIR__."/user.php";

    class Employee extends User{
        private $employeeID;
        private $level;
        private $role;

        function __construct($employeeID ,$level ,$role ,$name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber)
        {
            $this->employeeID = $employeeID;
            $this->level = $level;
            $this->role = $role;
            parent::__construct($name ,$surname ,$userName = null ,$password = null ,$isEmployee=false ,$address ,$email ,$telephoneNumber);
        }
    }
?>