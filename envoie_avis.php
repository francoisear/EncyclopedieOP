<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);
    $to = "toimomo845@gmail.com"; 

    $subject = "Nouvel avis de : $pseudo";
    
    $headers = "From: formulaire@encyclopedieonepiece.alwaysdata.net" . "\r\n" .
               "Reply-To: " . $to . "\r\n" .
               "Content-Type: text/plain; charset=utf-8" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $content = "Moussaillon, tu as reçu un message !\n\nNom : $pseudo\nMessage : $message";

    // --- CETTE LIGNE EST TA ROUE DE SECOURS ---
    // Elle écrit l'avis dans un fichier avis.txt sur ton serveur
    file_put_contents('avis.txt', "Date: ".date('d-m-Y H:i')." | Nom: $pseudo | Avis: $message" . PHP_EOL, FILE_APPEND);

    if(mail($to, $subject, $content, $headers)) {
        header("Location: index.html?envoi=reussi");
    } else {
        echo "Erreur d'envoi mail, mais l'avis a été sauvegardé dans avis.txt.";
    }
}
?>