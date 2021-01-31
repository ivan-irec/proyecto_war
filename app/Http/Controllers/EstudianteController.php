<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes']=Estudiante::paginate(3);

        return view('estudiantes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
        
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Edad' => 'required|string|max:100',
            'Email'=> 'required|email',
            'Telefono' => 'required|string|max:100',
        ];


        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);



        //$datosEstudiante=request()->all();

        $datosEstudiante=request()->except('_token');

        Estudiante::insert($datosEstudiante); //inserta la informacion en la base de datos

        //return response()->json($datosEstudiante); esto lo comentamos
        return redirect('estudiantes')->with('Mensaje','Estudiante AGREGADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante= Estudiante::findOrFail($id);

        return view('estudiantes.edit',compact('estudiante'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
        
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Edad' => 'required|string|max:100',
            'Email'=> 'required|email',
            'Telefono' => 'required|string|max:100',
        ];


        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);



        $datosEstudiante=request()->except(['_token','_method']);
        Estudiante::where('id','=',$id)->update($datosEstudiante); //actualiza de acuerdo al id

        //$estudiante= Estudiante::findOrFail($id);
        //return view('estudiantes.edit',compact('estudiante'));

        return redirect('estudiantes')->with('Mensaje','Estudiante MODIFICADO');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiante= Estudiante::findOrFail($id);

        Estudiante::destroy($id);


        return redirect('estudiantes')->with('Mensaje','Estudiante ELIMINADO');;
    }
}
