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
function calculerTotal($tabNombre){
    $total = 0;
    foreach($tabNombre as $nombre){
        $total += $nombre;
    };
    return $total;
}

$resultat = calculerTotal([ 1, 2, 3, 4 ]);
echo "<h4>le total s'élève à $resultat </h4>";

$resultat = calculerTotal([ 5, 6, 7, 8 ]);
echo "<h4>le total s'élève à $resultat </h4>";
?>

    <script>
function calculerTotal(tabNombre){
    let total = 0;
    tabNombre.forEach(function(nombre){
    total += nombre;
    });
return total;
};

console.log(calculerTotal([ 1, 2, 3, 4 ]));      // 10 
console.log(calculerTotal([ 5, 6, 7, 8 ]));      // 26

    </script>
</body>
</html>

