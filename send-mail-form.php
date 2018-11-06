<?php
if (isset($_POST['email'])) {

    $email_to = "pascal.leone@stud.kftg.ch";
    $email_subject = "E-Mail über das Kontaktformular";

    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (!isset($_POST['vorname']) || !isset($_POST['nachname']) || !isset($_POST['email']) || !isset($_POST['nachricht'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $vorname = $_POST['vorname']; // required
    $nachname = $_POST['nachname']; // required
    $email = $_POST['email']; // required
    $nachricht = $_POST['nachricht']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $vorname)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if (!preg_match($string_exp, $nachname)) {
        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    if (strlen($nachricht) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "First Name: " . clean_string($vorname) . "\n";
    $email_message .= "Last Name: " . clean_string($nachname) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Comments: " . clean_string($nachricht) . "\n";

// create email headers
    $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!doctype html>
    <html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="http://grants.ulbsibiu.ro/sidpop/blocks/continut_imagine/images/x.png"
              type="image/x-icon"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/sticky-footer.css">

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
                    <a class="nav-link" href="Kontakt.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Impressum.php">Impressum</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid my-4">
        <p>Vielen Dank für Ihre Nachricht!</p>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">Dies ist ein Projekt mit OGD</span>
        </div>
    </footer>

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


    <?php

}
?>