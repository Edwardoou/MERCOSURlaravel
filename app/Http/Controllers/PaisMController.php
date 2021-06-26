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
  public function index(Request $request)
  {
    $request->user()->authorizeRoles(['user']);
    $miembro = PaisM::orderBy('id', 'ASC')->get();
    return view('paisM.index')->with('miembro', $miembro);
  }
  /////////////////////////////////////////////////////////
    public function store(Request $request)
  {
    $miembro = new PaisM;
    $miembro->id=$request->input('id');
    $miembro->nombre=$request->input('nombre');
    $miembro->save();
    return redirect()->route('paisM.index');
  }
  /////////////////////////////////////////////////////////
  public function delete($id) 
  {
    $miembro= PaisM::findOrFail($id);
    $miembro->delete();
    return redirect()->route('paisM.index');
  }
  /////////////////////////////////////////////////////////
  public function create()
  {
    return view('paisM.create');
  }
  /////////////////////////////////////////////////////////
  public function show($id)
  {
    $miembro=PaisM::find($id);
    return view('paisM.show',compact('miembro'));
  }
  /////////////////////////////////////////////////////////
  public function edit($id)
  {
    $miembro=PaisM::find($id);
    return view('paisM.edit',compact('miembro'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $this->validate($request,[ 'id'=>'required', 'nombre'=>'required']);
    PaisM::find($id)->update($request->all());
    return redirect()->route('paisM.index')->with('success','Registro creado satisfactoriamente');
  }
  /////////////////////////////////////////////////////////
  public function destroy($id) 
  {
    $miembro= PaisM::findOrFail($id);
    $miembro->delete();
    return redirect()->route('paisM.index');
  }
  /////////////////////////////////////////////////////////
  public function getMiembro(){
    $miembro=PaisM::all();
    return response()->json($miembro);
  }
}