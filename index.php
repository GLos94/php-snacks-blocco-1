<!-- snack 1 -->
<!-- <?php


  $match = [

    [
      'team1' => 'Olimpia Milano',
      'team2' => 'Cantù',
      'score1'=> 55,
      'score2'=> 60
    ],
    [
      'team1' => 'Roma',
      'team2' => 'Firenze',
      'score1'=> 10,
      'score2'=> 70
    ],
    [
      'team1' => 'Torino',
      'team2' => 'Verona',
      'score1'=> 12,
      'score2'=> 46
    ],
  ];


  foreach ($match as $m) {

           echo $m['team1'] . ' - ' . $m['team2']
               . ' | ' . $m['score1'] . '-' . $m['score2']
               . '<br>';
      };

 ?> -->


<!-- snack 2 -->
<!-- <?php

      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];


      echo "name:" . $name . "<br>";
      echo "mail:" . $mail . "<br>";
      echo "age:" . $age . "<br>";
      echo "<br>";
      echo "<br>";


      $validName = strlen($name) > 3;
      $validMail = strpos($mail, '.') !== false &&
                   strpos($mail, '@') !== false;
      $validAge = is_numeric($age);

      if ($validName && $validMail && $validAge) {

        echo "Accesso riuscito";

      } else {

        echo "Accesso negato";

      }

?> -->


<!-- snack 4 -->

<?php

  $rnds = [];

  while (count($rnds) < 15) {

    $rnd = rand(1, 15);

    if (!in_array($rnd, $rnds)) {

      $rnds[] = $rnd;
    }
  }

var_dump($rnds);

?>
