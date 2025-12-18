<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

    // --- CETTE PARTIE SAUVEGARDE L'AVIS SUR TON SITE ---
    $ligne = "Date: " . date('d-m-Y H:i') . " | Nom: $pseudo | Message: $message" . PHP_EOL;
    file_put_contents('avis_pirates.txt', $ligne, FILE_APPEND);

    // Tentative d'envoi mail (même si c'est bloqué, le fichier au-dessus sera créé)
    $to = "toimomo845@gmail.com";
    $subject = "Nouvel avis de : $pseudo";
    $headers = "From: formulaire@encyclopedieonepiece.alwaysdata.net";
    mail($to, $subject, $message, $headers);

    // Redirection
    header("Location: index.html?envoi=reussi");
}
?>
