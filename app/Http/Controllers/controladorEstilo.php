<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilo;
use App\Models\Disco;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class controladorEstilo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evento = Evento::all();
        return view('site.listaEstilos', compact('estilo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.novoEstilo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Estilo();
        $data->descricao = $request->input('descricao');
        $data->save();
        return redirect('/estilos/lista')->with('success', 'Estilo cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Estilo::find($id);
        if(isset($data)){
            $estilo = Estilo::all();
            $data->estilo = $estilo;
            return view('site.editaEstilo', compact('data'));
        }
        return redirect('/estilos/lista')->with('danger', 'Erro ao editar o estilo');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Estilo::find($id);
        if(isset($data)){
            $data->descricao = $request->input('descricao');
            $data->save();
        }else{
            return redirect('/estilos/lista')->with('danger', 'Erro ao editar o estilo');
        }
        return redirect('/estilos/lista')->with('success', 'Estilo editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Estilo::find($id);
        if(isset($data)){
            $data->delete();
        }else{
            return redirect('/estilos/lista')->with('danger', 'Erro ao deletar o estilo');
        }
        return redirect('/estilos/lista')->with('success', 'Estilo deletado com sucesso');
    }
}
