<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Ecercice13</title>
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
       <h1>Ecrire la date du jour dans une fichier test.txt</h1>
<?php
$date = date('d-m-Y');
$heure = date('H:i:s');
$handle = fopen('test.txt','a+');//on ajoute du texte en fin de fichier, on éfface pas.

fwrite($handle, "$date $heure \n" );
fclose($handle);





/* 
$date = date('d-m-Y');
$heure = date('H:i:s');

file_put_contents(
    'test.txt',
    " $date  $heure\n" , FILE_APPEND
);
 */

?>
</body>
</html>