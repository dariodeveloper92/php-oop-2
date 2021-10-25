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
        public $sconto = 0;
        public $livello;

        // funzione costruttore
        function __construct($_imgUser, $_name = ' ', $_age= NULL, $_email, $_livello)
        {
            $this->imgUser = $_imgUser;
            $this->name = $_name;
            $this->age = $_age;
            $this->email = $_email;
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
                $this->sconto = 50;
            } else {
                $this->sconto = $this->livello * 10;
            }
        }
    }

    // Oggetto: istanziamento della classe
    $myEployee = new Employee('IMMAGINE', 'NOME', 61, 'EMAIL', 'LIVELLO');
    var_dump($myEployee);
    $myEmployee->setSconto(61);

?>