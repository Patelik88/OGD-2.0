<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="http://grants.ulbsibiu.ro/sidpop/blocks/continut_imagine/images/x.png"
          type="image/x-icon"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylesheet.css">

    <title>OGD-2.0</title>

    <?php
    //    if (isset($_POST['email'])) {
    //
    //    $email_to = "testaccountlol@yopmail.com";
    //    $email_subject = "E-Mail Kontaktformular OGD-2";
    //
    //    $vorname = $_POST['vorname'];
    //    $nachname = $_POST['nachname'];
    //    $email = $_POST['email'];
    //    $nachricht = $_POST['nachricht'];
    //
    //    $email_message = "Form details below.\n\n";
    //
    //    function clean_string($string) {
    //        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    //        return str_replace($bad, "", $string);
    //    }
    //
    //    $email_message .= "Vorname: " . clean_string($vorname) . "\n";
    //    $email_message .= "Nachname: " . clean_string($nachname) . "\n";
    //    $email_message .= "E-Mail: " . clean_string($email) . "\n";
    //    $email_message .= "Nachricht: " . clean_string($nachricht) . "\n";
    //
    //    $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
    //    mail($email_to, $email_subject, $email_message, $headers);
    ?>

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
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="impressum.php">Impressum</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid my-4">
    <p>Vielen Dank für Ihre Nachricht!</p>
    <br>
    <form action="index.php">
        <button type="submit" class="btn btn-success">Zurück zur Karte</button>
    </form>
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