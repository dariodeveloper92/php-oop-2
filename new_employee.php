<?php 
    /* Importo  */
    require_once 'carrello.php';


    class Employee extends Carrello {
        //variabili dette attributi
        public $img;
        public $products;
        public $brand;
        public $price;
        //sconto
        public $sconto;
        public $livello;
        public $age;

        // funzione costruttore
        function __construct($_img, $_products, $_brand, $_price, $_sconto, $_livello)
        {
            $this->img = $_img;
            $this->products = $_products;
            $this->brand = $_brand;
            $this->price = $_price;
            $this->sconto = $_sconto;
            $this->livello = $_livello;
        }

        public function setLivello($_livello) {
            $this->livello = $_livello;
        }
        function getLivello()
        {
            return $this->livello;
        }
        public function setSconto($_age)
        {
            if($_age > 60) {
                $this->sconto;
            } else {
                $this->sconto = $this->livello * 10;
            }
        }
        function getSconto()
        {
            $scontoTmp = ($this->price / 100) * $this->sconto;
            return number_format(($this->price - $scontoTmp), 2);
        }
    }

    // Oggetto: istanziamento della classe
    $myEmployee = new Employee('IMMAGINE', 'NOME', 'brand', 'prezzo', ' sconto ' , 'LIVELLO');
    var_dump($myEmployee);
    $myEmployee->setSconto(61);
?>