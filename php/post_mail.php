<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $object = $_POST["object"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $to = "po@liberagroup.fr";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8\r\n";

    // Envoyer l'e-mail
    $success = mail($to, $object, $message, $headers);

    if ($success) {
        echo "Votre e-mail a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
