<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Diplomatica;
class DiplomaticaController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los comercial
      $diplomaticas = Diplomatica::get();
      return view('diplomatica.index')->with('diplomaticas', $diplomaticas);
    }

    public function store(Request $request)
  {
    $diplomaticas = new Comercial;
    $diplomaticas->iddiplo=$request->input('iddiplo');
    $diplomaticas->titulo=$request->input('titulo');
    $diplomaticas->fecha=$request->input('fecha');
    $diplomaticas->detalle->input('detalle');

    $comercial->save();
    return redirect()->route('diplomatica.index');
  }
  
}