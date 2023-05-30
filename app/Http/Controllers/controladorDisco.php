<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disco;

class controladorDisco extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disco = Disco::all();
        return view('site.listaDisco', compact('disco'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.novoDisco');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Disco();
        $data->titulo = $request->input('titulo');
        $data->name = $request->input('name');
        $data->estilo = $request->input('estilo');
        $data->quantidade = $request->input('qtd');
        $data->save();
        return redirect('/discos/lista')->with('success', 'Disco cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function album(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Disco::find($id);
        if(isset($data)){
            $disco = Disco::all();
            $data->discos = $disco;
            return view('site.editaDisco', compact('data'));
        }
        return redirect('/discos/lista')->with('danger', 'Erro ao editar o disco');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Disco::find($id);
        if(isset($data)){
            $data->titulo = $request->input('titulo');
            $data->name = $request->input('name');
            $data->estilo = $request->input('estilo');
            $data->quantidade = $request->input('qtd');
            $data->save();
            $data->save();
        }else{
            return redirect('/discos/lista')->with('danger', 'Erro ao editar o disco');
        }
        return redirect('/discos/lista')->with('success', 'Disco editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Disco::find($id);
        if(isset($data)){
            $data->delete();
        }else{
            return redirect('/discos/lista')->with('danger', 'Erro ao deletar o disco');
        }
        return redirect('/discos/lista')->with('success', 'Disco deletado com sucesso');
    }
}
