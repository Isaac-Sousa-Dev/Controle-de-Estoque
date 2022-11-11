<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;

class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadors = Computador::all();

        return view('site.computador.index', ['computadors' => $computadors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.computador.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patrio = Computador::where('PatrimonioComputador','=',$request->PatrimonioComputador)->count();
        if($patrio >= 1){
            return redirect('/computador/create')->with('msg', 'Patrimônio de Computador já existente!');
        }

        $computador = new Computador;

        $computador->NomeComputador = $request->NomeComputador;
        $computador->PatrimonioComputador = $request->PatrimonioComputador;
        $computador->SerieComputador = $request->SerieComputador;
        $computador->LocalComputador = $request->LocalComputador;
        $computador->ResponsavelComputador = $request->ResponsavelComputador;

        $computador->save();

        return redirect('/dashboard')->with('msg', 'Computador Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computador = Computador::findOrFail($id);

        return view('site.computador.show', ['computador' => $computador]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computador = Computador::findOrFail($id);

        return view('site.computador.edit', ['computador' => $computador]);
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
        
        Computador::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Computador Editado com Sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Computador::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg-error', 'Computador Excluído com Sucesso!');
        
    }
}