<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comercial;
class ComercialController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index(Request $request)
    {
      $request->user()->authorizeRoles(['user']);
      $comercial = Comercial::orderBy('id', 'ASC')->get();
      return view('comercial.index')->with('comercial', $comercial);
    }
    public function store(Request $request)
  {
    $comercial = new Comercial;
    $comercial->id=$request->input('id');
    $comercial->pais_miembro_nombre=$request->input('pais_miembro_nombre');
    $comercial->tipo=$request->input('tipo');
    $comercial->pais_extranjero_nombre=$request->input('pais_extranjero_nombre');
    $comercial->porcentaje=$request->input('porcentaje');
    $comercial->save();
    
    return redirect()->route('comercial.index');
  }
  /////////////////////////////////////////////////////////
  public function delete($id) 
  {
    $comercial= Comercial::findOrFail($id);
    $comercial->delete();
    return redirect()->route('comercial.index');
  }
  /////////////////////////////////////////////////////////
  public function create()
  {
    return view('comercial.create');
  }
  /////////////////////////////////////////////////////////
  public function show($id)
  {
    $comercial=Comercial::find($id);
    return view('comercial.show',compact('comercial'));
  }
  /////////////////////////////////////////////////////////
  public function edit($id)
  {
    $comercial=Comercial::find($id);
    return view('comercial.edit',compact('comercial'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $this->validate($request,[ 'id'=>'required', 'pais_miembro_nombre'=>'required', 'tipo'=>'required', 'pais_extranjero_nombre'=>'required', 'porcentaje'=>'required']);
    Comercial::find($id)->update($request->all());
    return redirect()->route('comercial.index')->with('success','Registro creado satisfactoriamente');
  }
  /////////////////////////////////////////////////////////
  public function destroy($id) 
  {
    $comercial= Comercial::findOrFail($id);
    $comercial->delete();
    return redirect()->route('comercial.index');
  }
  /////////////////////////////////////////////////////////
  public function getComercial(){
    $comercial=Comercial::all();
    return response()->json($comercial);
  }

}
