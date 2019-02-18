@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="form-group row">
                    <div class="col-md-10 col-form-label text-md-left">
                      Se muestran las naves que aparecieron en la pelicula <span id="nombre_pelicula_ship" style="color:yellow;"></span>
                    </div>
                    <button class="col-md-2 col-form-label text-md-center btn btn-success goback"><i class="fas fa-long-arrow-alt-left"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group row naves">
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
