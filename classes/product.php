<?php  
    class Product{
        private $price;
        private $productCode;
        private $category;
        private $inStock;
        
        /**
         * __construct
         *
         * @param  float $price
         * @param  int $productCode
         * @param  string $category
         * @param  int $inStock
         * @return void
         */
        function __construct($price ,$productCode ,$category ,$inStock)
        {
            $this->price = $price;
            $this->productCode = $productCode;
            $this->category = $category;
            $this->inStock = $inStock;
        }
        
        /**
         * getPrice
         *
         * @return float
         */
        public function getPrice(){
            return $this->price;
        }
        
        /**
         * getProductCode
         *
         * @return int
         */
        public function getProductCode(){
            return $this->productCode;
        }
        
        /**
         * getCategory
         *
         * @return string
         */
        public function getCategory(){
            return $this->category;
        }
        
        /**
         * getInStock
         *
         * @return int
         */
        public function getInStock(){
            return $this->inStock;
        }
    }
?>