<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
 Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
 e i PM in un rettangolo verde. -->


<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

//var_dump($db['teachers']);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher & PM</title>
    <style>
        .teachers {
            background-color: grey;

        }

        .PM {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="teachers">
        <h2>teachers</h2>
        <?php
        for ($i = 0; $i < count($db['teachers']); $i++) {
            $teacher = $db['teachers'][$i] ?>
            <div>
                <span><?php echo $teacher['name'] ?></span>
                <span><?php echo $teacher['lastname'] ?></span>

            </div>
        <?php } ?>
    </div>
    <div class="PM">
        <h2>PM</h2>
        <?php
        for ($i = 0; $i < count($db['pm']); $i++) {
            $pm = $db['pm'][$i] ?>
            <div>
                <span><?php echo $pm['name'] ?></span>
                <span><?php echo $pm['lastname'] ?></span>

            </div>
        <?php } ?>
    </div>
</body>

</html>