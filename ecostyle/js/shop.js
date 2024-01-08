'use strict';

let anzahlArtikel = document.querySelector('#anzahlArtikel').value;

for (let i = 0; i < anzahlArtikel; i++) {
    addEventHandler(i);
}

function addEventHandler(index) {
    let elem = document.querySelector('#artikelanzahl_' + index);
    elem.addEventListener('change', (event) => {
    mengeAendern(index);
});
}

function mengeAendern(index) {
    let preis = document.querySelector('#artikelpreis_' + index).innerHTML;
    let ergebnis = preis * document.querySelector('#artikelanzahl_' + index).value; 
    document.querySelector('#artikelsumme_' + index).innerHTML = ergebnis.toFixed(2);
    berechneSumme ();
}

function berechneSumme() {
    let anzahlArtikel = document.querySelector('#anzahlArtikel').value;
    let gesamtSumme = 0;

    for (let i = 0; i < anzahlArtikel; i++) {
        let artikelSumme = parseFloat(document.querySelector('#artikelsumme_' + i).innerHTML);
        gesamtSumme += artikelSumme;
    }

    let gesamtsummeElement = document.querySelector('#gesamtsumme');
    gesamtsummeElement.textContent = gesamtSumme.toFixed(2);
}