@extends('layouts.app')
@section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">Busca cualquier tipo de información acerca de <a class="navbar-left"><img style="max-width:50PX;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/1280px-Star_Wars_Logo.svg.png"></a>
                      </div>
                      <div class="card-body">
                            <div class="form-group row">
                              <div class="col-md-12 col-form-label text-md-center">
                                <h2><a href="{{ Route('movies') }}" class="home-link"><img src="https://ep00.epimg.net/elpais/imagenes/2017/12/13/album/1513166327_044213_1513268842_album_normal.jpg" style="height:4em;" alt=""><br>
                                Conoce todo sobre las películas</a> </h2>
                              </div>

                              <div class="col-md-12 col-form-label text-md-center">
                                <h2><a href="{{ Route('registros') }}" class="home-link"><i style="font-size:4em;" class="fas fa-clipboard-list"></i><br>
                                Consulta los registros de naves registradas por fans</a> </h2>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      @endsection
