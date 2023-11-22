<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>PHP Hotels</title>
</head>

<body>
<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

  <div class="container-sm text-center my-5 py-5">
  <table class="table text-start">
    <?php
  foreach ($hotels as $key => $value){
          // var_dump($key, $value['name']);
          $name = $value['name'];
          $desc = $value['description'];
          $parking = $value['parking'] ? 'Si' : 'No';
          $vote = $value['vote'];
          $distance = $value['distance_to_center'];
          ?>
          <tbody>
            <tr>
              <td><?php echo $name ?></td>
              <td><?php echo $desc ?></td>
              <td class="text-center"><?php echo $parking ?></td>
              <td class="text-center"><?php echo $vote ?></td>
              <td class="text-center"><?php echo $distance ?> km</td>
            </tr>
          </tbody>
          <?php
        };
        ?>
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Valutazione</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
</table>
  </div>

</body>

</html>

