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

    <!-- include your own success html here -->

    Thank you for contacting us. We will be in touch with you very soon.

    <?php

}
?>