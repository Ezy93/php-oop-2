<?php  
    include_once __DIR__."/product.php";

    class Toys extends Product{
        private $materials;
        private $typeOf;
        private $intendedUsePet;
        
        /**
         * __construct
         *
         * @param  string $materials
         * @param  string $typeOf
         * @param  string $intendedUsePet
         * @param  string $name
         * @param  string $brand
         * @param  float $price
         * @param  int $productCode
         * @param  string $category
         * @param  int $inStock
         * @return void
         */
        function __construct($materials, $typeOf, $intendedUsePet, $name ,$brand ,$price ,$productCode ,$category ,$inStock)
        {
            parent::__construct($name ,$brand ,$price ,$productCode ,$category ,$inStock);
            $this->materials = $materials;
            $this->typeOf = $typeOf;
            $this->intendedUse = $intendedUsePet;
        }

        /* METODI SETTER */
        
        /**
         * setMaterials
         *
         * @param  string $materials
         * @return void
         */
        public function setMaterials($materials){
            $this->materials = $materials;
        }
        
        /**
         * setTypeOf
         *
         * @param  string $typeOf
         * @return void
         */
        public function setTypeOf($typeOf){
            $this->typeOf = $typeOf;
        }
        
        /**
         * setIntendedUsePet
         *
         * @param  string $intendedUsePet
         * @return void
         */
        public function setIntendedUsePet($intendedUsePet){
            $this->intendedUSePet = $intendedUsePet;
        }

        /* METODI GETTER */
        
        /**
         * getMaterials
         *
         * @return string
         */
        public function getMaterials(){
            return $this->materials;
        }
        
        /**
         * getTypeOf
         *
         * @return string
         */
        public function getTypeOf(){
            return $this->typeOf;
        }
        
        /**
         * getIntendedUsePet
         *
         * @return string
         */
        public function getIntendedUsePet(){
            return $this->intendedUsePet;
        }
    }

?>