<!-- Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->


<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


$datePost = array_keys($posts);
$post_Value = array_values($posts);
//var_dump($post_Value[0][0])



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>

<body>
    <?php for ($i = 0; $i < count($datePost); $i++) { ?>
        <div class="post">
            <h3> <?php echo $datePost[$i]; ?>
            </h3>
            <h4>
                <?php for ($k = 0; $k < count($post_Value[$i]); $k++) {
                    $post = $post_Value[$i][$k]; ?>
                    <div>
                        <?php echo $post['title']; ?>
                        <?php echo $post['author']; ?>
                        <?php echo $post['text']; ?>
                    </div>

                <?php } ?>
            </h4>

        </div>
    <?php } ?>





</body>

</html>