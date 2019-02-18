$(document).ready(function(){
  //obtener informacion de las peliculas
if(document.URL.indexOf("/registros") >= 0){
  $.ajax({
    type: "get",
    url: "/registros_data",
    dataType: "json",
    success: function( response ) {
      $.each(response.registros, function(i,value) {
      $("#registros").append($('<div class="form-group gray2">').attr('id',value.id));
      $("#"+value.id).append($('<label for="nombre"  class="col-md-3 col-form-label text-md-left">').text(value.nombre));
      $("#"+value.id).append($('<label for="modelo"  class="col-md-3 col-form-label text-md-left">').text(value.modelo));
      $("#"+value.id).append($('<label for="creado"  class="col-md-3 col-form-label text-md-left">').text(value.created_at));
      $("#"+value.id).append($('<a for="detalles"  class="col-md-3 col-form-label text-md-center btn btn-success">').text('Detalles').attr('href',"detalles_registro/"+value.id));
      });
    }
  });
}



if(document.URL.indexOf("detalles_registro/") >= 0){
var url = window.location.pathname;
var id = url.substring(url.lastIndexOf('/'));
  $.ajax({
    type: "get",
    url: "../informacion_registro"+id,
    dataType: "json",
    success: function( response ) {
      $.each(response.registros, function(i,value) {
        $(".nombre_de_nave").text(value.id);
        $("#name").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.nombre));
        $("#model").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.modelo));
        $("#starship_class").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.clase));
        $("#manufacturer").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.manofactura));
        $("#cost_in_credits").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.costo_c));
        $("#crew").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.tripulacion));
        $("#passengers").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.pasajeros));
        $("#max_atmosphering_speed").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.velocidad_maxima));
        $("#hyperdrive_rating").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.ranking_h));
        $("#MGLT").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.mglt));
        $("#cargo_capacity").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.capacidad_carga));
        $("#consumables").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(value.consumibles));
      });
    }
});
}


});
