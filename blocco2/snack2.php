<!-- Snack 2
Creiamo due pagine php. 
La prima farà una chiamata GET alla seconda attraverso un form. 
Il form avrà un input di testo in cui inserire il nome di un invitato. 
Inseriamo nell’altro file una lista di invitati.
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>

<body>
    <form action="./snack2_get.php" method="get">
        <input type="text" name="guest_name" id="guest_name" placeholder="inserisci il tuo nome">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>