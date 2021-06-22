<!-- Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

$numeri_casuali = [];

while (count($numeri_casuali) < 15) {
    $number = rand(0, 100);
    if (!in_array($number, $numeri_casuali)) {
        $numeri_casuali[] = $number;
    }
}
var_dump($numeri_casuali);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>

<body>

</body>

</html>