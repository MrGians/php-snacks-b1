<!-- 
SNACK 3
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
 -->

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

$posts_date = array_keys($posts);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <h1>My Posts List</h1>
  <hr/>
  <?php for($i = 0; $i < count($posts); $i++) : ?>
  <?php for($j = 0; $j < count($posts[$posts_date[$i]]); $j++) : ?>
  <!-- Single Post -->
  <div>
    <h2><?php echo $posts[$posts_date[$i]][$j]["title"] ?></h2>
    <span><?php echo $posts[$posts_date[$i]][$j]['author'] . " -- " . $posts_date[$i] ?></span>
    <br />
    <p><?php echo $posts[$posts_date[$i]][$j]['text'] ?></p>
  </div>
  <hr/>
  <?php endfor; ?>
  <?php endfor; ?>
</body>
</html>