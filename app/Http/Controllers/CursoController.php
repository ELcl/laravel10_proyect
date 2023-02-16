<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return ('hola');
        $cursos = Curso::get();
        //return $cursos;
        return view('cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $curso = new Curso;
        $curso->nombre = $request->nombre;
        $curso->area = $request->area;
        $curso->save();
        return redirect('curso');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //return $id;
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->update([
            'nombre'=>request('nombre'),
            'area'=>request('area'),
        ]);
        return redirect()->route('curso.show',$curso);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('curso');
    }
}
