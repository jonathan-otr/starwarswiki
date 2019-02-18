@extends('layouts.app')
@section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">Se muestran todas las películas de <a class="navbar-left"><img style="max-width:50PX;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/1280px-Star_Wars_Logo.svg.png"></a>
                        <button class="btn btn-success goback" style="position: absolute;right: 10px;"><i class="fas fa-long-arrow-alt-left"></i></button>
                      </div>
                      <div class="card-body">
                            <div class="form-group row">
                                <label for="nombre_pelicula" class="col-md-3 col-form-label text-md-center gray3">{{ __('Nombre') }}</label>
                                <label for="director" class="col-md-3 col-form-label text-md-center gray3">{{ __('Director') }}</label>
                                <label for="productos" class="col-md-3 col-form-label text-md-center gray3">{{ __('Productor') }}</label>
                                <label for="consultar" class="col-md-3 col-form-label text-md-center gray3">{{ __('Consultar') }}</label>
                            </div>
                              <div class="form-group row peliculas">
                              </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      @endsection
