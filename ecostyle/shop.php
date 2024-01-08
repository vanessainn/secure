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
            <form id="bestellform">
                <?php for ($i = 0; $i < count($artikel); $i++) {
                ?>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <?php echo $artikel[$i];?><br>
                        <?php echo $beschreibung[$i];?>
                    </div>
                    <div class="col-md-3">
                        <p id='<?php echo 'artikelpreis_' . $i; ?>'> <?php echo number_format($preis[$i], 2);?></p>
                    </div>
                    <div class="col-md-3">
                        <input id='<?php echo 'artikelanzahl_' . $i; ?>'  type="number" value='0' min='0'>
                    </div>
                    <div class="col-md-1">
                        <p id='<?php echo 'artikelsumme_' . $i; ?>' class="d-flex justify-content-end">0.00</p>
                    </div>
                    <hr>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <p id="gesamtsumme" class="justify-content-end d-flex fw-bold">0.00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <button type="submit" class="btn btn-primary btn-larage">Bestellen</button>
                    </div>
                </div>
                <input value='<?php echo count($artikel); ?>' id="anzahlArtikel" hidden>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/ecostyle.js"></script>

</body>

</html>