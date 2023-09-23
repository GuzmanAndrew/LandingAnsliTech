<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      
      $to = "andrew.ramirez@sulamtech.com"; // Cambia esto con tu dirección de correo electrónico
      $headers = "From: $email" . "\r\n";
      
      mail($to, $subject, $message, $headers);
      
      // Redireccionar a una página de confirmación
      header("Location: index.html");
   } else {
      // Si alguien intenta acceder a este archivo directamente, redirigir a la página de formulario.
      header("Location: index.html");
   }
?>
