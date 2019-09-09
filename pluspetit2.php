<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <?php 

 // EN PHP
 function trouverMin2($nombre1, $nombre2) {
      // AJOUTER LE CODE MANQUANT
         if ($nombre1 < $nombre2)
             $min = $nombre1;
        else
             $min = $nombre2;

        return $min;
     }
?>

        <script>
            //Créer une fonction qui prend en paramètres 2 nombres
            //et qui retourne le plus petit des 2
            // EN JS
            function trouverMin2(nombre1, nombre2) {
                // AJOUTER LE CODE MANQUANT
                if (nombre1 < nombre2)
                    min = nombre1;
                else
                    min = nombre2;

                return min;
            }

            // TESTER AVEC
            console.log(trouverMin2(32, 5));    // 5
            console.log(trouverMin2(12, 78));   // 12
        </script>
    </body>

</html>
