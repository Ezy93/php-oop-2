<?php  
    class CreditCard{
        private $cardNumber;
        private $cardCVV;
        private $cardExpireDate;
        private $cardOwner;
        private $isExpired;
        private $cardID;

        function __construct($cardNumber ,$cardCVV ,$cardExpireDate ,$cardOwner, $cardID)
        {
            $this->cardNumber = $cardNumber;
            $this->cardCVV = $cardCVV;
            $this->cardExpireDate = $cardExpireDate;
            $this->cardOwner = $cardOwner;
            $this->cardID = $cardID;
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

        public function getCardID(){
            return $this->cardId;
        }

    }
?>