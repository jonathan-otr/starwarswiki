$(document).ready(function(){
  //obtener informacion de las peliculas 
if(document.URL.indexOf("/movies") >= 0){
  $.ajax({
    type: "get",
    url: "https://swapi.co/api/films/",
    dataType: "json",
    success: function( response ) {
      $.each(response.results, function(i,value) {
        $(".peliculas").append($('<p for="nombre_productor" class="col-md-3 col-form-label text-md-center">').text(value.title));
        $(".peliculas").append($('<p for="nombre_productor" class="col-md-3 col-form-label text-md-center">').text(value.director));
        $(".peliculas").append($('<p for="nombre_productor" class="col-md-3 col-form-label text-md-center">').text(value.producer));
        var url = value.url;
        var id = url.substring(url.lastIndexOf('/')-1);
        $(".peliculas").append($('<a class="btn btn-success col-md-3 col-form-label text-md-center" style="color:#ffff;">').text("Naves").attr('href',"naves/"+id));
      });
    }
  });
}
});
