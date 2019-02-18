@extends('layouts.app')
@section('content')
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="color:#ffff;">Podras obtener datos de los registros cargados por los fans desde nuestra <span class="nombre_de_nave" style="color:yellow;">API</span>
               </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-md-12 col-form-label text-md-left">Pódras encontrar todos los registros de naves de starwars realizados por fans dando click en el siguiente enlace : <a href="{{ Route('registros_data') }}" target="new">Todos los registros</a> </label>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-md-12 col-form-label text-md-left">De igual manera puedes obtener la información de un registro en especifico con respecto a su ID </label>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-md-12 col-form-label text-md-left"><b style="color:red;">Por ejemplo:</b> </label>
                  </div>


                  <div class="form-group row">
                    <label for="" class="col-md-12 col-form-label text-md-left">informacion_registro/12 en el siguiente link  <a href="{{ Route('informacion_registro','12') }}" target="new">Registro con id número 12</a></label>
                  </div>
                </div>
            </div>
@endsection
