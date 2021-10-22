<!-- Creare uno shop online.
Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario.
Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.
BONUS:
1.    Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
        $c = new CreditCard(..);
        $user->insertCreditCard($c);
2.    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->



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

    // stampo
    echo '<pre/>';
    //var_dump($myBeard_1);
    //var_dump($myBeard_2);

    //modifico $productionHouse in "One Race Films"
    $myBeard_1->setProducts('Beard Balm');
    //stampo a schermo $productionHouse modificata
    echo $myBeard_1->getProducts(). '<br/>';
    echo '<pre/>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop Online</title>
</head>
<body>
    <header>
        <h2> Shop Online </h2>
        <h3> Beard Shop </h3>
    </header>
    <main>
        <div id="container_main">
            <?php 
            foreach($myBeard_1 as $myBeard_1) {?>
                <div class="container-img" style="background-image: url('img'<?php echo $myBeard_1->getImg(); ?>.jpg);">
                    <div class="text">
                        <h4><?php echo $myBeard_1->getProducts(); ?></h4>
                        <h5><?php echo $myBeard_1->getBrand(); ?></h5>
                        <h5><?php echo $myBeard_1->getAcessories(); ?></h5>
                        <h5><?php echo $myBeard_1->getPrice(); ?></h5>
                    </div>
                </div>
               <?php 
                }
               ?> 
        </div>    
    </main>
</body>
</html>