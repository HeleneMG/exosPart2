/*
### EXO 3 : DISTRIBUTEUR DE BILLETS
ON A UN CHAMP input DANS LEQUEL ENTRER LE MONTANT DESIRE
ON A UN button "RETIRER MES BILLETS"
ON A UNE div QUI VA AFFICHER LES BILLETS

SUIVANT LE MONTANT DEMANDE, DISTRIBUER LE MOINS DE BILLETS POSSIBLES

ON CONSIDERE QU'ON A DES BILLETS EN EUROS DE
200, 100, 50, 20, 10, 5

EXEMPLE: 325 DEMANDE
    => 1x 200 euros
    => 1x 100 euros
    => 1x 20  euros
    => 1x 5   euros
*/

var bouton = document.querySelector('button.bouton');
bouton.addEventListener('click', function () {
    var montant = document.querySelector('input.montant').value;

    var baliseTotal = document.querySelector('.total');
    
    baliseTotal.insertAdjacentHTML('beforeend', `
        ${montant}€
    `)
}); 