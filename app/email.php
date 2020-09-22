<?php
if (isset($_POST['submit'])) {
    $to = "contact@kikoapp.at";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Deine Nachricht";
    $message = $_POST['message'];
    $message2 = "Danke für deine Nachricht an KIKO! Deine Anfrage wird schnellstmöglich bearbeitet.\nDies ist eine Kopie deiner Nachricht an KIKO:\n\n" . $_POST['message'];

    $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n";
    $headers2 = 'From: KIKO Kontakt <contact@kikoapp.at>' . "\r\n" . 'Reply-To: contact@kikoapp.at' . "\r\n";

    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    header('Location: index.html');
}
