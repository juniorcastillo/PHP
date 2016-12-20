
$(document).ready(function () {
  var idtipo;
  var idinmueble;



  //--------------------------------------------------------------------------------------------
  //DIALOGO DE BORRADO
  $("#dialogoborrar").dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    buttons: {
      //BOTON DE BORRAR
      "Borrar": function () {
        //Ajax con get
        $.get("borrar.php", {"idinmueble": idinmueble}, function (data, status) {
          $("#inmueble_" + idinmueble).fadeOut(500);
        })//get			
        //Cerrar la ventana de dialogo				
        $(this).dialog("close");
      },
      "Cancelar": function () {
        //Cerrar la ventana de dialogo
        $(this).dialog("close");
      }
    }//buttons
  });

  //Evento click que pulsa el boton borrar
  $(document).on("click", ".borrar", function () {
    //Obtenemos el idinmueble a eliminar
    //a traves del atributo idrecord del tr
    idinmueble = $(this).parents("tr").data("idinmueble");
    //Accion para mostrar el dialogo de borrar
    $("#dialogoborrar").dialog("open");
  });

  //---------------------------------------------------------------------------------------------
  //MODIFICAR
  $("#dialogomodificar").dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    buttons: {
      "Guardar": function () {
        $.post("modificar.php", {
          idModificar: idinmueble,
          fechaAltaModificar: $("#fechaAltaModificar").val(),
          tipoModificar: $("#tipoModificar").val(),
          operacionModificar: $("#operacionModificar").val(),
          provinciaModificar: $("#provinciaModificar").val(),
          superficieModificar: $("#superficieModificar").val(),
          precioModificar: $("#precioModificar").val(),
          vendedorModificar: $("#vendedorModificar").val()

        }, function (data, status) {
          $("#contenedor").html(data);
        })//get			

        $(this).dialog("close");
      },
      "Cancelar": function () {
        $(this).dialog("close");
      }
    }//buttons
  });

  //Boton Modificar	
  $(document).on("click", ".modificar", function () {
    //Obtenemos el idinmueble de la fila
    idinmueble = $(this).parents("tr").data("idinmueble");
    //muentra el valor de esa fila 
    $("#idModificar").val($(this).parent().siblings("td.id").html());
    //Para que ponga el campo de la fecha de alta con su val

    $("#fechaAltaModificar").val($(this).parent().siblings("td.alta").html());
    //Tipo de inmueble
    $("#tipoModificar").val($(this).parent().siblings("td.tipo").html());
    //operacion este sera un select
    $("#operacionModificar").val($(this).parent().siblings("td.operacion").html());
    //provincia 
    $("#provinciaModificar").val($(this).parent().siblings("td.provincia").html());
    //superficie del inmueble
    $("#superficieModificar").val($(this).parent().siblings("td.superficie").html());
    //precio que cuesta el inmueble
    $("#precioModificar").val($(this).parent().siblings("td.precio").html());
    //ID del vendedor
    $("#vendedorModificar").val($(this).parent().siblings("td.vendedor").html());
    //Muestro el dialogo
    $("#dialogomodificar").dialog("open")

  });




//-----------------------------------------------------------------------------------------------------------------

  //---- Nuevao inmueble --------------------------------------------------------------------------------------
  //Boton de nuevo inmueble 
  //Crea nueva fila al final de la tabla
  //Con dos nuevos botones (guardarnuevo y cancelarnuevo)
  $(document).on("click", "#nuevo", function () {
    $.post("../Vista/formulario_nuevos.php", function (data) {
      //Añade a la tabla de datos una nueva fila
      $("#tabladatos").append(data);


      //Ocultamos boton de nuevo inmueble
      //Para evitar añadir mas de uno 
      //a la vez
      $("#nuevo").hide();
    })//get	
  });

  //Boton de cancelar nuevo
  $(document).on("click", "#cancelarnuevo", function () {
    //Elimina la nueva fila creada
    $("#filanueva").remove();
    //vuelve a mostrar el botón de nuevo (+)
    $("#nuevo").show();

  });

  //Boton de guardar nuevo
  $(document).on("click", "#guardarnuevo", function () {
    $.post("anadir.php", {
      idNuevo: $("#idNuevo").val(),
      fechaAltaNuevo: $("#fechaAltaNuevo").val(),
      tipoNuevo: $("#tipoNuevo").val(),
      operacionNuevo: $("#operacionNuevo").val(),
      provinciaNuevo: $("#provinciaNuevo").val(),
      superficieNuevo: $("#superficeNuevo").val(),
      precioNuevo: $("#precioNuevo").val(),
      imagenNuevo: $("#imagenNuevo").val(),
      vendedorNuevo: $("#vendedorNuevo").val()
    }, function (data) {
      //Pinta de nuevo la tabla
      $("#contenedor").html(data);
      //Vuelve a mostrar el boton de nuevo
      $("#nuevo").show();
    })//post	
  });
  //Comprueba que el archivo es demasiado grande
  $(':file').change(function(){
    var file = this.files[0];
    name = file.name;
    size = file.size;
    type = file.type;

    if(file.name.length < 1) {
    }
    else if(file.size > 5000) {
        alert("The file is too big");
    }
   // else if(file.type != 'img/png' && file.type != 'img/jpg' && file.type != 'img/gif' && file.type != 'img/jpeg' ) {
     //   alert("The file does not match png, jpg or gif");
 //   }
    
  });


  //Se ejecuta en el tiempo de espera del servidor
  function cargar() {
    //Muestra el gráfico de cargar
    $("#cargando").show();
  }


  //Una vez cargado vuelve a ocultar el gif animado			
  function fin() {
    $("#cargando").hide();
  }


});//document ready
