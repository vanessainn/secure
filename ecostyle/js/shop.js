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
    document.querySelector('#artikelpreis_x').value = preis;
    document.querySelector('#artikelsumme_x').value = ergebnis;
}

function berechneSumme() {
    let anzahlArtikel = document.querySelector('#anzahlArtikel').value;
    let gesamtSumme = 0;

    for (let i = 0; i < anzahlArtikel; i++) {
        let artikelSumme = parseFloat(document.querySelector('#artikelsumme_' + i).innerHTML);
        gesamtSumme += artikelSumme;
    }

    let mwst = gesamtSumme * 0.2;

    let gesamtsummeElement = document.querySelector('#gesamtsumme');
    gesamtsummeElement.textContent = gesamtSumme.toFixed(2);
    document.querySelector('#gesamtsumme_x').value = gesamtSumme;


    let mwstElement = document.querySelector('#mwst');
    mwstElement.textContent = mwst.toFixed(2);

    let versandkostenElement = document.querySelector('#versandkosten');
    if (gesamtSumme < 100) {
        versandkostenElement.textContent = '5.90'; 
    } else {
        versandkostenElement.textContent = '0.00'; 
    }
    document.querySelector('#versandkosten_x').value = versandkostenElement;

    let gesamtbetrag = gesamtSumme + parseFloat(versandkostenElement.textContent);
    let gesamtbetragElement = document.querySelector('#gesamtbetrag');
    gesamtbetragElement.textContent = gesamtbetrag.toFixed(2);   
    document.querySelector('#gesamtbetrag_x').value = gesamtbetrag;

}

let artikelName = document.querySelector('#artikelname');
document.querySelector('#artikelname_x').value  = artikelName;