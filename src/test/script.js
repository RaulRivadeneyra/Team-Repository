$(document).ready(function(){
  $.ajax({
    url: 'sesion.php',
    type: 'GET',
    success: function(response) {
      let variable = JSON.parse(response);
      if(!variable) {
        window.location.replace("error.html");
      }
    }
  });
});
