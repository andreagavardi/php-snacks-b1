<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi. 
 Ogni punto un nuovo paragrafo. -->

<?php
$paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, aliquid asperiores, sunt error quas labore eius cum odit dolor aut quos consequatur vero incidunt est molestias ullam nemo nobis maiores. quam nam quod doloribus iure nisi reiciendis! Accusantium iure quo velit distinctio, adipisci voluptate perferendis odit ullam quam vitae non.";
$paragrafi = explode('.', $paragrafo);
//var_dump($paragrafi)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 5</title>
</head>

<body>
    <h2>Paragrafo originale</h2>
    <p> <?php echo $paragrafo ?></p>
    <br>
    <br>
    <h2>Paragrafi seprati</h2>
    <?php for ($i = 0; $i < count($paragrafi); $i++) { ?>
        <p><?php echo $paragrafi[$i] ?></p>
    <?php } ?>
</body>

</html>