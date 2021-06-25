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
    public function index()
    {
      // Devolverá todos los comercial
      $extranjero = PaisE::get();
      return view('paisE.index')->with('extranjero', $extranjero);
    }
    

    public function store(Request $request)
  {
    $extranjero = new PaisE;
    $extranjero->id=$request->input('id');
    $extranjero->nombre=$request->input('nombre');
    $extranjero->save();
    return redirect()->route('paisE.index');
  }
  // public function destroy($id)
  //   {
  //       //
  //   $id->delete();
  //   return redirect()->route('paisE.index')->with('success','Registro eliminado satisfactoriamente');
  //   }
  public function delete($id) 
  {
           $extranjero= PaisE::findOrFail($id);
           $extranjero->delete();
  
           return redirect()->route('paisE.index');
  }
  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'id'=>'required', 'nombre'=>'required']);
    PaisE::find($id)->update($request->all());
    return redirect()->route('paisE.index')->with('success','Registro creado satisfactoriamente');
    }

}