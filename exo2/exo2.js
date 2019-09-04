/*CREER UN FICHIER exo2.html

CALCULER LA SURFACE DES 4 MURS D'UNE PIECE SI ON DONNE LA HAUTEUR, LARGEUR ET LONGUEUR

IDEE: SITE DE BRICOLAGE QUI VEND DE LA PEINTURE
IL VEUT PROPOSER UN OUTIL POUR QUE SES CLIENTS CALCULENT LE NOMBRE DE POTS DE PEINTURE A ACHETER

input   hauteur
input   largeur
input   longueur
button  calculer surface murs
div     afficher le résultat*/

var bouton = document.querySelector('button.bouton');
bouton.addEventListener('click', function () {
    var inputHauteur1 = document.querySelector('input[name=hauteur1]');
    var hauteur1 = inputHauteur1.value;
    var inputLargeur1 = document.querySelector('input[name=largeur1]');
    var largeur1 = inputLargeur1.value;

    var inputHauteur2 = document.querySelector('input[name=hauteur2]');
    var hauteur2 = inputHauteur2.value;
    var inputLargeur2 = document.querySelector('input[name=largeur2]');
    var largeur2 = inputLargeur2.value;

    var inputHauteur3 = document.querySelector('input[name=hauteur3]');
    var hauteur3 = inputHauteur3.value;
    var inputLargeur3 = document.querySelector('input[name=largeur3]');
    var largeur3 = inputLargeur3.value;

    var inputHauteur4 = document.querySelector('input[name=hauteur4]');
    var hauteur4 = inputHauteur4.value;
    var inputLargeur4 = document.querySelector('input[name=largeur4]');
    var largeur4 = inputLargeur4.value;

    var surface = (hauteur1 * largeur1) + (hauteur2 * largeur2) + (hauteur3 * largeur3) + (hauteur4 * largeur4);
    console.log(surface);
    var baliseResultat = document.querySelector('.resultat');
    baliseResultat.insertAdjacentHTML('beforeend', `
        ${surface}m²
    `)
});


