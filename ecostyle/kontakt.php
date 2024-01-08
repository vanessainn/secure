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

        <h2 class="mb-3 headline">hier finden Sie uns</h2> 

        <div class="container">
            <div class="header row p-0">
                <div class="col-md-8 p-0">
                    <img class="img-fluid" src="img/map.png" alt="Googe Map Karte" title="Googe Map Karte">
                </div>
                <div class="description col-md-4 p-5 d-flex justify-content-center flex-column">
                    <h6>Kiebachgasse 19b</h6>
                    <p>6020 Innsbruck<br>Österrech</p>
                    <h6>Öffnungszeiten</h6>
                    <p>Mo - Fr:  8.00 -14.00 Uhr<br>Sa - So: geschlossen</p>
                    <h6>Kontaktdaten</h6>
                    <p>T: +43 345 543 87 63<br>M: info@ecostyle.com</p>
                </div>
            </div>
        </div>

    </header>
    <main>
    <article id="kontaktformular" class="mb-0">
        <div class="container-fluid description p-5">
            <h6 class="text-center mb-4">Kontaktformular</h6>
            <form>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input class="w-100 ps-3 pt-2 pb-1" id="ex1" type="text" placeholder="Nachname und Vorname">
                    </div>
                    <div class="col-md-6">
                        <input class="w-100 ps-3 pt-2 pb-1" id="ex2" type="text" placeholder="E-Mail-Adresse">
                    </div>
                    <div class="col-md-12 mt-4 font">
                        <textarea class="w-100 ps-3 pt-2" rows="8" placeholder="Nachricht" style=" font-family: 'Bad Script', sans-serif"></textarea>                    
                    </div>
                    <div class="container d-flex justify-content-center align-items-center mt-4">
                        <button type="submit" class="btn btn_form">senden</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
    

    </main>
    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>