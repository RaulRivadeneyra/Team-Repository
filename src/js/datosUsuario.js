$(document).ready(function(){
  imprimirProductosReducido();
  imprimirDatosUsuarioPerfil();

  function imprimirProductosReducido() {
    $.ajax({
      url: 'php/getProductos.php',
      type: 'GET',
      success: function(response) {
        const productos = JSON.parse(response);
        let template = '';
        productos.forEach(producto => {
          template += `
                  <tr id-producto="${producto.id}">
                    <td>${producto.nombreProducto}</td>
                    <td>${producto.observaciones}</td>
                    <td>${producto.cantidadActual}</td>
                    <td>${producto.cantidadRequerida}</td>
                    <td>${producto.fechaLimite}</td>
                    <td>${producto.prioridad}</td>
                  </tr>
                `
        });
        $('#productos-tabla').html(template);
      }
    });
  }

  function imprimirDatosUsuarioPerfil() {
    $.ajax({
      url: 'php/obtenerDatosUsuario.php',
      type: 'GET',
      success: function(response) {
        const datosUsuario = JSON.parse(response);
        let direccionCentro = "Calle " + datosUsuario.Calle + " #" + datosUsuario.NumeroEdificio + " x " + datosUsuario.Cruzamiento1 + " y " + datosUsuario.Cruzamiento2;
        direccionCentro += " Colonia " + datosUsuario.Colonia;

        $('#nombre-centro').html(datosUsuario.Nombre);
        $('#direccion-centro').html(direccionCentro);
        $('#cp-centro').html("Codigo postal: " + datosUsuario.CodigoPostal);
        $('#email-centro').html("Correo electronico: " + datosUsuario.Email);
        $('#telefono-centro').html("Telefono: " + datosUsuario.Telefono);
        $('#descripcion-centro').html('"' + datosUsuario.Descripcion + '"');
      }
    });
  }

});
