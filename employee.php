<?php 
    /* Importo  */
    require_once 'utente.php';


    class Employee extends User {
        public $livello;

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
    //$myEployee = new Employee($_name, $_age);
    //var_dump($myEployee);

?>