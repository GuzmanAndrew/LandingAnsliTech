document.addEventListener('DOMContentLoaded', function () {
   // Escuchar el envío del formulario
   const form = document.querySelector('.php-email-form');
   form.addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(form);

      // Realizar la solicitud AJAX para enviar el formulario
      fetch('correo.php', {
         method: 'POST',
         body: formData,
      })
         .then(response => response.json())
         .then(data => {
            console.log("DATA RESPONSE ->" + data);
            if (data.success) {
               // Si el correo se envió con éxito, ocultar el mensaje <h4>
               const successMessage = document.querySelector('.success-message');
               if (successMessage) {
                  successMessage.style.display = 'none';
               }
            }
         })
         .catch(error => {
            console.error('Error:', error);
            console.error('Error en la respuesta:', error.response);
            console.error('Estado de la respuesta:', error.status);
         });
   });
});
