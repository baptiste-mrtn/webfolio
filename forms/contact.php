<?php

  $receiving_email_address = 'baptiste.mrtn@outlook.com';

if(isset($_POST['envoyer'])){
  if(empty($_POST['mail'])) {
    echo '<p class="error-message">Le champ mail est vide.</p>';
  }elseif(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i", $_POST['mail'])){
    echo '<p class="error-message">L\'adresse mail entrée est incorrecte.</p>';
  }elseif(empty($_POST['sujet'])){
    echo '<p class="error-message">Le champ sujet est vide.</p>';
  }elseif(empty($_POST['message'])){
    echo '<p class="error-message">Le champ message est vide.</p>';
  }else{
    $mail_de_lutilisateur = $_POST['mail'];
    $entetes_du_mail = [];
    $entetes_du_mail[] = 'MIME-Version: 1.0';
    $entetes_du_mail[] = 'Content-type: text/html; charset=UTF-8';
    $entetes_du_mail[] = 'From: Webfolio <' . $mail_de_lutilisateur . '>';
    $entetes_du_mail[] = 'Reply-To: Webfolio <' . $mail_de_lutilisateur . '>';
    $entetes_du_mail = implode("\r\n", $entetes_du_mail);
    $sujet = '=?UTF-8?B?' . base64_encode($_POST['sujet']) . '?=';
    $message = htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8');
    $message = nl2br($message);
    if(mail($receiving_email_address, $sujet, $message, $entetes_du_mail)){
      echo '<p class="sent-message">Votre message a bien été envoyé. Merci!</p>';
    }else{
      echo '<p class="error-message">Une erreur est survenue, le mail n\'a pas été envoyé.</p>';
    }
  }
}
?>
