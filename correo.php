<?php

if (isset($_POST['enviar'])) {
   if (
      !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject'])
      && !empty($_POST['message'])
   ) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $email_to = "andrew.ramirez@sulamtech.com";

      $header = "From: " . $email . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();
      $mail = mail($email_to, $subject, $message, $header);

      if ($mail) {
         // Redireccionar a index.php con un mensaje de éxito
         header("Location: index.php?success=1");
         exit;
      } else {
         // Redireccionar a index.php con un mensaje de error
         header("Location: index.php?success=0");
         exit;
      }

   }
}

?>