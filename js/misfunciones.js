	function load(page){
		
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'listacontactos.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../img/loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}



	$('#dataUpdate').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Botón que activó el modal
	  var id = button.data('id') // Extraer la información de atributos de datos
	  var nombre = button.data('nombre') // Extraer la información de atributos de datos
	  var apellido = button.data('apellido') // Extraer la información de atributos de datos
	  var telefono = button.data('telefono') // Extraer la información de atributos de datos
  	  
	  var modal = $(this)
	  modal.find('.modal-title').text('Modificar Contacto: '+id)
	  modal.find('.modal-body #id').val(id)
	  modal.find('.modal-body #nombre').val(nombre)
	  modal.find('.modal-body #apellido').val(apellido)
	  modal.find('.modal-body #telefono').val(telefono)
	  
	  $('.alert').hide();//Oculto alert
	})

   

		
	$('#dataDelete').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Botón que activó el modal
	  var id = button.data('id') // Extraer la información de atributos de datos
	  var modal = $(this)
	  modal.find('#id').val(id)
	})




	$( "#actualizarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "../controladores/modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
	



	$( "#guardarDatos" ).submit(function( event ) {
	var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../controladores/agregar.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#datos_ajax_register").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#datos_ajax_register").html(datos);
				
				load(1);
			  }
		});
	  event.preventDefault();
	});
	



	$( "#eliminarDatos" ).submit(function( event ) {
	var parametros = $(this).serialize();
		 $.ajax({
				type: "POST",
				url: "../controladores/eliminar.php",
				data: parametros,
				 beforeSend: function(objeto){
					$(".datos_ajax_delete").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$(".datos_ajax_delete").html(datos);
				
				$('#dataDelete').modal('hide');
				load(1);
			  }
		});
	  event.preventDefault();
	});



	// Funcion crear nueva fila en creacion de tabla de BD
	$( "#addfila" ).click(function() {
		var tds = '<tr><td></td>';
	    tds += '<td><input type="text" class="form-control" id="nombre0" name="nombre" required maxlength="20"></td>';
        tds += '<td>';
        tds += '<select class="form-control" id="tipo0" name="tipo">';
        tds += '    <option value="VARCHAR">VARCHAR</option>';
        tds += '    <option value="CHAR">CHAR</option>';
        tds += '    <option value="INT">INT</option>';
        tds += '    <option value="DATE">DATE</option>';
        tds += '    <option value="TEXT">TEXT</option>';
        tds += '    <option value="DECIMAL">DECIMAL</option>';
        tds += '    <option value="FLOAT">FLOAT</option>';
        tds += '    <option value="DOUBLE">DOUBLE</option>';
        tds += '    <option value="BOOLEAN">BOOLEAN</option>';
        tds += '  </select></td>';
        tds += '<td><input type="text" class="form-control" id="tamano0" name="tamano"  maxlength="15"></td>';
        tds += '<td> ';
        tds += '<select class="form-control" id="sinull0" name="sinull">';
        tds += '    <option value="NO">NO</option>';
        tds += '    <option value="SI">SI</option>';
        tds += '  </select></td>';
		tds += '</tr>';
		
		$("#mitabla").append(tds);
	});	


	// Funcion eliminar fila en creacion de tabla de BD
    $("#delfila").click(function(){
        var n = $('tr', $("#mitabla")).length;
        console.log("tota filas:" + n);
        if(n>2)
        {
            // Eliminamos la ultima columna
            $("#mitabla tr:last").remove();
        }
    });



	$( "#guardarTabla" ).submit(function( event ) {
	  
		grabaTodoTabla('mitabla');
	  	event.preventDefault();
	});


    // Obtener todos los datos de las filas creadas.
	function grabaTodoTabla(TABLAID){

		var DATA 	= [];
		var TABLA 	= $("#"+TABLAID+" tbody > tr");
	 	var NOMBRETABLA = document.getElementById("nombretabla0").value;
	 	
	 	//console.log("nombre tabla:" + NOMBRETABLA);
		//recorrer la tabla en cada TR 
		TABLA.each(function(){
			
			var NOMBRE  = $(this).find("input[id*='nombre0']").val(),
				TAMANO 	= $(this).find("input[id*='tamano0']").val(),
				TIPO 	= $(this).find("select[id*='tipo0']").val();
				SINULL 	= $(this).find("select[id*='sinull0']").val();

			item = {};

 	        item ["nombre"] 	= NOMBRE;
	        item ["tamano"] 	= TAMANO;
	        item ['tipo'] 		= TIPO;
	        item ['tabla'] 		= NOMBRETABLA;
	        item ['sinull'] 	= SINULL;
	        
	        //una vez agregados los datos al array "item" 
	        //hacemos un .push() para agregarlos a nuestro array "DATA".
	        DATA.push(item);

		});
		console.log(DATA);
	 
		//Se envia al controlador PHP por ajax array en json 
		INFO 	= new FormData();
		aInfo 	= JSON.stringify(DATA);
	 
		INFO.append('data', aInfo);
	 
		$.ajax({
			data: INFO,
			type: "POST",
			url : "../controladores/crear-tabla.php",
			processData: false, 
			contentType: false,
			beforeSend: function(objeto){
				$("#datos_ajax_crear").html("Mensaje: Procesando...");
				  },
			success: function(datos){
				$("#datos_ajax_crear").html(datos);
			
			}
		});
 
	}

	function loadGrafico(){
		
		var parametros = {"action":"ajax"};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'grafico-prod.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../img/loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}


$('#tablasSel').change(function(){
	    var opTabla = $("#tablasSel option:selected").val();
        //var opTabla2 = $("#tablasSel").val();
        console.log("Este mensaje"); 
        console.log("Este opcion" + opTabla); 
        //$('#capa').html(op);

                      //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "../controladores/obtenerCampos.php",
                    data: "b="+ opTabla,
                    dataType: "html",
                    beforeSend: function(objeto){
					$("#loader").html("<img src='../img/loader.gif'>");
					},
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resTablas").empty();
                          //$("#resultado").append(data);
                          $("#resTablas").html(data).fadeIn('slow');
                                                             
                    }
              });

        });
                                                                   

$('#tablasSel2').change(function(){
	    var opTabla = $("#tablasSel2 option:selected").val();
        //var opTabla2 = $("#tablasSel").val();
        console.log("Este mensaje"); 
        console.log("Este opcion" + opTabla); 
        //$('#capa').html(op);

                      //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "../controladores/obtenerDatosDina.php",
                    data: "b="+ opTabla,
                    dataType: "html",
                    beforeSend: function(objeto){
					$("#loader").html("<img src='../img/loader.gif'>");
					},
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resTablas").empty();
                          //$("#resultado").append(data);
                          $("#resTablas").html(data).fadeIn('slow');
                                                             
                    }
              });

        });