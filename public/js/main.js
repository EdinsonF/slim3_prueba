$(document).ready(function(){

  //activarEventos();
  //requestGetList();
  $("#registrar").click(function(){


    $.ajax({
    		url: '/',
    		type: 'POST',
    		dataType: 'json',
        data: {
          nombre      : $('#producto').val(),
          precio      : $('#precio').val(),
          descripcion : $('#descripcion').val()
        },
    	})
    	.done(function( response ) {
    		console.log("success");

        if( response.result == 1  ){
          showMessage(response.message)
        }else{
          showMessage(response.message)
        }
    	})

})

})
// $("#registrar").click(function(){
//
// 	var dato=$("#genero").val();
// 	var route="http://localhost:8000/genero";
// 	var token=$("#token").val();
//
// 	$.ajax({
// 		url: 		route,
// 		headers: 	{'X-CSRF-TOKEN': token},
// 		type: 		'POST',
// 		dataType: 	'json',
// 		data: 		{genre:dato},
//
// 		success:function(){
// 			//$(location).attr('href','list');
// 			$("#mensajeSuccess").html('Genero Creado Correctamente');
// 			$("#msj-success").fadeIn();
// 			CerrarAlert();
//
// 		},
// 		error:function(msj){
// 			$("#mensajeDanger").html(msj.responseJSON.genre);
// 			$("#msj-danger").fadeIn();
// 			CerrarAlert();
//
//
//
// 		}
// 	});
// });


//   function activarEventos(){
//       // boton guardar
//
//       // boton actiualizar
//       $("#").click(function(){
//         id = $("#id_crud").val();
//         $formulario = {
//             "":,
//             "":,
//             "":,
//         }
//         requestUpdate(id, $formulario);
//       });
//       // boton eliminar
//       $("#").click(function(){
//         id = $("#id_crud").val()
//         requestDelete(id);
//       });
//       // boton mostrar
//       $("#").click(function(){
//         id = $("#id_crud").val()
//         requestShow(id);
//       });
//   }
//
// function requestGetList()
// {
//   $.ajax({
// 		url: '/crud/get',
// 		type: 'GET',
// 		dataType: 'json',
// 	})
// 	.done(function( response ) {
// 		console.log("success");
//
//     if( response.result == 1  ){
//       showMessage(response.message)
//     }else{
//       showMessage(response.message)
//     }
// 	})
// 	.fail(function() {
// 		console.log("error");
// 	})
// 	.always(function() {
// 		console.log("complete");
// 	});
// }
//
// function requestSave ($formulario)
// {
//
//   $.ajax({
// 		url: '/crud/save',
// 		type: 'POST',
// 		dataType: 'json',
// 		data: $formulario,
// 	})
// 	.done(function( response ) {
// 		console.log("success");
//
//     if( response.result == 1  ){
//       showMessage(response.message)
//     }else{
//       showMessage(response.message)
//     }
// 	})
// 	.fail(function() {
// 		console.log("error");
// 	})
// 	.always(function() {
// 		console.log("complete");
// 	});
//
//
// }
//
// function requestShow( $id )
// {
//
// }
//
// function requestUpdate( $id, $formulario )
// {
//
// }
//
// function requestDelete( $id )
// {
//
// }
//
//
// function showMessage( $message ){
//   $("selector").html($message);
// }
