<?php
    include_once __DIR__."/product.php";
    class Food extends Product{
        private $meatType;
        private $species;
        private $petSize;
        private $weigth;

                
                
        /**
         * __construct
         *
         * @param  string $meatType
         * @param  string $species
         * @param  string $petSize
         * @param  int $weigth
         * @param  string $name
         * @param  string $brand
         * @param  float $price
         * @param  int $productCode
         * @param  string $category
         * @param  int $inStock
         * @return void
         */
        function __construct($meatType ,$species ,$petSize ,$weigth ,$name ,$brand ,$price ,$productCode ,$category ,$inStock)
        {
            parent::__construct($name ,$brand ,$price ,$productCode ,$category ,$inStock);
            $this->meatType = $meatType;
            $this->species = $species;
            $this->petSize = $petSize;
            $this->weigth = $weigth;
        }
        
        /**
         * getMeatType
         *
         * @return string
         */
        public function getMeatType(){
            return $this->meatType;
        }
        
        /**
         * getSpecies
         *
         * @return string
         */
        public function getSpecies(){
            return $this->species;
        }
        
        /**
         * getPetSize
         *
         * @return string
         */
        public function getPetSize(){
            return $this->petSize;
        }
        
        /**
         * getWeigth
         *
         * @return int
         */
        public function getWeigth(){
            return $this->weigth;
        }
    }
?>