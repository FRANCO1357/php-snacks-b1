<?php

// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

$random_numbers = [];

while (count($random_numbers) < 15) {

  $number = rand(1, 20);
  if (!in_array($number, $random_numbers)) $random_numbers[] = $number;

}

var_dump($random_numbers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Numeri random</h1>

    <?php foreach ($random_numbers as $number) : ?>
        <p><?php echo $number ?></p>
    <?php endforeach ?>


    
</body>
</html>