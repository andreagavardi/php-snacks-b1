<!-- Snack 2
Passare come parametri GET name, mail e age
 e verificare (cercando i metodi che non conosciamo nella documentazione) 
 che name sia più lungo di 3 caratteri, 
 che mail contenga un punto e una chiocciola e 
 che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”,
 altrimenti “Accesso negato” -->


<?php

$name = $_GET['username'];
$email = $_GET['email'];
$age = $_GET['age'];


var_dump(is_numeric($age));

if (strlen($name) >= 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    $risposta = 'Accesso riuscito';
} else {
    $risposta = 'Accesso negato';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h2>
        Inserisci le tue credenziali
    </h2>
    <form action="#" method="get">
        <input type="text" name="username" id="username" placeholder="inserisci il tuo nome">
        <input type="email" name="email" id="email" placeholder="inserisci la tua mail">
        <input type="text" name="age" id="age" placeholder="inserisci la tua età">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2> <?php echo $risposta ?></h2>
</body>

</html>