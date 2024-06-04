document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que el formulario se envíe normalmente

    // Recolectar los datos del formulario
    var formData = new FormData(this);

    // Enviar los datos mediante una solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'enviar_formulario.php', true);
    xhr.onload = function () {
      // Manejar la respuesta aquí
      if (xhr.status === 200) {
        // Aquí puedes mostrar un mensaje de éxito o redirigir a una página de confirmación
        console.log('¡Formulario enviado con éxito!');
      } else {
        // Aquí puedes manejar errores si ocurrieron
        console.error('Error al enviar el formulario.');
      }
    };
    xhr.send(formData);
  });
});
