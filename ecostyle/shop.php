<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>EcoStyle Goller</title>
    <?php include 'head.php'; ?>
</head>

<body>
    <header class="mb-5">
        <?php include 'menu.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <button class="btn_shop me-3">alles anzeigen</button>
                    <button class="btn_shop me-3">Kleidung</button>
                    <button class="btn_shop me-3">Accessoires</button>
                    <button class="btn_shop">Taschen</button>
                </div>
                <div class="col-md-12 d-flex justify-content-center mt-4">
                    <p>Sortieren nach <i class="fas fa-sliders-h ms-2"></i></p>
                </div>
            </div>
        </div>

    </header>

    <main>
    <?php include 'artikel.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Artikel</h6>
                </div>
                <div class="col-md-3">
                    <h6>Einzelpreis</h6>
                </div>
                <div class="col-md-3">
                    <h6>Anzahl</h6>
                </div>
                <div class="col-md-1">
                    <h6>Summe</h6>
                </div>
                <hr class="mt-3">
            </div>
        </div>
        <div class="container">
            <form method="post" action="order.php" id="bestellform">
                <?php for ($i = 0; $i < count($artikel); $i++) {
                ?>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <strong id="artikelname"><?php echo $artikel[$i];?></strong><br>
                        <input type="hidden" id="artikelname_x" name="artikelname_x">
                        <?php echo $beschreibung[$i];?>
                    </div>
                    <div class="col-md-3">
                        
                        <p id='<?php echo 'artikelpreis_' . $i; ?>'> <?php echo number_format($preis[$i], 2);?></p>
                        <input type="hidden" id="artikelpreis_x" name="artikelpreis_x">
                    </div>
                    <div class="col-md-3">
                        <input id='<?php echo 'artikelanzahl_' . $i; ?>'  type="number" name='<?php echo 'artikelanzahl_' . $i; ?>' value='0' min='0'>
                    </div>
                    <div class="col-md-1">
                        
                        <p id='<?php echo 'artikelsumme_' . $i; ?>' class="d-flex justify-content-end">0.00</p>
                        <input type="hidden" id="artikelsumme_x" name="artikelsumme_x">
                    </div>
                    <hr>
                </div>
                <?php } ?>
                <div class="row mt-5 summe">
                    <div class="col-md-9">
                        <p class="h6">Betrag des Einkaufs</p>
                    </div>
                    <div class="col-md-3">
                        <p id="gesamtsumme" class="justify-content-end d-flex fw-bold">0.00</p>
                        <input type="hidden" id="gesamtsumme_x" name="gesamtsumme_x">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-9">
                        <p>davon 20% MwSt.</p>
                    </div>
                    <div class="col-md-3">
                        <p id="mwst" class="justify-content-end d-flex">0.00</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-9">
                        <p>Versandkosten (Ab 100€ Bestellwert gratis)</p>
                    </div>
                    <div class="col-md-3">
                        <p id="versandkosten" class="justify-content-end d-flex">0.00</p>
                        <input type="hidden" id="versandkosten_x" name="versandkosten_x">
                    </div>
                </div>
                <div class="row description pt-3 px-2 pb-2">
                    <div class="col-md-9">
                        <p class="h6">Gesamtbetrag des Einkaufs</p>
                    </div>
                    <div class="col-md-3">
                        <p id="gesamtbetrag" class="justify-content-end d-flex fw-bold">0.00</p>
                        <input type="hidden" id="gesamtbetrag_x" name="gesamtbetrag_x">
                    </div>
                </div>                
                <input type="hidden" value='<?php echo count($artikel); ?>' id="anzahlArtikel">
            
        </div>

        <article id="bestellformular" class="mb-0 mt-5">
        <div class="container description p-5">
            <h6 class="text-center text-uppercase">Bestellformular</h6>
            
                <div class="form-group row">
                    <div class="col-md-6 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="vorname" type="text" name="vorname" required="">
                        <label for="vorname">Vorname</label>*
                    </div>
                    <div class="col-md-6 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="nachname" type="text" name="nachname" required="">
                        <label for="nachname">Nachname</label>*
                    </div>
                    <div class="col-md-12 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="adresse" type="text" name="adresse" required="">
                        <label for="adresse">Adresse</label>*
                    </div>
                    <div class="col-md-6 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="ort" type="text" name="ort" required=""> 
                        <label for="ort">Ort</label>*
                    </div>
                    <div class="col-md-2 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="plz" type="text" name="plz" required="">
                        <label for="plz">PLZ</label>*
                    </div>
                    <div class="col-md-4 mt-4">
                        <select class="w-100 ps-3 pt-2 pb-1" id="land" type="text" name="land" required="">
                            <option></option>
                            <option>Österreich</option>
                        </select>
                        <label for="land">Land</label>*
                    </div>  
                    <div class="col-md-6 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="telefonnummer" type="text" name="telefonnummer" required="">
                        <label for="telefonnummer">Telefonnummer</label>*
                    </div>
                    <div class="col-md-6 mt-4">
                        <input class="w-100 ps-3 pt-2 pb-1" id="email" type="text" name="email" required="">
                        <label for="email">E-Mail-Adresse</label>*
                    </div>
                   <div class="col-md-12 mt-4 d-flex">
                        <input type="checkbox" id="dsgvo-check" name="dsgvo-check" required="" class="form-check-input me-4">*
                        <label for="dsgvo-check">Datenschutz ist uns wichtig. Ihre Daten werden vertraulich behandelt und ausschließlich für interne Zwecke genutzt. Durch die Nutzung unserer Dienste erklären Sie sich mit der Verarbeitung Ihrer Daten gemäß den Datenschutzbestimmungen einverstanden.</label><br>
                   </div>
                    <div class="container d-flex justify-content-center align-items-center mt-4">
                        <button type="submit" name="submit" class="btn btn_form">Bestellung aufgeben</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/shop.js"></script>

</body>

</html>