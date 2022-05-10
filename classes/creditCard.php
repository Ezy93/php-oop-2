<?php  
    class CreditCard{
        private $cardNumber;
        private $cardCVV;
        private $cardExpireDate;
        private $cardOwner;
        private $isExpired;

        function __construct($cardNumber ,$cardCVV ,$cardExpireDate ,$cardOwner)
        {
            $this->cardNumber = $cardNumber;
            $this->cardCVV = $cardCVV;
            $this->cardExpireDate = $cardExpireDate;
            $this->cardOwner = $cardOwner;
        }

        public function getCardNumber(){
            return $this->cardNumber; 
        }

        public function getCardCVV(){
            return $this->cardCVV;
        }

        public function getCardExpireDate(){
            return $this->cardExpireDate;
        }

        public function getCardOwner(){
            return $this->cardOwner;
        }

        public function getIsExpire(){
            if(strtotime($this->cardExpireDate) < strtotime(date("d-m-y"))){ 
                return $this->isExpired = false;
            }
            return $this->isExpired = true;
        }

    }
?>