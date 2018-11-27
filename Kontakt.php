<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="http://grants.ulbsibiu.ro/sidpop/blocks/continut_imagine/images/x.png"
          type="image/x-icon"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="css/footer.css">

    <title>OGD-2.0</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Luftverschmutzung im Thurgau</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="spacetime.php">Zeit</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Kontakt <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Impressum.php">Impressum</a>
            </li>
        </ul>
    </div>
</nav>
<main class="haupt">
<div class="container my-4">
    <form id="contact-form" method="post" action="Kontakt.php" role="form">
        <div class="controls">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">Vorname</label>
                        <input id="form_name" type="text" name="vorname" class="form-control" placeholder="Vorname"
                               required="required" data-error="Der Vorname wird benötigt">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Nachname</label>
                        <input id="form_lastname" type="text" name="nachname" class="form-control" placeholder="Nachname"
                               required="required" data-error="Der Nachname wird benötigt">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_email">E-Mail</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="E-Mail"
                               required="required" data-error="Die E-Mail wird benötigt">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Nachricht</label>
                        <textarea id="form_message" name="nachricht" class="form-control" placeholder="Nachricht"
                                  rows="4"
                                  required="required" data-error="Geben Sie eine Nachricht ein"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Abschicken" name="submit">
                </div>
            </div>
        </div>
    </form>
</div>
</main>
<footer>
    <div class="footer">
        <div class="footertext">
        <div class="row">

            <div class="col-md-4">
                <h4>Kontakt</h4>
                <ul class="contact">
                    <li>Unternehmensnetzwerk Frauenfeld</li>
                    <li>Rolf Müller c/o Printimo AG</li>
                    <li>Frauenfelderstrasse 21 A</li>
                    <li>8404 Winterthur</li>
                    <li>+41 79 359 94 00</li>
                    <li><span id="_emoaddrId2"><span class="emo_address">Bitte Javascript aktivieren!</span></span></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Partnerlinks</h4>
                <ul class="partner">
                    <li><a target="_blank" href="http://www.frauenfeld.ch">» Frauenfeld</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Sitemap</h4>
                <ul class="sitemap">
                    <li class="first active"><a href="/" >Home</a></li><li><a href="netzwerk/" >Netzwerk</a></li><li><a href="ueber-uns/unser-ursprung.html" >Über uns</a></li><li><a href="mitglieder/" >Mitglieder</a></li><li><a href="events2/veranstaltungsuebersicht/" >Events</a></li><li><a href="aktuell/" >Aktuelles</a></li><li class="last"><a href="kontakt.html" >Kontakt</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</footer>
<?php

// ======= Konfiguration:

$empfaenger = "ogd20testmail@gmail.com";
$nachname = $_POST['nachname'];
$from = $_POST['email'];
$text = $_POST['nachricht'];

        $mail_senden = mail($empfaenger, $nachname, $text, $from);

//Weiterleitung, hier konnte jetzt per echo auch Ausgaben stehen
if($mail_senden){
    header('Location: send-mail-form.php'); //Mail wurde gesendet
    exit();
} else{
    header("Location: ".$url_fehler); //Fehler beim Senden
    exit();
}

?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
