<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = Notebook::all();

        return view('site.notebook.index', ['notebooks' => $notebooks]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.notebook.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patrio = Notebook::where('PatrimonioNotebook','=',$request->PatrimonioNotebook)->count();
        if($patrio >= 1){
            return redirect('/notebook/create')->with('msg', 'Patrimônio de Notebook já existente!');
        }

        $notebook = new Notebook;

        $notebook->NomeNotebook = $request->NomeNotebook;
        $notebook->PatrimonioNotebook = $request->PatrimonioNotebook;
        $notebook->SerieNotebook = $request->SerieNotebook;
        $notebook->LocalNotebook = $request->LocalNotebook;
        $notebook->ResponsavelNotebook = $request->ResponsavelNotebook;


        $notebook->save();

        return redirect('/dashboard')->with('msg', 'Notebook Cadastrado com Sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notebooks = Notebook::findOrFail($id);

        return view('notebook.show', ['notebooks' => $notebooks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notebook = Notebook::findOrFail($id);

        return view('site.notebook.edit', ['notebook' => $notebook]);
        
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
        Notebook::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Notebook Editado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notebook::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg-error', 'Notebook Excluído com Sucesso!');
        
    }
}
