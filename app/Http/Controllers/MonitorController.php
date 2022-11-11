<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitor;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if($search) {
            $monitor = '';

            $monitor = Monitor::where([
                ['NomeMonitor', 'like', '%'.$monitor.'%']
            ])->get(); 

        }else{
            $monitor = Monitor::all();
        }

        $monitors = Monitor::all();

        return view('site.monitor.index', ['monitors' => $monitors, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.monitor.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patrio = Monitor::where('PatrimonioMonitor','=',$request->PatrimonioMonitor)->count();
        if($patrio >= 1){
            return redirect('/monitor/create')->with('msg', 'Patrimônio de Monitor já existente!');
        }

        $monitor = new Monitor;

        $monitor->NomeMonitor = $request->NomeMonitor;
        $monitor->PatrimonioMonitor = $request->PatrimonioMonitor;
        $monitor->SerieMonitor = $request->SerieMonitor;
        $monitor->LocalMonitor = $request->LocalMonitor;
        $monitor->ResponsavelMonitor = $request->ResponsavelMonitor;

     

        $monitor->save();

        return redirect('/dashboard')->with('msg', 'Monitor Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitor = Monitor::findOrFail($id);

        return view('site.monitor.show', ['monitor' => $monitor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monitor = Monitor::findOrFail($id);

        return view('site.monitor.edit', ['monitor' => $monitor]);

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
        Monitor::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Monitor Editado com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Monitor::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg-error', 'Monitor Excluído com Sucesso!');
    }
}
