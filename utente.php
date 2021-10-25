<?php 
    // creo: una Classe
     class User {
        //variabili dette attributi
        public $imgUser;
        public $name;
        public $age;
        public $email;
        public $sconto;

        // funzione costruttore
        function __construct($_imgUser, $_name = ' ', $_age= NULL, $_email)
        {
            $this->imgUser = $_imgUser;
            $this->name = $_name;
            $this->age = $_age;
            $this->email = $_email;
        }
        // Funzioni dette Metodi delle Classi
        // Img User
        function getImgUser()
        {
            return $this->imgUser;
        }
        function setImgUser($_imgUser)
        {
            $this->imgUser = $_imgUser;
        }
        // Name
        function getName()
        {
            return $this->name;
        }
        function setName($_name)
        {
            $this->name = $_name;
        }
        // Age
        function getAge()
        {
            return $this->age;
        }
        function setAge($_age)
        {
            $this->age = $_age;
        }
        // Email
        function getEmail()
        {
            return $this->email;
        }
        function setEmail($_email)
        {
            $this->email = $_email;
        }
        // Sconto
        function getSconto()
        {
            return $this->sconto;
        }
        function setSconto($_age)
        {
            if ($_age > 60) {
                $this->sconto = 40;
            }
        }
    }

    // Oggetto: istanziamento della classe
    $user_1 = new User('img/user_1.jpg', 'Berlino', 29, 'dario@gmail.com');
    $user_2 = new User('img/user_2.jpg', 'Tokyo', 65, 'paolo@gmail.com'); 

    //$myEmployee = new Employee('IMMAGINE', 'NOME', 61, 'EMAIL', 'LIVELLO');
    //var_dump($myEmployee);

   // Array
    $user_Collection = [$user_1, $user_2] ;
    
?>