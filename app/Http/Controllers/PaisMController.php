<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PaisM;
class PaisMController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index()
    {
      // Devolverá todos los comercial
      $miembro = PaisM::get();
      return view('paisM.index')->with('miembro', $miembro);
    }

    public function store(Request $request)
  {
    $miembro = new PaisM;
    $miembro->id=$request->input('id');
    $miembro->nombre=$request->input('nombre');
    $miembro->save();
    return redirect()->route('paisM.index');
  }
  public function delete($id) 
  {
           $miembro= PaisM::findOrFail($id);
           $miembro->delete();
  
           return redirect()->route('paisM.index');
  }
  
}