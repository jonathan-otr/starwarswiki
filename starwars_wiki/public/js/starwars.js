$(document).ready(function(){


//crear un mensaje al dar click y regresar a la pagina anterior

$(".goback").on('click',function (e){
  e.preventDefault();
  swal({
  title: "Seguro de regresar a la pantalla anterior?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.history.back();
  } else {
  }
});
})

});
