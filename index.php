<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard;
$user->insertCreditCard/$c/;
BONUS:
Gestite eventuali eccezioni che si possono verificare es: carta di credito scaduta. -->


<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/PremiumUser.php";


$new_user = new User("Giulia", "Sardelli");
$new_user->setAge(25);
$new_user->setMail("giuliasardelli@gmail.com");
$new_user->setCard(12345678910);

var_dump($new_user);

$new_premiumUser = new PremiumUser("Gino", "Gini", 50);

$new_premiumUser->setAge(40);
$new_premiumUser->setMail("gino@gmail.com");
$new_premiumUser->setCard(10987654321);

var_dump($new_premiumUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<h2>Utenti</h2>

<p>Nome: <?php echo $new_user->getName() ?></p>
<p>Cognome: <?php echo $new_user->getLastname() ?></p>
<p>Età: <?php echo $new_user->getAge() ?></p>
<p>Mail: <?php echo $new_user->getMail() ?></p>
<p>Card: <?php echo $new_user->getCard() ?></p>


  


</body>
</html>