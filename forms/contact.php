<?php
session_start();

require_once __DIR__ . '/../autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;

ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../php_error.log'); // Assurez-vous que le dossier a les bonnes permissions
error_reporting(E_ALL);


// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(dirname(__DIR__)); // Racine du projet
$dotenv->load();

$mail = new PHPMailer(true);

// Vérifier si la requête est AJAX
if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {
    die('Accès interdit');
}

try {
    // Validation des données
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Vérification de l'email
    if (!$email) {
        die('Erreur: Adresse email invalide.');
    }

    // Validation CAPTCHA
    if (!isset($_SESSION['captcha_result']) || $_POST['captcha'] != $_SESSION['captcha_result']) {
        die('Erreur: Réponse CAPTCHA incorrecte.');
    }
    unset($_SESSION['captcha_result']); // Supprimer la session après validation

    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USERNAME'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
    $mail->Port = $_ENV['SMTP_PORT'];

    // Expéditeur et destinataire
    $mail->setFrom($_ENV['SMTP_USERNAME'], 'Baptiste Martin'); // Adresse SMTP par défaut
    $mail->addReplyTo($email, $name); // L'utilisateur comme adresse de réponse
    $mail->addAddress('contact@martinbaptiste.fr'); // Destinataire principal

    // Contenu de l'email
    $mail->isHTML(false); // Email en texte brut
    $mail->Subject = $subject;
    $mail->Body = "Nom: $name\nEmail: $email\n\n$message";

    // Envoi
    $mail->send();
    echo 'OK'; // Retourner un message de succès
} catch (Exception $e) {
    echo 'Erreur: L\'envoi a échoué. ' . $mail->ErrorInfo;
}
