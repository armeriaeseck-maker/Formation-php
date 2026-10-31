<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP et HTML</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .annee {
            background-color: #E6C4AC;
        }

        .serie {
            background-color: #B5BEE0;
        }

        .present {
            background-color: #d9ead3;
        }

        .reussite {
            background-color: #EDD17A;
        }

        td, th {
            padding: 10px 20px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

<h1>Tableau PHP et table HTML (exercice progressif)</h1>

<table border="1">

<?php

$tableau = [
    1995 => [
        "L"  => [100242, 71460],
        "ES" => [104857, 76555],
        "S"  => [177211, 139031],
    ],
    1996 => [
        "L"  => [93160, 66964],
        "ES" => [97832, 69645],
        "S"  => [164584, 128118],
    ],
    1997 => [
        "L"  => [91113, 69939],
        "ES" => [96898, 73982],
        "S"  => [163092, 124947],
    ],
    1998 => [
        "L"  => [85039, 69017],
        "ES" => [96323, 74794],
        "S"  => [166162, 131302],
    ],
    1999 => [
        "L"  => [78686, 62363],
        "ES" => [95016, 75756],
        "S"  => [165991, 128166],
    ]
];

$tableau[2000] = [
    "L"  => [34658, 27563],
    "ES" => [105516, 85856],
    "S"  => [175931, 119176],
];

foreach ($tableau as $annee => $series) {

       // Recherche du meilleur taux de l'année
       $maxReussite = 0;

       foreach ($series as $resultats) {
        $reussite = $resultats[1] / $resultats[0];

        if ($reussite > $maxReussite) {
            $maxReussite = $reussite;
        }
    }

        echo "<tr class='annee'>
                     <td colspan='4' style='text-align:center;'><b>$annee</b></td>
              </tr>";

         echo "<tr>
                     <th class='serie'>Série</th>
                     <th class='present'>Présentés</th>
                     <th class='present'>Admis</th>
                     <th class='reussite'>% Réussite</th>
               </tr>";

       foreach ($series as $serie => $resultats) {

        $reussite = $resultats[1] / $resultats[0];

        $style = "text-align:right;";

        if ($reussite == $maxReussite) {
                     $style .= "color:red; border : black";
              }

        echo "<tr>
                <td>$serie</td>
                <td style='text-align:right;'>$resultats[0]</td>
                <td style='text-align:right;'>$resultats[1]</td>
                <td style='$style'>" .
                    number_format($reussite * 100, 0) .
                    "%</td>
              </tr>";
    }
}

?>
</table>
</body>
</html>