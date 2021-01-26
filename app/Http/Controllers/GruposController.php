<?php

namespace App\Http\Controllers;

use App\Grupos;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['grupos']=Grupos::paginate(3);

        return view('grupos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
        
            'Grupo' => 'required|string|max:100',
            'Semestre' => 'required|string|max:100',
            'Turno' => 'required',
            
        ];

        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosGrupo=request()->except('_token');

        Grupos::insert($datosGrupo); 
        return redirect('grupos')->with('Mensaje','Grupo AGREGADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function show(Grupos $grupos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo= Grupos::findOrFail($id);

        return view('grupos.edit',compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
        
            'Grupo' => 'required|string|max:100',
            'Semestre' => 'required|string|max:100',
            'Turno' => 'required',
            
        ];

        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosGrupo=request()->except(['_token','_method']);
        Grupos::where('id','=',$id)->update($datosGrupo);

        return redirect('grupos')->with('Mensaje','Grupo MODIFICADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $grupo= Grupos::findOrFail($id);

        Grupos::destroy($id);


        return redirect('grupos')->with('Mensaje','Grupo ELIMINADO');;
    }
}
