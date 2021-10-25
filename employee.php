<?php 
    /* Importo  */
    require_once 'utente.php';


    class Employee extends User {
        //public $livello;

        //variabili dette attributi
        public $imgUser;
        public $name;
        public $age;
        public $email;
        public $sconto;
        public $livello;
        //price
        public $price;

        // funzione costruttore
        function __construct($_imgUser, $_name = ' ', $_age= NULL, $_email, $_sconto, $_livello)
        {
            $this->imgUser = $_imgUser;
            $this->name = $_name;
            $this->age = $_age;
            $this->email = $_email;
            $this->sconto = $_sconto;
            $this->livello = $_livello;
            //$this->price = $_price;
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
           function prezzo_scontato($price, $sconto) {
                $sconto = ($price / 100) * $sconto;
                return number_format(($price - $sconto), 2); 
            }
            return $this->sconto;
        }
    }

    // Oggetto: istanziamento della classe
    $myEmployee = new Employee('IMMAGINE', 'NOME', 61, 'EMAIL', '' , 'LIVELLO');
    var_dump($myEmployee);
    $myEmployee->setSconto(61);

?>