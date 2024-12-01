<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "lmt.dorian@gmail.com"; // Remplace par ton adresse email
    $headers = "From: " . $email;
    $txt = "Vous avez reçu un message de " . $email . ".\n\n" . $message;

    mail($to, $subject, $txt, $headers);

    header("Location: index.html#contact"); // Redirection après envoi
}
?>
