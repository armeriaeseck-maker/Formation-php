<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Date et l'heure</title>

       <style>
               body{
                     display: flex;
                     flex-direction: column;
                     flex-wrap: nowrap;
                     justify-content: flex-end;
                     align-items: center;
                     align-content: stretch
              }
       </style>
</head>
<body>
       <h1>Travailler avec les dates en php</h1>

       <h2> la fonction date()</h2>
       <?php
              $date = date('d-m-Y'); 
              echo $date; // jj-mm-aaaa
       ?>
        <h2> création heure</h2>
       <?php
             $heure = date("H:i:s");
              echo $heure; // heure au format hh:min:sec
       ?>
        <h2> le temps UNIX</h2>
       <?php
             $timestamp = time();
              echo $timestamp;
              echo"<br>";
              $timestamp = time();
              echo date("d/m/Y H:i:s", $timestamp);
       ?>
       <h2> L'objet DateTime</h2>
       <?php
              $date = '21/09/2019';
              $dt = DateTime::createFromFormat('d/m/Y', $date);
              echo $dt->format('d-m-Y');// 21-09-2019
       ?>
           <h1>Travailler avec la localisation en php</h1>
                     <?php
              
          $date = new DateTime();
              $formatter = new IntlDateFormatter(
              'fr_FR',
              IntlDateFormatter::FULL,
              IntlDateFormatter::NONE
              );
              echo $formatter->format($date);
       ?>

</body>
</html>