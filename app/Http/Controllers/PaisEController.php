<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PaisE;
class PaisEController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
    public function index(Request $request)
    {
      $request->user()->authorizeRoles(['user']);
      $extranjero = PaisE::orderBy('id', 'ASC')->get();
      return view('paisE.index')->with('extranjero', $extranjero);
    }
    
  
    public function create()
    {
    //
    return view('paisE.create');
    }
    public function show($id)
 {
 $extranjero=PaisE::find($id);
 return view('paisE.show',compact('extranjero'));
 }
  public function store(Request $request)
  {
    $extranjero = new PaisE;
    $extranjero->id=$request->input('id');
    $extranjero->nombre=$request->input('nombre');
    $extranjero->save();
    return redirect()->route('paisE.index');
  }
  public function edit($id)
 {
 //
 $extranjero=PaisE::find($id);
 return view('paisE.edit',compact('extranjero'));
 }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'id'=>'required', 'nombre'=>'required']);
    PaisE::find($id)->update($request->all());
    return redirect()->route('paisE.index')->with('success','Registro creado satisfactoriamente');
    }
    public function destroy($id) 
    {
             $extranjero= PaisE::findOrFail($id);
             $extranjero->delete();
    
             return redirect()->route('paisE.index');
    }
    public function getExtranjero(){
      $extranjero=PaisE::all();
      return response()->json($extranjero);
      }
}