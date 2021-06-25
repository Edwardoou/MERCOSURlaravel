<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // verificar el usuario sea un admin
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']); // esto decide que usuario accede a la vista, pueden ser ambos.
        $usuario = User::orderBy('id', 'ASC')->get();
        return view('usuarios.index')->with('usuario', $usuario);
    }
   /////////////////////////////////////////////////////////
    public function store(Request $request)
  {
    $usuario = new usuarios;
    $usuario->id=$request->input('id');
    $usuario->nombre=$request->input('nombre');
    $usuario->save();
    return redirect()->route('usuarios.index');
  }
  /////////////////////////////////////////////////////////
  public function delete($id) 
  {
    $usuario= User::findOrFail($id);
    $usuario->delete();
    return redirect()->route('usuarios.index');
  }
  /////////////////////////////////////////////////////////
  public function show($id)
  {
    $usuario=User::find($id);
    return view('usuarios.show',compact('usuario'));
  }
  /////////////////////////////////////////////////////////
  public function edit($id)
  {
    $usuario=User::find($id);
    return view('usuarios.edit',compact('usuario'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id)
  {
    $this->validate($request,[ 'id'=>'required', 'name'=>'required','email'=>'required']);
    User::find($id)->update($request->all());
    return redirect()->route('usuarios.index')->with('success','Registro creado satisfactoriamente');
  }
  /////////////////////////////////////////////////////////
  public function destroy($id) 
  {
    $usuario= User::findOrFail($id);
    $usuario->delete();
    return redirect()->route('usuarios.index');
  }
  /////////////////////////////////////////////////////////
  public function getusuario(){
    $usuario=User::all();
    return response()->json($usuario);
  }
}
