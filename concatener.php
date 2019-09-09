<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>concaténer</title>
</head>
<body>
    <script>

//Créer une fonction qui prend en paramètre un tableau de lettres
//et qui retourne un texte qui contient toutes les lettres 
//mais séparées par une virgule
//(attention: pas de virgule au début ni à la fin)

// EN JS
function concatenerTexte (tabLettre){
    texteFinal = tabLettre.join();
    return texteFinal;
}

// TESTER AVEC 
console.log(concatenerTexte([ 'a', 'b', 'c', 'd' ]));   // 'a,b,c,d' 
console.log(concatenerTexte([ 'i', 'j', 'k' ]));        // 'i,j,k'

    </script>
</body>
</html>