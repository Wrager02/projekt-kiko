<?php
if(isset($_POST['submit'])) {
    $to = "jakob.fischer0408@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Deine Nachricht";
    $message = $_POST['message'];
    $message2 = "Dies ist eine Kopie Ihrer Nachricht:\n\n".$_POST['message'];

    $headers = "Von: " . $from;
    $headers2 = "Von: " . $to;

    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    header('Location: index.html');
}
