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

        <h2 class="mb-3 headline">make it simple, but significant.</h2>

        <div class="container">
            <div class="header row p-0">
                <div class="col-md-8 p-0">
                <img id="output_image" class="img-fluid"></img>
                </div>
                <div class="description col-md-4 p-5 d-flex justify-content-center flex-column">
                    <img class="img-fluid mb-4" src="img/logo_ecoStyle.png" alt="ExoStyle Goller" title="ExoStyle Goller">
                    <p>Unser Beitrag zur Nachhaltigkeit und Lokalgemeinschaft: Unser Geschäft bereichert Innsbruck durch nachhaltige Mode und lokale Verbundenheit, vereint in stilvoller Eleganz.</p>
                </div>
            </div>
        </div>

    </header>
    <main>
        
    <article id="products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img class="img-fluid" src="img/kleidung.jpg" alt="Kleidung auf einer Kleiderstange" title="Kleidung auf einer Kleiderstange">
                    <h4 class="text-center">Kleidung</h4>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center ">
                    <img class="img-fluid" src="img/brillen.jpg" alt="Sonnenbrille" title="Sonnenbrille">
                    <h4 class="text-center">Accessoires</h4>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img src="img/taschen.jpg" alt="Stofftasche" title="Stofftasche" class="img-fluid">
                    <h4 class="text-center">Taschen</h4>
                </div>
        </div>
    </article>

    <article id="allproducts">
        <div class="container d-flex flex-column align-items-center">
            <p>Unser Geschäft bereichert Innsbruck durch nachhaltige Mode und lokale Verbundenheit, vereint in stilvoller Eleganz.</p>
            <button class="btn_allproducts"> <a href="products.html">Entdecke alle unsere Produkte</a></button>
        </div>
    </article>

    <article id="newsletter">
        <img class="img-fluid" src="img/ecoStyleLabel.png" alt="Schildchen" title="Schildchen">
        <div class="container-fluid newsletter">
            <h3>Melde dich zu unserem Newsletter an!</h3>
            <p>Erfahre sofort von neuen Kollektionen und den besten Angeboten.</p>
            <form class="d-flex justify-content-center">
                <input class="email" type="email" placeholder="E-Mail Adresse eingeben" title="E-Mail Adresse eingeben">
        </div>
    </article>

    </main>
    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>