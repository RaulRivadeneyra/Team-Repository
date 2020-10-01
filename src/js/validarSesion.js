$(document).ready(function(){
  $.ajax({
    url: 'php/validarSesion.php',
    type: 'GET',
    success: function(response) {
      let logged = JSON.parse(response);
      if(!logged) {
        window.location.replace("error.html");
      }
    }
  });
});
