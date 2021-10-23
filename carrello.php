<?php 
    // creo: una Classe
     class Carrello {
        //variabili dette attributi
        public $img;
        public $products;
        public $brand;
        public $price;

        // funzione costruttore
        function __construct($_img, $_products, $_brand, $_price)
        {
            $this->img = $_img;
            $this->products = $_products;
            $this->brand = $_brand;
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
    $myBeard_1 = new Carrello('img/shampoo_barba_1.jpg',' Shampoo Beard ', 'Proraso',  25);
    $myBeard_2 = new Carrello('img/oil_barba_1.jpg', ' Oil Beard ', 'Proraso', 20);
    $myBeard_3 = new Carrello('img/pettine_barba_1.jpg', ' Pettine Beard ', 'Proraso', 18);
    $myBeard_4 = new Carrello('img/rasoio_barba_1.jpg', ' Rasoio Beard ', 'Proraso', 22); 
    $myBeard_5 = new Carrello('img/spazzola_barba_1.jpg', ' Spazzola Beard ', 'Proraso', 15); 

    // Array
    $myBeard_Collection = [$myBeard_1, $myBeard_2,  $myBeard_3,  $myBeard_4, $myBeard_5] ;

    // stampo
    //echo '<pre/>';
    //var_dump($myBeard_1);
    //var_dump($myBeard_2);

    //modifico $productionHouse in "One Race Films"
    //$myBeard_1->setProducts('Beard Balm');
    //stampo a schermo $productionHouse modificata
    //echo $myBeard_1->getProducts(). '<br/>';
    //echo '<pre/>';

?>