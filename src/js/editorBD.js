$(document).ready(function(){
	let editandoProducto = false;

	imprimirProductosEditor();

	// Agregar productos
	$('#productos-form').submit(e => {
    e.preventDefault();
    const postData = {
			id: $('#id-producto').val(),
      nombreProducto: $('#nombreProducto').val(),
      observaciones: $('#observaciones').val(),
      cantidadActual: $('#cantidadActual').val(),
			cantidadRequerida: $('#cantidadRequerida').val(),
			fechaLimite: $('#fechaLimite').val(),
			prioridad: $('#prioridad').val()
    };

		let url = "";
		if(editandoProducto) {
			url = 'php/actualizarProducto.php';
			editandoProducto = false;
		}
		else {
			url = 'php/agregarProducto.php';
		}
    $.post(url, postData, (response) => {
      $('#productos-form').trigger('reset');
      imprimirProductosEditor();
    });
  });

	// Borrar productos
	$(document).on('click', '.borrar-producto', (e) => {
		if(confirm('¿Quieres borrar el producto?')) {
			const element = $(this)[0].activeElement.parentElement.parentElement;
			const id = $(element).attr('id');
			$.post('php/borrarProducto.php', {id}, (response) => {
				imprimirProductosEditor();
			});
		}
	});

	// Editar productos
	$(document).on('click', '.editar-producto', (e) => {
		const element = $(this)[0].activeElement.parentElement.parentElement;
		const id = $(element).attr('id');
		$.post('php/getProductoIndividual.php', {id}, (response) => {
			const producto = JSON.parse(response);
			$('#nombreProducto').val(producto.nombreProducto);
			$('#observaciones').val(producto.observaciones);
			$('#cantidadActual').val(producto.cantidadActual);
			$('#cantidadRequerida').val(producto.cantidadRequerida);
			$('#fechaLimite').val(producto.fechaLimite);
			$('#prioridad').val(producto.prioridad);
			$("#id-producto").val(producto.id);
			editandoProducto = true;
		});
		e.preventDefault();
	});

	function imprimirProductosEditor() {
     $.ajax({
       url: 'php/getProductos.php',
       type: 'GET',
       success: function(response) {
         const productos = JSON.parse(response);
         let template = '';
         productos.forEach(producto => {
           template += `
                   <tr id="${producto.id}">
                   <td>${producto.id}</td>
                   <td>${producto.nombreProducto}</td>
                   <td>${producto.observaciones}</td>
									 <td>${producto.cantidadActual}</td>
									 <td>${producto.cantidadRequerida}</td>
									 <td>${producto.fechaLimite}</td>
									 <td>${producto.prioridad}</td>
                   <td>
                     <button class="borrar-producto butt">
                      Borrar
                     </button>
                   </td>
									 <td>
                     <button class="editar-producto butt">
                      Editar
                     </button>
                   </td>
                   </tr>
                 `
         });
         $('#productos-tabla').html(template);
       }
     });
   }

});
