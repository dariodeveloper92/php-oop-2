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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_2.css">
    <title>Shop Online</title>
</head>
<?php 
    /* Importo  */
    require_once 'carrello.php';
    require_once 'utente.php';
    //require_once 'employee.php';
    //require_once 'new_employee.php';
?>
<body>
    <header>
        <h2> Shop Online </h2>
        <h3> Beard Shop </h3>
    </header>
    <main>
        <div id="container_products">
            <!-- Prodotti -->
            <?php 
            foreach($myBeard_Collection as $myBeard) {?>
                <div class="box_img">
                    <div id="container-img" style="background-image: url(<?php echo $myBeard->getImg(); ?>);">
                        <div class="text_img">
                            <h4>Product: <?php echo $myBeard->getProducts(); ?></h4>
                            <h5> Brand: <?php echo $myBeard->getBrand(); ?></h5>
                            <h5> Price: <?php echo $myBeard->getPrice(); ?></h5>
                        </div>
                    </div>
                </div>
                <?php 
                }
               ?>
        </div>     
        <div id="container_user">    
            <!-- Utente -->
            <?php 
            foreach($user_Collection as $user) {?>
                <div class="box_user">
                    <div id="container-user" style="background-image: url(<?php echo $user->getImgUser(); ?>);">
                        <div class="text_user">
                            <h4> Name: <?php echo $user->getName(); ?></h4>
                            <h5> Age: <?php echo $user->getAge(); ?></h5>
                            <h5> Email: <?php echo $user->getEmail(); ?></h5>
                            <ul>
                                <?php foreach($myBeard_Collection as $myBeard) {?>
                                    <li> Prodotti: </li>
                                    <li> Prezzo scontato: </li> <br>
                                <?php } ?>    
                            </ul>
                        </div>
                    </div>
                </div>
                <?php 
                }
               ?>
        </div>    
    </main>
</body>
</html>