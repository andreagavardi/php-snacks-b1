<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

<?php

$matches = [
    [
        'home_team' => 'Bulls',
        'host_team' => 'Olympia',
        'score_home' => '80',
        'score_host' => '25'
    ],
    [
        'home_team' => 'Virtus',
        'host_team' => 'Armani',
        'score_home' => '98',
        'score_host' => '0'
    ],
    [
        'home_team' => 'Fiorita',
        'host_team' => 'Sergnano',
        'score_home' => '25',
        'score_host' => '40'
    ],
    [
        'home_team' => 'Lakers',
        'host_team' => 'DisneyT',
        'score_home' => '88',
        'score_host' => '112'
    ],
    [
        'home_team' => 'PlayMouth',
        'host_team' => 'Disconville',
        'score_home' => '22',
        'score_host' => '0'
    ]
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Today's Matches</h1>
    <div class="container">
        <?php for ($i = 0; $i < count($matches); $i++) {
            $match = $matches[$i];
        ?>
            <div class="match">
                <span><?php echo $match['home_team'] ?> -</span>
                <span><?php echo $match['host_team'] ?> | </span>
                <span><?php echo $match['score_home'] ?> - </span>
                <span><?php echo $match['score_host'] ?></span>

            </div>

        <?php } ?>
    </div>
</body>

</html>