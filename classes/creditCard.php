<?php  
    class CreditCard{
        private $cardNumber;
        private $cardCVV;
        public $cardExpireDate;
        private $cardOwner;
        private $isExpired;
        private $cardID;
        
        /**
         * __construct
         *
         * @param  string $cardNumber
         * @param  string $cardCVV
         * @param  string $cardExpireDate
         * @param  string $cardOwner
         * @param  int $cardID
         * @return void
         */
        function __construct($cardNumber ,$cardCVV ,$cardExpireDate ,$cardOwner, $cardID)
        {
            $this->cardNumber = $cardNumber;
            $this->cardCVV = $cardCVV;
            $this->cardExpireDate = $cardExpireDate;
            $this->cardOwner = $cardOwner;
            $this->cardID = $cardID;
        }
        
        /* METODI SETTER */
        
        /**
         * setCardNumber
         *
         * @param  string $cardNumber
         * @return void
         */
        public function setCardNumber($cardNumber){
            $this->cardNumber = $cardNumber;
        }
        
        /**
         * setCardCVV
         *
         * @param  string $cardCVV
         * @return void
         */
        public function setCardCVV($cardCVV){
            $this->cardCVV = $cardCVV;        
        }

        /**
         * getIsExpire
         *
         * @return bool
         */
        /* controllare questa funzione perchè non va bene da sempre true */
        public function setIsExpire($dateCard){
            $now = new DateTime();
            $cardDateTime = new DateTime("$dateCard"."00:00:00");
            if($cardDateTime<$now){
                $this->isExpired = true;
            }else{
                $this->isExpired = false;
            }
        }
        
        /**
         * setCardOwner
         *
         * @param  string $cardOwner
         * @return void
         */
        public function setCardOwner($cardOwner){
            $this->cardOwner = $cardOwner;
        }
                
        /**
         * setCardID
         *
         * @param  int $cardID
         * @return void
         */
        public function setCardID($cardID){
            $this->cardID = $cardID;
        }

        /* METODI GETTER */
                
        /**
         * getCardNumber
         *
         * @return string
         */
        public function getCardNumber(){
            return $this->cardNumber; 
        }
        
        /**
         * getCardCVV
         *
         * @return string
         */
        public function getCardCVV(){
            return $this->cardCVV;
        }
        
        /**
         * getCardExpireDate
         *
         * @return string
         */
        public function getCardExpireDate(){
            return $this->cardExpireDate;
        }
        
        /**
         * getIsExpire
         *
         * @return bool
         */
        public function getIsExpire(){
            return $this->isExpired;
        }
        
        /**
         * getCardOwner
         *
         * @return string
         */
        public function getCardOwner(){
            return $this->cardOwner;
        }
        
        
        /**
         * getCardID
         *
         * @return int
         */
        public function getCardID(){
            return $this->cardID;
        }

    }
?>