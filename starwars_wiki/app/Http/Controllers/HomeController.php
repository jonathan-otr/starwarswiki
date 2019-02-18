<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\nave;
use Alert;
use DB;

class HomeController extends Controller
{

    /*public function welcome()
    {
        return view('welcome');
    }*/
    public function home(Request $request){
      return view('home');
    }

    public function movies(Request $request){
      return view('movies');
    }

    public function registros(Request $request){
      return view('registros');
    }

    public function detalles_registro(Request $request){
      return view('detalles_registro');
    }

    public function naves(Request $request){
      $id=$request['id'];
      return view('ships',compact('id'));
    }


    public function info(Request $request){
      $id=$request['id'];
      return view('info',compact('id'));
    }

    public function guardar_nave(Request $request){
      $cargar=nave::create($request->all());
      Alert::success('Guardado correctamente!')->persistent('Close');
      return redirect()->back();
    }

    public function registros_data(){
      $registros=\DB::table('naves')->orderby('nombre','ASC')->get();
      return Response::json( array(
        'registros' => $registros,
      ));
    }


    public function informacion_registro(request $request){
      $id=$request['id'];
      $registros=\DB::table('naves')->where('id',$id)->orderby('nombre','ASC')->get();
      return Response::json( array(
        'registros' => $registros,
      ));
    }

    public function datos_json(){
      Alert::info('Leer atentamente para obtener los datos correctos!')->persistent('Close');
      return view('datos_json');
    }

}
