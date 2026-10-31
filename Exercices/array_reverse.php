<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>array_reverse()</title>
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
       <h1>Exemple avec array_reverse()</h1>
       <?php
              $tab = [30,12,5,88,65];

            
              echo'<pre>';
              print_r(array_reverse($tab));
              echo'</pre>';
       ?>
       <h1>Exemple avec sort()</h1>
       <?php
              $tab = [30,12,5,88,65];
              $sort = sort($tab);
            
              echo'<pre>';
              print_r($tab);
              echo'</pre>';
       ?>
       
</body>
</html>