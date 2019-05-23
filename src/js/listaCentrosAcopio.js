$(document).ready(function(){
  imprimirListaCentrosAcopio();

  $(document).on('click', '.dm-center', (e) => {
	   const element = $(this)[0].activeElement;
     const postData = {
      id: $(element).attr('id')
     };
     const url = "php/setCentroSeleccionado.php";

     $.post(url, postData, (response) => {
       window.location.href="donor-info.html";
     });
	});

  function imprimirListaCentrosAcopio() {
    $.ajax({
      url: 'php/getCentrosAcopio.php',
      type: 'GET',
      success: function(response) {
        const centros = JSON.parse(response);
        let template = '';
        centros.forEach(centro => {

          let direccionCentro = "Calle " + centro.Calle + " #" + centro.NumeroEdificio;
          direccionCentro += " x " + centro.Cruzamiento1 + " y " + centro.Cruzamiento2;
          direccionCentro += " Colonia " + centro.Colonia;

          template += `
                <button type="button" class="dm-center" id="${centro.id}">
                    <h2>${centro.Nombre}</h2>
                    <h3>${centro.Telefono}</h3>
                    <h4>${direccionCentro}</h4>
                </button>
                `
        });
        $('#listaCentros').html(template);
      }
    });
  }
});
