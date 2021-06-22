<?php
/* Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. */


function random($min, $max)
{
    $voti = [];
    while (count($voti) < 10) {
        $voto = rand($min, $max);
        $voti[] = $voto;
    }
    return $voti;
};

$alunni = [
    [
        'nome' => 'Andrea',
        'cognome' => 'Gavardi',
        'voti' => random(1, 10)
    ],
    [
        'nome' => 'Ludovica',
        'cognome' => 'Giorgetti',
        'voti' => random(1, 10)
    ],
    [
        'nome' => 'Max',
        'cognome' => 'Pezzali',
        'voti' => random(1, 10)
    ],
    [
        'nome' => 'Roberto',
        'cognome' => 'Baggio',
        'voti' => random(1, 10)
    ]

];
//var_dump($alunni[0]['voti']);
//var_dump(array_sum($alunni[0]['voti']) / count($alunni[0]['voti']));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media voti</title>
</head>

<body>

    <?php for ($i = 0; $i < count($alunni); $i++) {
        $alunno = $alunni[$i];
    ?>
        <div class="studente">
            <span>
                <?php echo $alunno['nome']  ?>
            </span>
            <span>
                <?php echo $alunno['cognome'] ?>
            </span>
            <span>
                <?php
                $media = array_sum($alunno['voti']) / count($alunno['voti']);
                echo $media ?>
            </span>
        </div>
    <?php } ?>



</body>

</html>