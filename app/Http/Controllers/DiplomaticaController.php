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
    $diplomaticas = Diplomatica::orderBy('id', 'ASC')->get();
    return view('diplomatica.index')->with('diplomaticas', $diplomaticas);
  }
  /////////////////////////////////////////////////////////
    public function store(Request $request)
  {
    $diplomaticas = new Diplomatica;
    $diplomaticas->id=$request->input('id');
    $diplomaticas->titulo=$request->input('titulo');
    $diplomaticas->fecha=$request->input('fecha');
    $diplomaticas->detalle=$request->input('detalle');

    $diplomaticas->save();
    return redirect()->route('diplomatica.index');
  }
  /////////////////////////////////////////////////////////
  public function delete($id) 
  {
    $diplomaticas= Diplomatica::findOrFail($id);
    $diplomaticas->delete();
    return redirect()->route('diplomatica.index');
  }
  /////////////////////////////////////////////////////////
  public function create()
  {
    return view('diplomatica.create');
  }
  /////////////////////////////////////////////////////////
  public function show($id)
  {
    $diplomaticas=Diplomatica::find($id);
    return view('diplomatica.show',compact('diplomaticas'));
  }
  /////////////////////////////////////////////////////////
  public function edit($id)
  {
    $diplomaticas=Diplomatica::find($id);
    return view('diplomatica.edit',compact('diplomaticas'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $this->validate($request,[ 'id'=>'required', 'titulo'=>'required','fecha'=>'required','detalle'=>'required']);
    Diplomatica::find($id)->update($request->all());
    return redirect()->route('diplomatica.index')->with('success','Registro creado satisfactoriamente');
  }
  /////////////////////////////////////////////////////////
  public function destroy($id) 
  {
    $diplomaticas= Diplomatica::findOrFail($id);
    $diplomaticas->delete();
    return redirect()->route('diplomatica.index');
  }
  /////////////////////////////////////////////////////////  
  public function getDiplomatica(){
    $diplomaticas=Diplomatica::all();
    return response()->json($diplomaticas);
  }
}