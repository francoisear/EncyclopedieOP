<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

    // Ton adresse de réception
    $to = "toimomo845@gmail.com"; 

    $subject = "Nouvel avis de pirate : $pseudo";
    
    // Configuration spécifique pour Alwaysdata
    // On utilise ton pseudo 'encyclopedieonepiece'
    $headers = "From: formulaire@encyclopedieonepiece.alwaysdata.net" . "\r\n" .
               "Reply-To: " . $to . "\r\n" .
               "Content-Type: text/plain; charset=utf-8" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $content = "Moussaillon, tu as reçu un message !\n\n";
    $content .= "Nom du pirate : $pseudo\n";
    $content .= "Message : $message";

    // Envoi du mail
    if(mail($to, $subject, $content, $headers)) {
        // Redirection vers l'index après succès
        header("Location: index.html?envoi=reussi");
    } else {
        echo "Erreur d'envoi. Vérifiez la configuration sur Alwaysdata.";
    }
}
?>
