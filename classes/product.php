<?php  
    class Product{
        private $name;
        private $brand;
        private $price;
        private $productCode;
        private $category;
        private $inStock;
        
        /**
         * __construct
         * @param  string $name
         * @param  string $brand
         * @param  float  $price
         * @param  int    $productCode
         * @param  string $category
         * @param  int    $inStock
         * @return void
         */
        function __construct($name ,$brand ,$price ,$productCode ,$category ,$inStock)
        {
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->productCode = $productCode;
            $this->category = $category;
            $this->inStock = $inStock;
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
         * setBrand
         *
         * @param  string $brand
         * @return void
         */
        public function setBrand($brand){
            $this->brand = $brand;
        }
        
        /**
         * setPrice
         *
         * @param  float $price
         * @return void
         */
        public function setPrice($price){
            $this->price = $price;
        }
        
        /**
         * setProductCode
         *
         * @param  int $productCode
         * @return void
         */
        public function setProductCode($productCode){
            $this->productCode = $productCode;
        }
        
        /**
         * setCategory
         *
         * @param  string $category
         * @return void
         */
        public function setCategory($category){
            $this->category = $category;
        }
        
        /**
         * setInStock
         *
         * @param  int $inStock
         * @return void
         */
        public function setInStock($inStock){
            $this->inStock = $inStock;
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
         * getBrand
         *
         * @return string
         */
        public function getBrand(){
            return $this->brand;
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