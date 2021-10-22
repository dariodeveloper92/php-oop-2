<?php 
    
    // creo: una Classe
     class Carrello {
        //variabili dette attributi
        public $img;
        public $products;
        public $brand;
        public $acessories;
        public $price;

        // funzione costruttore
        function __construct($_img, $_products, $_brand, $_acessories, $_price)
        {
            $this->img = $_img;
            $this->products = $_products;
            $this->brand = $_brand;
            $this->acessories = $_acessories;
            $this->price = $_price;
        }
        // Funzioni dette Metodi delle Classi
        // Img
        function getImg()
        {
            return $this->img;
        }
        function setImg($_img)
        {
            $this->img = $_img;
        }
        // Products
        function getProducts()
        {
            return $this->products;
        }
        function setProducts($_products)
        {
            $this->products = $_products;
        }
        // Brand
        function getBrand()
        {
            return $this->brand;
        }
        function setBrand($_brand)
        {
            $this->brand = $_brand;
        }
        // Acessories
        function getAcessories()
        {
            return $this->acessories;
        }
        function setAcessories($_acessories)
        {
            $this->acessories = $_acessories;
        }
        // Price
        function getPrice()
        {
            return $this->price;
        }
        function setPrice($_price)
        {
            $this->price = $_price;
        }
    }

    // Oggetto: istanziamento della classe
    $myBeard_1 = new Carrello('img/shampoo_barba_1.jpg',' Shampoo Beard ', 'Proraso', 'Shaver', 25);
    $myBeard_2 = new Carrello('img/oil_barba_1.jpg', ' Oil Beard ', 'Gilette', 'Beard Brush', 20); 
    $myBeard_Collection = [$myBeard_1, $myBeard_2];

    // stampo
    //echo '<pre/>';
    //var_dump($myBeard_1);
    //var_dump($myBeard_2);

    //modifico $productionHouse in "One Race Films"
    $myBeard_1->setProducts('Beard Balm');
    //stampo a schermo $productionHouse modificata
    //echo $myBeard_1->getProducts(). '<br/>';
    //echo '<pre/>';

?>