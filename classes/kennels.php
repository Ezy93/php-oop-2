<?php  
    include_once __DIR__."/product.php";

    class Kennels extends Product{
        private $petSize;
        private $type;

        
        /**
         * __construct
         *
         * @param  string $petSize
         * @param  string $type
         * @param  string $name
         * @param  string $brand
         * @param  float  $price
         * @param  int $productCode
         * @param  string $category
         * @param  int $inStock
         * @return void
         */
        function __construct($petSize, $type, $name ,$brand ,$price ,$productCode ,$category ,$inStock)
        {
            parent::__construct($name ,$brand ,$price ,$productCode ,$category ,$inStock);
            $this->petSize = $petSize;
            $this->type = $type;
        }

        /* METODI SETTER */
        
        /**
         * setPetSize
         *
         * @param  string $petSize
         * @return void
         */
        public function setPetSize($petSize){
            $this->petSize = $petSize;
        }
        
        /**
         * setType
         *
         * @param  string $type
         * @return void
         */
        public function setType($type){
            $this->type =$type;
        }

        /* METODI GETTER */
        
        /**
         * getPetSize
         *
         * @return string
         */
        public function getPetSize(){
            return $this->petSize;
        }
        
        /**
         * getTypeOf
         *
         * @return string
         */
        public function getType(){
            return $this->type;
        }
    }
?>