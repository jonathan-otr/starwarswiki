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
                <div class="card-header" style="color:#ffff;">Se muestran los datos de <span class="nombre_de_nave" style="color:yellow;"></span>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-success goback" style="position: absolute;right: 10px;"><i class="fas fa-long-arrow-alt-left"></i></button>
               </div>
                <div class="card-body">
                  <div class="form-group row gray2" id="name">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Nombre</b>
                  </div>
                  <div class="form-group row gray2" id="model">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Modelo</b>
                  </div>
                  <div class="form-group row gray2" id="starship_class">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Clase</b>
                  </div>
                  <div class="form-group row gray2" id="manufacturer">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Manofactura</b>
                  </div>
                  <div class="form-group row gray2" id="cost_in_credits">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Costo en creditos</b>
                  </div>
                  <div class="form-group row gray2" id="crew">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Tripulacion</b>
                  </div>
                  <div class="form-group row gray2" id="passengers">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Pasajeros</b>
                  </div>
                  <div class="form-group row gray2" id="max_atmosphering_speed">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Velocidad maxima en atmosfera</b>
                  </div>
                  <div class="form-group row gray2" id="hyperdrive_rating">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Ranking de hypervelocidad</b>
                  </div>
                  <div class="form-group row gray2" id="MGLT">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">MGLT</b>
                  </div>
                  <div class="form-group row gray2" id="cargo_capacity">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Capacidad de carga</b>
                  </div>
                  <div class="form-group row gray2" id="consumables">
                    <b class="col-md-3 col-form-label text-md-center gray" style="font-weight:bold;">Consumibles</b>
                  </div>
                </div>
            </div>



            <!-- modal de carga de info -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Puedes subir tú propia información sobre <span class="nombre_de_nave" style="color:yellow;"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="" action="{{ Route('guardar_nave') }}" id="guardar_nave" method="post">
                    @csrf
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <button type="submit" form="guardar_nave" class="btn btn-warning">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
