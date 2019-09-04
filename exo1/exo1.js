var bouton = document.querySelector('button.bouton');

bouton.addEventListener('click', function () {
    var baliseInput = document.querySelector('input[name=prixHT]');
    var prixHT = baliseInput.value;
    var Liste = document.getElementById('listeTVA');
    var selValue = Liste.options[Liste.selectedIndex].value;   
    var prixTTC = prixHT * (1 + selValue / 100);
    var baliseResultat = document.querySelector('.resultat');
    baliseResultat.innerHTML = prixTTC;
});

