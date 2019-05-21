$(document).ready(function(){
  function imprimirListaCentrosAcopio() {
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
});
