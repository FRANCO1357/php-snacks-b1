<?php

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$matches = [
    [
      "home_team" => [
        "name" => "Olimpia Milano",
        "points" => 55,
      ],
      "visiting_team" => [
        "name" => "Cantù",
        "points" => 60,
      ]
    ],
    [
        "home_team" => [
          "name" => "Montopoli",
          "points" => 98,
        ],
        "visiting_team" => [
          "name" => "San Romano",
          "points" => 85,
        ]
    ],
    [
          "home_team" => [
            "name" => "Pontedera",
            "points" => 91,
          ],
          "visiting_team" => [
            "name" => "Empoli",
            "points" => 62,
          ]
    ],
    [
            "home_team" => [
              "name" => "Castelfranco di Sotto",
              "points" => 102,
            ],
            "visiting_team" => [
              "name" => "Santa Croce",
              "points" => 28,
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

    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) : ?>
            <li><?php echo $matches[$i]["home_team"]["name"] . " - " . $matches[$i]["visiting_team"]["name"] . " | " . $matches[$i]["visiting_team"]["points"] . " - " . $matches[$i]["visiting_team"]["points"]?></li>
        <?php endfor; ?>
    </ul>
    
</body>
</html>
