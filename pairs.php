<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>somme</title>
</head>
<body>

<?php
function compterPair($tabNombre){
    $compteur = 0;
    foreach($tabNombre as $nombre){
        if($nombre%2 == 0){
            $compteur = $compteur + 1;
        };
    }
}

$resultat = compterPair([ 1, 2, 3, 4 ]);
echo "<h3>il y a $resultat nombres pairs</h3>";

$resultat = compterPair([ 51, 62, 71, 81, 10, 200 ]);
echo "<h3>il y a $resultat nombres pairs</h3>";
?>

<script>
//Créer une fonction qui prend en paramètre un tableau de nombres 
//et qui retourne combien de nombres pairs sont présents

function compterPair(tabNombre){
    compteur = 0;
    tabNombre.forEach(function(nombre){
        if(nombre%2 === 0){
        compteur = compteur +1 ;
        };
    });
return compteur;
};

// TESTER AVEC 
console.log(compterPair([ 1, 2, 3, 4 ]));                   // 2 
console.log(compterPair([ 51, 62, 71, 81, 10, 200 ]));      // 3

    </script>
</body>
</html>

