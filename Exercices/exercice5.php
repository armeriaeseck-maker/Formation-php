
<?php
$h1 = "2 fables de La Fontaine"; // à insérer dans le tag H1 voir exemple ci-dessous
$sous_titre1 = "LA CIGALE ET LA FOURMI ";//pour le premier tag H2
$sous_titre2 = "LE CORBEAU ET LE RENARD";//pour le secondtag H2
$paragraphe1 = "La Cigale, ayant chanté
                  Tout l'été,
Se trouva fort dépourvue
Quand la bise fut venue.
Pas un seul petit morceau
De mouche ou de vermisseau (1).
Elle alla crier famine
Chez la Fourmi sa voisine,
La priant de lui prêter
Quelque grain pour subsister
Jusqu'à la saison nouvelle.
Je vous paierai, lui dit-elle,
Avant l'août (2), foi d'animal,
Intérêt et principal.
La Fourmi n'est pas prêteuse ;
C'est là son moindre défaut (3).
Que faisiez-vous au temps chaud ?
Dit-elle à cette emprunteuse (4).
Nuit et jour à tout venant
Je chantais, ne vous déplaise.
Vous chantiez ? j'en suis fort aise :
Et bien ! dansez maintenant. ";//pour le premier pragraphe <p>
$paragraphe2 = "Maître Corbeau, sur un arbre perché,
           Tenait en son bec un fromage.
       Maître Renard, par l'odeur alléché,
           Lui tint à peu près ce langage :
       Et bonjour, Monsieur du Corbeau,
    Que vous êtes joli ! que vous me semblez beau !
           Sans mentir, si votre ramage
           Se rapporte à votre plumage,
     Vous êtes le Phénix des hôtes de ces bois.
À ces mots le Corbeau ne se sent pas de joie,
           Et pour montrer sa belle voix,
   Il ouvre un large bec, laisse tomber sa proie.
   Le Renard s'en saisit, et dit : Mon bon Monsieur,
              Apprenez que tout flatteur
     Vit aux dépens de celui qui l'écoute.
   Cette leçon vaut bien un fromage sans doute.
           Le Corbeau honteux et confus
   Jura, mais un peu tard, qu'on ne l'y prendrait plus.";//pour le second tag <p>
?>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice5</title>
</head>
<body>
    <h1><?=$h1 ?></h1>
 <?php
echo "<h2>$sous_titre1</h2>";
$paraph1 = nl2br($paragraphe1); 
echo "<p>" . $paraph1 . "</p>"; 
echo " <h2>$sous_titre2</h2>";
$paraph2 = nl2br($paragraphe2); 
echo " <p>$paraph2 </p>";
?> 
    
<!-- méthode2
    <h2><?= $sous_titre1 ?></h2>
    <p><?= nl2br($paragraphe1) ?></p>

    <h2><?= $sous_titre2 ?></h2>
    <p><?= nl2br($paragraphe2) ?></p> -->

</body>
</html>