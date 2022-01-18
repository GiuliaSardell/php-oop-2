<?php
require_once __DIR__ . "/classes/User.php";



$new_user = new User("Giulia", "Sardelli");
$new_user->setAge(25);
$new_user->setMail("giuliasardelli@gmail.com");
$new_user->setCard(12345678910);

var_dump($new_user)
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