@extends('layouts.app')
@section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="form-group row">
                        <div class="col-md-10 col-form-label text-md-left">
                          Se muestran todos los registros de naves subidos por los <span style="color:yellow;">fans</span>
                        </div>
                        <button class="col-md-2 col-form-label text-md-center btn btn-success goback"><i class="fas fa-long-arrow-alt-left"></i></button>
                      </div>
                    </div>
                      <div class="card-body">
                            <div class="form-group row gray3">
                                <label for="nombre_pelicula" class="col-md-3 col-form-label text-md-left ">{{ __('Nombre') }}</label>
                                <label for="director" class="col-md-3 col-form-label text-md-left ">{{ __('Modelo') }}</label>
                                <label for="productos" class="col-md-3 col-form-label text-md-left ">{{ __('Cargado') }}</label>
                                <label for="consultar" class="col-md-3 col-form-label text-md-left ">{{ __('Consultar') }}</label>
                            </div>
                            <div id="registros">
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      @endsection
