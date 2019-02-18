$(document).ready(function(){


//obtener la info de las naves de starwars dependiendo de la pelicula

if(document.URL.indexOf("/naves") >= 0){
var url = window.location.pathname;
var id = url.substring(url.lastIndexOf('/') - 1);
  $.ajax({
    type: "get",
    url: "https://swapi.co/api/films/"+id,
    dataType: "json",
    success: function( response ) {
      $("#nombre_pelicula_ship").text(response.title);
      $.each(response.starships, function(index, value) {

        $.ajax({
          type: "get",
          url: value,
          dataType: "json",
          success: function( response ) {
          console.log(response);
          var urlnave = response.url;
          var idnave = urlnave.substring(urlnave.lastIndexOf('starships/'));
          $(".naves").append($('<a for="nombre_productor" class="col-md-3 col-form-label text-md-center nave">').text(response.name).attr('href',"../../info/"+idnave));
          }
        });
      });
    }
  });
}



//obtener informacion acerca de la nave seleccionada

if(document.URL.indexOf("/info/starships") >= 0){
var url = window.location.pathname;
var id = url.substring(url.lastIndexOf('starships/'));
  $.ajax({
    type: "get",
    url: "https://swapi.co/api/"+id,
    dataType: "json",
    success: function( response ) {
      console.log(response)
      $(".nombre_de_nave").text(response.name);
      $("#name").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.name));
      $("#model").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.model));
      $("#starship_class").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.starship_class));
      $("#manufacturer").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.manufacturer));
      $("#cost_in_credits").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.cost_in_credits));
      $("#crew").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.crew));
      $("#passengers").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.passengers));
      $("#max_atmosphering_speed").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.max_atmosphering_speed));
      $("#hyperdrive_rating").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.hyperdrive_rating));
      $("#MGLT").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.MGLT));
      $("#cargo_capacity").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.cargo_capacity));
      $("#consumables").append($('<p for="nombre_productor" class="col-md-9 col-form-label text-md-center">').text(response.consumables));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"1"));
      $("#1").append($('<label for="nombre">').text('Nombre:'));
      $("#1").append($('<input  class="form-control">').attr('value',response.name).prop('required',true).attr('maxlength','50').attr('name','nombre'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"2"));
      $("#2").append($('<label for="nombre">').text('Modelo:'));
      $("#2").append($('<input  class="form-control">').attr('value',response.model).prop('required',true).attr('maxlength','50').attr('name','modelo'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"3"));
      $("#3").append($('<label for="nombre">').text('Clase:'));
      $("#3").append($('<input  class="form-control">').attr('value',response.starship_class).prop('required',true).attr('maxlength','50').attr('name','clase'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"4"));
      $("#4").append($('<label for="nombre">').text('Manofactura:'));
      $("#4").append($('<input  class="form-control">').attr('value',response.manufacturer).prop('required',true).attr('maxlength','50').attr('name','manofactura'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"5"));
      $("#5").append($('<label for="nombre">').text('Costo en creditos:'));
      $("#5").append($('<input  class="form-control">').attr('value',response.cost_in_credits).prop('required',true).attr('maxlength','50').attr('name','costo_c'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"6"));
      $("#6").append($('<label for="nombre">').text('Tripulacion:'));
      $("#6").append($('<input  class="form-control">').attr('value',response.crew).prop('required',true).attr('maxlength','50').attr('name','tripulacion'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"7"));
      $("#7").append($('<label for="nombre">').text('Pasajeros:'));
      $("#7").append($('<input  class="form-control">').attr('value',response.passengers).prop('required',true).attr('maxlength','50').attr('name','pasajeros'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"8"));
      $("#8").append($('<label for="nombre">').text('Velocidad maxima en atmosfera:'));
      $("#8").append($('<input  class="form-control">').attr('value',response.max_atmosphering_speed).prop('required',true).attr('maxlength','50').attr('name','velocidad_maxima'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"9"));
      $("#9").append($('<label for="nombre">').text('Ranking de hypervelocidad:'));
      $("#9").append($('<input  class="form-control">').attr('value',response.hyperdrive_rating).prop('required',true).attr('maxlength','50').attr('name','ranking_h'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"10"));
      $("#10").append($('<label for="nombre">').text('MGLT:'));
      $("#10").append($('<input  class="form-control">').attr('value',response.MGLT).prop('required',true).attr('maxlength','50').attr('name','mglt'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"11"));
      $("#11").append($('<label for="nombre">').text('Capacidad de carga:'));
      $("#11").append($('<input  class="form-control">').attr('value',response.cargo_capacity).prop('required',true).attr('maxlength','50').attr('name','capacidad_carga'));

      $("#guardar_nave").append($('<div class="form-group">').attr('id',"12"));
      $("#12").append($('<label for="nombre">').text('Consumibles:'));
      $("#12").append($('<input  class="form-control">').attr('value',response.consumables).prop('required',true).attr('maxlength','50').attr('name','consumibles'));
    }
  });
}
});
