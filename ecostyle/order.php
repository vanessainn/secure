<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/PHPMailer/Exception.php';
    require 'src/PHPMailer/PHPMailer.php';
    require 'src/PHPMailer/SMTP.php';

?>

<?php include 'artikel.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danke</title>
</head>
<body>

    <?php
        extract($_POST);
        $name = $vorname . ' ' . $nachname;
        $bestellartikel = '';

        if (isset($_POST['submit'])) {

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setLanguage('de');
            $mail->isSMTP();
            $mail->Host = 'securemail-wda-innsbruck-at.prossl.de';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->Username = 'wiastud-newsletter';
            $mail->Password = '45YerkaidaAsaef5Kiap';
            $mail->From = 'stud-newsletter@wda-innsbruck.at';
            $mail->FromName = 'Bestellbestätigung - EcoStyle Goller';
            $mail->addAddress('vanessa.innerbichler@gmail.com', "Vanessa Innerbichler");
            $mail->addCC('info@ecostyle.com', "Maria Goller");
            $mail->isHTML(true);
            $mail->Subject = 'Bestellbestätigung - EcoStyle Goller';
            $mail->Body = '<h1 style="color:#7D6E83; padding: 5px;">Vielen Dank für Ihre Bestellung!</h1>' 
            .'<br>' . '<p>Hier sind alle Informationen zu Ihrer Bestellung nochmals zusammengefasst:</p>' . '<br>' . $name . '<br>' . $adresse . '<br>' . $ort . '<br>' . $plz . '<br>' . $land 
            . '<br>' . $telefonnummer . '<br>' . $email . '<br>' . '<p>Der DSGVO wurde zugestimmt!</p>'
            . '<br><br>' 
            . '<h2 style="color=#D6CCC3">Bestelldaten</h2>'
            . '<br>Ihre Produkte: ' . $bestellartikel . '<br>Summe: ' . $gesamtsumme_x . ' Euro' . '<br>Versandkosten: ' . $versandkosten_x . ' Euro' . '<br>Rechnungsbetrag: ' . $gesamtbetrag_x . ' Euro'; 
            ;

            for ($i = 0; $i < count($artikel); $i++) {
                if ($i < $artikelanzahl_ . $i) {
                    $bestellartikel = $artikelanzahl_ . $i . ' ' . $artikelname_x . ' zum Einzelpreis von ' . $artikelpreis_x . '<br>';
                }
            }

            try {
                $mail->send();
                echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen' . $vorname . ' ' . $nachname . '</h2>';
            } catch (Exception $ex) {
                echo '<p>Es ist ein Fehler passiert!</p>' . $mail->ErrorInfo;
            }
            
        }

    ?>
    
</body>
</html>