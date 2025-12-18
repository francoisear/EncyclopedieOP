<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyage des données pour éviter les failles
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

    // Configuration de l'e-mail
    $to = "ton-email@exemple.com"; // REMPLACE PAR TON ADRESSE
    $subject = "Nouvel avis de Pirate : $pseudo";
    $headers = "From: pirate-web@alwaysdata.net"; // Optionnel : l'expéditeur

    $content = "Capitaine, un nouveau message est arrivé !\n\n";
    $content .= "Nom du pirate : $pseudo\n";
    $content .= "Message : $message\n";

    // Envoi du mail
    if(mail($to, $subject, $content, $headers)) {
        // Redirection vers l'accueil après succès
        header("Location: index.html?success=true");
    } else {
        echo "Une tempête empêche l'envoi du message.";
    }
}
?>
