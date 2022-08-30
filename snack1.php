<!-- 
SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: "Olimpia Milano - Cantù | 55-60". 
-->

<?php 
$LBA = [
  [
    "home_team" => [
      "team" => "Olimpia Milano",
      "score" => 55,
    ],
    "visiting_team" => [
      "team" => "Cantù",
      "score" => 60,
    ]
  ],
  [
      "home_team" => [
        "team" => "Germani Brescia",
        "score" => 35,
      ],
      "visiting_team" => [
        "team" => "Happy Casa Brindisi",
        "score" => 12,
      ]
  ],
  [
        "home_team" => [
          "team" => "Tezenis Verona",
          "score" => 24,
        ],
        "visiting_team" => [
          "team" => "Openjobmetis Varese",
          "score" => 47,
        ]
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
</head>
<body>
  <h1>Lista Partite Lega Basket Serie A</h1>
  <ul>
    <?php for ($i = 0; $i < count($LBA); $i++) : ?>
    <li><?php echo $LBA[$i]["home_team"]["team"] . " - " . $LBA[$i]["visiting_team"]["team"] . " | " . $LBA[$i]["visiting_team"]["score"] . " - " . $LBA[$i]["visiting_team"]["score"]?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>